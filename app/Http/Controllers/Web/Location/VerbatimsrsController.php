<?php

namespace App\Http\Controllers\Web\Location;

use App\Http\Controllers\Controller;
use App\Models\Vocab\Location\Verbatimsrs;
use Illuminate\Http\Request;

class VerbatimsrsController extends Controller
{
    public function index()
    {
        $items = Verbatimsrs::orderByDesc('verbatimSRS_id')->paginate(15);
        return view('pages/vocab-location-verbatimSRS/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-location-verbatimSRS/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Verbatimsrs::create($data);
        return redirect()->route('vocab-location-verbatimSRS.index')->with('ok','Creado');
    }

    public function show(Verbatimsrs $verbatimsrs)
    {
        return view('pages/vocab-location-verbatimSRS/show', ['item' => $verbatimsrs]);
    }

    public function edit(Verbatimsrs $verbatimsrs)
    {
        return view('pages/vocab-location-verbatimSRS/edit', ['item' => $verbatimsrs]);
    }

    public function update(Request $request, Verbatimsrs $verbatimsrs)
    {
        $data = $request->all();
        $verbatimsrs->update($data);
        return redirect()->route('vocab-location-verbatimSRS.index')->with('ok','Actualizado');
    }

    public function destroy(Verbatimsrs $verbatimsrs)
    {
        $verbatimsrs->delete();
        return back()->with('ok','Eliminado');
    }
}
