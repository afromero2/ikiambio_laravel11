<?php

namespace App\Http\Controllers\Web\Occurrence;

use App\Http\Controllers\Controller;
use App\Models\Vocab\Occurrence\Reproductivecondition;
use Illuminate\Http\Request;

class ReproductiveconditionController extends Controller
{
    public function index()
    {
        $items = Reproductivecondition::orderByDesc('reprocond_id')->paginate(15);
        return view('pages/vocab-occurrence-reproductiveCondition/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-occurrence-reproductiveCondition/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Reproductivecondition::create($data);
        return redirect()->route('vocab-occurrence-reproductiveCondition.index')->with('ok','Creado');
    }

    public function show(Reproductivecondition $reproductivecondition)
    {
        return view('pages/vocab-occurrence-reproductiveCondition/show', ['item' => $reproductivecondition]);
    }

    public function edit(Reproductivecondition $reproductivecondition)
    {
        return view('pages/vocab-occurrence-reproductiveCondition/edit', ['item' => $reproductivecondition]);
    }

    public function update(Request $request, Reproductivecondition $reproductivecondition)
    {
        $data = $request->all();
        $reproductivecondition->update($data);
        return redirect()->route('vocab-occurrence-reproductiveCondition.index')->with('ok','Actualizado');
    }

    public function destroy(Reproductivecondition $reproductivecondition)
    {
        $reproductivecondition->delete();
        return back()->with('ok','Eliminado');
    }
}
