<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Measurementorfacts;
use Illuminate\Http\Request;

class MeasurementorfactsController extends Controller
{
    public function index()
    {
        $items = Measurementorfacts::orderByDesc('measurementID')->paginate(15);
        return view('pages/measurementorfacts/index', compact('items'));
    }

    public function create()
    {
        return view('pages/measurementorfacts/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Measurementorfacts::create($data);
        return redirect()->route('measurementorfacts.index')->with('ok','Creado');
    }

    public function show(Measurementorfacts $measurementorfacts)
    {
        return view('pages/measurementorfacts/show', ['item' => $measurementorfacts]);
    }

    public function edit(Measurementorfacts $measurementorfacts)
    {
        return view('pages/measurementorfacts/edit', ['item' => $measurementorfacts]);
    }

    public function update(Request $request, Measurementorfacts $measurementorfacts)
    {
        $data = $request->all();
        $measurementorfacts->update($data);
        return redirect()->route('measurementorfacts.index')->with('ok','Actualizado');
    }

    public function destroy(Measurementorfacts $measurementorfacts)
    {
        $measurementorfacts->delete();
        return back()->with('ok','Eliminado');
    }
}
