<?php

namespace App\Http\Controllers\Web\RecordLevel;

use App\Http\Controllers\Controller;
use App\Models\Vocab\RecordLevel\Collectionid;
use Illuminate\Http\Request;

class CollectionidController extends Controller
{
    public function index()
    {
        $items = Collectionid::orderByDesc('collection_id')->paginate(15);
        return view('pages/vocab-record-level-collectionID/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-record-level-collectionID/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Collectionid::create($data);
        return redirect()->route('vocab-record-level-collectionID.index')->with('ok','Creado');
    }

    public function show(Collectionid $collectionid)
    {
        return view('pages/vocab-record-level-collectionID/show', ['item' => $collectionid]);
    }

    public function edit(Collectionid $collectionid)
    {
        return view('pages/vocab-record-level-collectionID/edit', ['item' => $collectionid]);
    }

    public function update(Request $request, Collectionid $collectionid)
    {
        $data = $request->all();
        $collectionid->update($data);
        return redirect()->route('vocab-record-level-collectionID.index')->with('ok','Actualizado');
    }

    public function destroy(Collectionid $collectionid)
    {
        $collectionid->delete();
        return back()->with('ok','Eliminado');
    }
}
