<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Identification;
use Illuminate\Http\Request;

class IdentificationController extends Controller
{
    public function index()
    {
        $items = Identification::orderByDesc('identificationID')->paginate(15);
        return view('pages/identification/index', compact('items'));
    }

    public function create()
    {
        return view('pages/identification/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Identification::create($data);
        return redirect()->route('identification.index')->with('ok','Creado');
    }

    public function show(Identification $identification)
    {
        return view('pages/identification/show', ['item' => $identification]);
    }

    public function edit(Identification $identification)
    {
        return view('pages/identification/edit', ['item' => $identification]);
    }

    public function update(Request $request, Identification $identification)
    {
        $data = $request->all();
        $identification->update($data);
        return redirect()->route('identification.index')->with('ok','Actualizado');
    }

    public function destroy(Identification $identification)
    {
        $identification->delete();
        return back()->with('ok','Eliminado');
    }
}
