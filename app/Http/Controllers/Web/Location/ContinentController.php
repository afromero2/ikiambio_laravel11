<?php

namespace App\Http\Controllers\Web\Location;

use App\Http\Controllers\Controller;
use App\Models\Vocab\Location\Continent;
use Illuminate\Http\Request;

class ContinentController extends Controller
{
    public function index()
    {
        $items = Continent::orderByDesc('continent_id')->paginate(15);
        return view('pages/vocab-location-continent/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-location-continent/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Continent::create($data);
        return redirect()->route('vocab-location-continent.index')->with('ok','Creado');
    }

    public function show(Continent $continent)
    {
        return view('pages/vocab-location-continent/show', ['item' => $continent]);
    }

    public function edit(Continent $continent)
    {
        return view('pages/vocab-location-continent/edit', ['item' => $continent]);
    }

    public function update(Request $request, Continent $continent)
    {
        $data = $request->all();
        $continent->update($data);
        return redirect()->route('vocab-location-continent.index')->with('ok','Actualizado');
    }

    public function destroy(Continent $continent)
    {
        $continent->delete();
        return back()->with('ok','Eliminado');
    }
}
