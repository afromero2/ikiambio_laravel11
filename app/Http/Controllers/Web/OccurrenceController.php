<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Occurrence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

// Relacionados
use App\Models\RecordLevel;

// Vocabs
use App\Models\Vocab\Occurrence\Organismquantitytype;
use App\Models\Vocab\Occurrence\Sex;
use App\Models\Vocab\Occurrence\Lifestage;
use App\Models\Vocab\Occurrence\Reproductivecondition;
use App\Models\Vocab\Occurrence\Establishmentmeans;
use App\Models\Vocab\Occurrence\Disposition;

use App\Models\Organism;
use App\Models\Location;
use App\Models\Taxon;
use App\Models\Identification;


class OccurrenceController extends Controller
{
    public function index()
    {
        $items = Occurrence::with([
            'recordLevelRef',
            'organismQuantityTypeRef','sexRef','lifeStageRef','reproductiveConditionRef',
            'establishmentMeansRef','dispositionRef',
            'organismRef',
        ])
        ->orderByDesc('id_occ_bd')
        ->paginate(15);

        return view('pages.occurrence.index', compact('items'));
    }

    public function create()
    {
        return view('pages.occurrence.create', $this->options());
    }

    public function store(Request $request)
    {
        $data = $this->validated($request); // tu validación actual (puedes dejar estos 4 como 'nullable|string')

        DB::transaction(function () use (&$data) {
            // 1) crear/reusar relacionados
            $data['organismID']       = $this->upsertOrganism($data['organismID'] ?? null);
            $data['locationID']       = $this->upsertLocation($data['locationID'] ?? null);
            $data['taxonID']          = $this->upsertTaxon($data['taxonID'] ?? null);
            $data['identificationID'] = $this->upsertIdentification($data['identificationID'] ?? null);

            // 2) crear occurrence
            \App\Models\Occurrence::create($data);
        });

        return redirect()->route('occurrence.index')->with('ok','Creado');
    }



    public function show(Occurrence $occurrence)
    {
        $occurrence->load([
            'recordLevelRef',
            'organismQuantityTypeRef','sexRef','lifeStageRef','reproductiveConditionRef',
            'establishmentMeansRef','dispositionRef',
            'organismRef',
        ]);

        return view('pages.occurrence.show', ['item' => $occurrence]);
    }

    public function edit(Occurrence $occurrence)
    {
        $opts = $this->options();
        $opts['item'] = $occurrence;
        return view('pages.occurrence.edit', $opts);
    }

    public function update(Request $request, Occurrence $occurrence)
    {
        $data = $this->validated($request, $occurrence);

        DB::transaction(function () use (&$data, $occurrence) {
            $data['organismID']       = $this->upsertOrganism($data['organismID'] ?? $occurrence->organismID);
            $data['locationID']       = $this->upsertLocation($data['locationID'] ?? $occurrence->locationID);
            $data['taxonID']          = $this->upsertTaxon($data['taxonID'] ?? $occurrence->taxonID);
            $data['identificationID'] = $this->upsertIdentification($data['identificationID'] ?? $occurrence->identificationID);

            $occurrence->update($data);
        });

        return redirect()->route('occurrence.index')->with('ok','Actualizado');
    }

    public function destroy(Occurrence $occurrence)
    {
        DB::transaction(function () use ($occurrence) {
            $occurrence->delete();
        });

        return back()->with('ok','Eliminado');
    }

    // ================= Helpers =================

    private function options(): array
    {
        return [
            'recordLevels' => RecordLevel::orderByDesc('record_level_id')
                ->get(['record_level_id','datasetName']),

            'oqtypes' => Organismquantitytype::orderBy('oqtype_value')
                ->get(['oqtype_id','oqtype_value','description']),

            'sexes' => Sex::orderBy('sex_value')
                ->get(['sex_id','sex_value','description']),

            'lifeStages' => Lifestage::orderBy('lifestage_value')
                ->get(['lifestage_id','lifestage_value','description']),

            'reproConds' => Reproductivecondition::orderBy('reprocond_value')
                ->get(['reprocond_id','reprocond_value','description']),

            'estabMeans' => Establishmentmeans::orderBy('estabmeans_value')
                ->get(['estabmeans_id','estabmeans_value','description']),

            'dispositions' => Disposition::orderBy('disposition_value')
                ->get(['disposition_id','disposition_value','description']),

            // Si quieres sugerir organisms existentes:
            // 'organisms' => Organism::orderBy('organismID')->get(['organismID']),
        ];
    }

    private function validated(Request $request, ?Occurrence $occurrence = null): array
    {
        $id = $occurrence?->getKey();

        return $request->validate([
            'occurrenceID' => [
                'nullable','string',
                Rule::unique((new Occurrence)->getTable(), 'occurrenceID')->ignore($id, 'id_occ_bd'),
            ],
            'record_level_id' => ['nullable','integer', Rule::exists((new RecordLevel)->getTable(),'record_level_id')],

            'catalogNumber' => [
                'nullable','string',
                Rule::unique((new Occurrence)->getTable(), 'catalogNumber')->ignore($id, 'id_occ_bd'),
            ],

            'recordNumber' => ['nullable','string'],
            'recordedBy'   => ['nullable','string'],

            'individualCount' => ['nullable','integer'],
            'organismQuantity'=> ['nullable','numeric'],

            'organismQuantityType' => ['required','integer', Rule::exists((new Organismquantitytype)->getTable(),'oqtype_id')],
            'sex'                 => ['required','integer', Rule::exists((new Sex)->getTable(),'sex_id')],
            'lifeStage'           => ['required','integer', Rule::exists((new Lifestage)->getTable(),'lifestage_id')],
            'reproductiveCondition'=> ['required','integer', Rule::exists((new Reproductivecondition)->getTable(),'reprocond_id')],
            'establishmentMeans'  => ['required','integer', Rule::exists((new Establishmentmeans)->getTable(),'estabmeans_id')],
            'disposition'         => ['required','integer', Rule::exists((new Disposition)->getTable(),'disposition_id')],

            'behavior'            => ['nullable','string'],
            'substrate'           => ['nullable','string'],
            'preparations'        => ['nullable','string'],
            'associatedMedia'     => ['nullable','string'],
            'associatedSequences' => ['nullable','string'],
            'associatedTaxa'      => ['nullable','string'],
            'otherCatalogNumbers' => ['nullable','string'],
            'occurrenceRemarks'   => ['nullable','string'],

            'organismID'          => ['nullable','string'], // si quieres validar que exista: Rule::exists((new Organism)->getTable(),'organismID')
            'locationID'          => ['nullable','string'],
            'taxonID'             => ['nullable','string'],

            'identificationID' => [
                'nullable','string',
                Rule::unique((new Occurrence)->getTable(), 'identificationID')->ignore($id, 'id_occ_bd'),
            ],
        ]);
    }

    private function ensureStringPk(?string $id): string
    {
        // Si el usuario no envía un ID, generamos uno
        return $id && trim($id) !== '' ? trim($id) : (string) Str::uuid();
    }

    private function upsertOrganism(?string $rawId): string
    {
        $id = $this->ensureStringPk($rawId);
        // Puedes pasar más campos si los tienes en el form
        Organism::firstOrCreate(['organismID' => $id], [
            'associatedOccurrences' => null,
            'associatedOrganisms'   => null,
            'previousIdentifications'=> null,
        ]);
        return $id;
    }

    private function upsertLocation(?string $rawId): string
    {
        $id = $this->ensureStringPk($rawId);
        Location::firstOrCreate(['locationID' => $id], []);
        return $id;
    }

    private function upsertTaxon(?string $rawId): string
    {
        $id = $this->ensureStringPk($rawId);
        Taxon::firstOrCreate(['taxonID' => $id], []);
        return $id;
    }

    private function upsertIdentification(?string $rawId): string
    {
        $id = $this->ensureStringPk($rawId);
        Identification::firstOrCreate(['identificationID' => $id], []);
        return $id;
    }


}
