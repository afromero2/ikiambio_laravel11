<?php

namespace App\Http\Controllers\Web\Location;

use App\Http\Controllers\Controller;
use App\Models\Vocab\Location\GeorefStatus;
use Illuminate\Http\Request;

class GeorefStatusController extends Controller
{
    public function index()
    {
        $items = GeorefStatus::orderByDesc('georef_status_id')->paginate(15);
        return view('pages/vocab-location-georef-status/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-location-georef-status/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = GeorefStatus::create($data);
        return redirect()->route('vocab-location-georef-status.index')->with('ok','Creado');
    }

    public function show(GeorefStatus $georefStatus)
    {
        return view('pages/vocab-location-georef-status/show', ['item' => $georefStatus]);
    }

    public function edit(GeorefStatus $georefStatus)
    {
        return view('pages/vocab-location-georef-status/edit', ['item' => $georefStatus]);
    }

    public function update(Request $request, GeorefStatus $georefStatus)
    {
        $data = $request->all();
        $georefStatus->update($data);
        return redirect()->route('vocab-location-georef-status.index')->with('ok','Actualizado');
    }

    public function destroy(GeorefStatus $georefStatus)
    {
        $georefStatus->delete();
        return back()->with('ok','Eliminado');
    }
}
