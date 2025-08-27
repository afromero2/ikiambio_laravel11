<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\WrapsTransactions;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class LocationController extends Controller
{
    use WrapsTransactions;

    public function index()
    {
        $items = Location::orderByDesc('id')->paginate(15);
        return view('pages.location.index', compact('items'));
    }

    public function create()
    {
        return view('pages.location.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        try {
            $item = $this->tx(fn () => Location::create($data));
            return redirect()->route('location.index')->with('ok','Creado');
        } catch (QueryException $e) {
            return back()->withErrors('No se pudo crear.')->withInput();
        }
    }

    public function show(Location $location)
    {
        return view('pages.location.show', ['item' => $location]);
    }

    public function edit(Location $location)
    {
        return view('pages.location.edit', ['item' => $location]);
    }

    public function update(Request $request, Location $location)
    {
        $data = $request->all();
        try {
            $this->tx(fn () => $location->update($data));
            return redirect()->route('location.index')->with('ok','Actualizado');
        } catch (QueryException $e) {
            return back()->withErrors('No se pudo actualizar.')->withInput();
        }
    }

    public function destroy(Location $location)
    {
        try {
            $this->tx(fn () => $location->delete());
            return back()->with('ok','Eliminado');
        } catch (QueryException $e) {
            return back()->withErrors('No se pudo eliminar (posibles FKs).');
        }
    }
}
