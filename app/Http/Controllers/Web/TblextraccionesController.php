<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Tblextracciones;
use Illuminate\Http\Request;

class TblextraccionesController extends Controller
{
    public function index()
    {
        $items = Tblextracciones::orderByDesc('idExtracciones')->paginate(15);
        return view('pages/TblExtracciones/index', compact('items'));
    }

    public function create()
    {
        return view('pages/TblExtracciones/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Tblextracciones::create($data);
        return redirect()->route('TblExtracciones.index')->with('ok','Creado');
    }

    public function show(Tblextracciones $tblextracciones)
    {
        return view('pages/TblExtracciones/show', ['item' => $tblextracciones]);
    }

    public function edit(Tblextracciones $tblextracciones)
    {
        return view('pages/TblExtracciones/edit', ['item' => $tblextracciones]);
    }

    public function update(Request $request, Tblextracciones $tblextracciones)
    {
        $data = $request->all();
        $tblextracciones->update($data);
        return redirect()->route('TblExtracciones.index')->with('ok','Actualizado');
    }

    public function destroy(Tblextracciones $tblextracciones)
    {
        $tblextracciones->delete();
        return back()->with('ok','Eliminado');
    }
}
