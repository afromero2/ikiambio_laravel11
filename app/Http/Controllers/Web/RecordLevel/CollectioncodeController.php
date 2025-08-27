<?php

namespace App\Http\Controllers\Web\RecordLevel;

use App\Http\Controllers\Controller;
use App\Models\Vocab\RecordLevel\Collectioncode;
use Illuminate\Http\Request;

class CollectioncodeController extends Controller
{
    public function index()
    {
        $items = Collectioncode::orderByDesc('collectionCode_id')->paginate(15);
        return view('pages/vocab-record-level-collectionCode/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-record-level-collectionCode/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Collectioncode::create($data);
        return redirect()->route('vocab-record-level-collectionCode.index')->with('ok','Creado');
    }

    public function show(Collectioncode $collectioncode)
    {
        return view('pages/vocab-record-level-collectionCode/show', ['item' => $collectioncode]);
    }

    public function edit(Collectioncode $collectioncode)
    {
        return view('pages/vocab-record-level-collectionCode/edit', ['item' => $collectioncode]);
    }

    public function update(Request $request, Collectioncode $collectioncode)
    {
        $data = $request->all();
        $collectioncode->update($data);
        return redirect()->route('vocab-record-level-collectionCode.index')->with('ok','Actualizado');
    }

    public function destroy(Collectioncode $collectioncode)
    {
        $collectioncode->delete();
        return back()->with('ok','Eliminado');
    }
}
