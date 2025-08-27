<?php

namespace App\Http\Controllers\Web\Identification;

use App\Http\Controllers\Controller;
use App\Models\Vocab\Identification\Typestatus;
use Illuminate\Http\Request;

class TypestatusController extends Controller
{
    public function index()
    {
        $items = Typestatus::orderByDesc('vocab_identification_typeStatus_id')->paginate(15);
        return view('pages/vocab-identification-typeStatus/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-identification-typeStatus/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Typestatus::create($data);
        return redirect()->route('vocab-identification-typeStatus.index')->with('ok','Creado');
    }

    public function show(Typestatus $typestatus)
    {
        return view('pages/vocab-identification-typeStatus/show', ['item' => $typestatus]);
    }

    public function edit(Typestatus $typestatus)
    {
        return view('pages/vocab-identification-typeStatus/edit', ['item' => $typestatus]);
    }

    public function update(Request $request, Typestatus $typestatus)
    {
        $data = $request->all();
        $typestatus->update($data);
        return redirect()->route('vocab-identification-typeStatus.index')->with('ok','Actualizado');
    }

    public function destroy(Typestatus $typestatus)
    {
        $typestatus->delete();
        return back()->with('ok','Eliminado');
    }
}
