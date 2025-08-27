<?php

namespace App\Http\Controllers\Web\Occurrence;

use App\Http\Controllers\Controller;
use App\Models\Vocab\Occurrence\Lifestage;
use Illuminate\Http\Request;

class LifestageController extends Controller
{
    public function index()
    {
        $items = Lifestage::orderByDesc('lifestage_id')->paginate(15);
        return view('pages/vocab-occurrence-lifeStage/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-occurrence-lifeStage/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Lifestage::create($data);
        return redirect()->route('vocab-occurrence-lifeStage.index')->with('ok','Creado');
    }

    public function show(Lifestage $lifestage)
    {
        return view('pages/vocab-occurrence-lifeStage/show', ['item' => $lifestage]);
    }

    public function edit(Lifestage $lifestage)
    {
        return view('pages/vocab-occurrence-lifeStage/edit', ['item' => $lifestage]);
    }

    public function update(Request $request, Lifestage $lifestage)
    {
        $data = $request->all();
        $lifestage->update($data);
        return redirect()->route('vocab-occurrence-lifeStage.index')->with('ok','Actualizado');
    }

    public function destroy(Lifestage $lifestage)
    {
        $lifestage->delete();
        return back()->with('ok','Eliminado');
    }
}
