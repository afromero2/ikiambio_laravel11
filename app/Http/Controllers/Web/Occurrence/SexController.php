<?php

namespace App\Http\Controllers\Web\Occurrence;

use App\Http\Controllers\Controller;
use App\Models\Vocab\Occurrence\Sex;
use Illuminate\Http\Request;

class SexController extends Controller
{
    public function index()
    {
        $items = Sex::orderByDesc('sex_id')->paginate(15);
        return view('pages/vocab-occurrence-sex/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-occurrence-sex/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Sex::create($data);
        return redirect()->route('vocab-occurrence-sex.index')->with('ok','Creado');
    }

    public function show(Sex $sex)
    {
        return view('pages/vocab-occurrence-sex/show', ['item' => $sex]);
    }

    public function edit(Sex $sex)
    {
        return view('pages/vocab-occurrence-sex/edit', ['item' => $sex]);
    }

    public function update(Request $request, Sex $sex)
    {
        $data = $request->all();
        $sex->update($data);
        return redirect()->route('vocab-occurrence-sex.index')->with('ok','Actualizado');
    }

    public function destroy(Sex $sex)
    {
        $sex->delete();
        return back()->with('ok','Eliminado');
    }
}
