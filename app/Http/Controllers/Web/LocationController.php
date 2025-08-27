<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $items = Location::orderByDesc('locationID')->paginate(15);
        return view('pages/location/index', compact('items'));
    }

    public function create()
    {
        return view('pages/location/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Location::create($data);
        return redirect()->route('location.index')->with('ok','Creado');
    }

    public function show(Location $location)
    {
        return view('pages/location/show', ['item' => $location]);
    }

    public function edit(Location $location)
    {
        return view('pages/location/edit', ['item' => $location]);
    }

    public function update(Request $request, Location $location)
    {
        $data = $request->all();
        $location->update($data);
        return redirect()->route('location.index')->with('ok','Actualizado');
    }

    public function destroy(Location $location)
    {
        $location->delete();
        return back()->with('ok','Eliminado');
    }
}
