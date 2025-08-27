<?php

namespace App\Http\Controllers\Web\Taxon;

use App\Http\Controllers\Controller;
use App\Models\Vocab\Taxon\Taxonomicstatus;
use Illuminate\Http\Request;

class TaxonomicstatusController extends Controller
{
    public function index()
    {
        $items = Taxonomicstatus::orderByDesc('taxonomicStatus_id')->paginate(15);
        return view('pages/vocab-taxon-taxonomicStatus/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-taxon-taxonomicStatus/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Taxonomicstatus::create($data);
        return redirect()->route('vocab-taxon-taxonomicStatus.index')->with('ok','Creado');
    }

    public function show(Taxonomicstatus $taxonomicstatus)
    {
        return view('pages/vocab-taxon-taxonomicStatus/show', ['item' => $taxonomicstatus]);
    }

    public function edit(Taxonomicstatus $taxonomicstatus)
    {
        return view('pages/vocab-taxon-taxonomicStatus/edit', ['item' => $taxonomicstatus]);
    }

    public function update(Request $request, Taxonomicstatus $taxonomicstatus)
    {
        $data = $request->all();
        $taxonomicstatus->update($data);
        return redirect()->route('vocab-taxon-taxonomicStatus.index')->with('ok','Actualizado');
    }

    public function destroy(Taxonomicstatus $taxonomicstatus)
    {
        $taxonomicstatus->delete();
        return back()->with('ok','Eliminado');
    }
}
