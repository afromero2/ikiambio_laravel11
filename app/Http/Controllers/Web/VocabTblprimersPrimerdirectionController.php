<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\VocabTblprimersPrimerdirection;
use Illuminate\Http\Request;

class VocabTblprimersPrimerdirectionController extends Controller
{
    public function index()
    {
        $items = VocabTblprimersPrimerdirection::orderByDesc('id_primerdirection')->paginate(15);
        return view('pages/vocab-tblprimers-primerDirection/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-tblprimers-primerDirection/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = VocabTblprimersPrimerdirection::create($data);
        return redirect()->route('vocab-tblprimers-primerDirection.index')->with('ok','Creado');
    }

    public function show(VocabTblprimersPrimerdirection $vocabTblprimersPrimerdirection)
    {
        return view('pages/vocab-tblprimers-primerDirection/show', ['item' => $vocabTblprimersPrimerdirection]);
    }

    public function edit(VocabTblprimersPrimerdirection $vocabTblprimersPrimerdirection)
    {
        return view('pages/vocab-tblprimers-primerDirection/edit', ['item' => $vocabTblprimersPrimerdirection]);
    }

    public function update(Request $request, VocabTblprimersPrimerdirection $vocabTblprimersPrimerdirection)
    {
        $data = $request->all();
        $vocabTblprimersPrimerdirection->update($data);
        return redirect()->route('vocab-tblprimers-primerDirection.index')->with('ok','Actualizado');
    }

    public function destroy(VocabTblprimersPrimerdirection $vocabTblprimersPrimerdirection)
    {
        $vocabTblprimersPrimerdirection->delete();
        return back()->with('ok','Eliminado');
    }
}
