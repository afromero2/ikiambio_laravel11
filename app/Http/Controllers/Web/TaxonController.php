<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Taxon;
use Illuminate\Http\Request;

class TaxonController extends Controller
{
    public function index()
    {
        $items = Taxon::orderByDesc('taxonID')->paginate(15);
        return view('pages/taxon/index', compact('items'));
    }

    public function create()
    {
        return view('pages/taxon/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Taxon::create($data);
        return redirect()->route('taxon.index')->with('ok','Creado');
    }

    public function show(Taxon $taxon)
    {
        return view('pages/taxon/show', ['item' => $taxon]);
    }

    public function edit(Taxon $taxon)
    {
        return view('pages/taxon/edit', ['item' => $taxon]);
    }

    public function update(Request $request, Taxon $taxon)
    {
        $data = $request->all();
        $taxon->update($data);
        return redirect()->route('taxon.index')->with('ok','Actualizado');
    }

    public function destroy(Taxon $taxon)
    {
        $taxon->delete();
        return back()->with('ok','Eliminado');
    }
}
