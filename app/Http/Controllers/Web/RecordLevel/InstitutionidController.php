<?php

namespace App\Http\Controllers\Web\RecordLevel;

use App\Http\Controllers\Controller;
use App\Models\Vocab\RecordLevel\Institutionid; // si tu modelo se llama así (sin mayúscula en Id)
use Illuminate\Http\Request;

class InstitutionIdController extends Controller
{
    public function index()
    {
        $items = Institutionid::orderByDesc('institution_id')->paginate(15);
        return view('pages.vocab-record-level-institution-id.index', compact('items'));
    }

    public function create()
    {
        return view('pages.vocab-record-level-institution-id.create');
    }

    public function store(Request $request)
    {
        // Ajusta reglas según tu esquema real
        $data = $request->all();
        Institutionid::create($data);

        return redirect()
            ->route('vocab-record-level-institution-id.index')
            ->with('ok', 'Creado');
    }

    public function show(Institutionid $institutionId)
    {
        return view('pages.vocab-record-level-institution-id.show', ['item' => $institutionId]);
    }

    public function edit(Institutionid $institutionId)
    {
        return view('pages.vocab-record-level-institution-id.edit', ['item' => $institutionId]);
    }

    public function update(Request $request, Institutionid $institutionId)
    {
        $data = $request->all();
        $institutionId->update($data);

        return redirect()
            ->route('vocab-record-level-institution-id.index')
            ->with('ok', 'Actualizado');
    }

    public function destroy(Institutionid $institutionId)
    {
        $institutionId->delete();
        return back()->with('ok', 'Eliminado');
    }
}
