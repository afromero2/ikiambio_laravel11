<?php

namespace App\Http\Controllers\Web\Occurrence;

use App\Http\Controllers\Controller;
use App\Models\Vocab\Occurrence\Organismquantitytype;
use Illuminate\Http\Request;

class OrganismquantitytypeController extends Controller
{
    public function index()
    {
        $items = Organismquantitytype::orderByDesc('oqtype_id')->paginate(15);
        return view('pages/vocab-occurrence-organismQuantityType/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-occurrence-organismQuantityType/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Organismquantitytype::create($data);
        return redirect()->route('vocab-occurrence-organismQuantityType.index')->with('ok','Creado');
    }

    public function show(Organismquantitytype $organismquantitytype)
    {
        return view('pages/vocab-occurrence-organismQuantityType/show', ['item' => $organismquantitytype]);
    }

    public function edit(Organismquantitytype $organismquantitytype)
    {
        return view('pages/vocab-occurrence-organismQuantityType/edit', ['item' => $organismquantitytype]);
    }

    public function update(Request $request, Organismquantitytype $organismquantitytype)
    {
        $data = $request->all();
        $organismquantitytype->update($data);
        return redirect()->route('vocab-occurrence-organismQuantityType.index')->with('ok','Actualizado');
    }

    public function destroy(Organismquantitytype $organismquantitytype)
    {
        $organismquantitytype->delete();
        return back()->with('ok','Eliminado');
    }
}
