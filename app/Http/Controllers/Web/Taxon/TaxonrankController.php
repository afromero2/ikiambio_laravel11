<?php

namespace App\Http\Controllers\Web\Taxon;

use App\Http\Controllers\Controller;
use App\Models\Vocab\Taxon\Taxonrank;
use Illuminate\Http\Request;

class TaxonrankController extends Controller
{
    public function index()
    {
        $items = Taxonrank::orderByDesc('taxonRank_id')->paginate(15);
        return view('pages/vocab-taxon-taxonRank/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-taxon-taxonRank/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Taxonrank::create($data);
        return redirect()->route('vocab-taxon-taxonRank.index')->with('ok','Creado');
    }

    public function show(Taxonrank $taxonrank)
    {
        return view('pages/vocab-taxon-taxonRank/show', ['item' => $taxonrank]);
    }

    public function edit(Taxonrank $taxonrank)
    {
        return view('pages/vocab-taxon-taxonRank/edit', ['item' => $taxonrank]);
    }

    public function update(Request $request, Taxonrank $taxonrank)
    {
        $data = $request->all();
        $taxonrank->update($data);
        return redirect()->route('vocab-taxon-taxonRank.index')->with('ok','Actualizado');
    }

    public function destroy(Taxonrank $taxonrank)
    {
        $taxonrank->delete();
        return back()->with('ok','Eliminado');
    }
}
