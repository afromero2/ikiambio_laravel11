<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Tblregistroslaboratorio;
use Illuminate\Http\Request;

class TblregistroslaboratorioController extends Controller
{
    public function index()
    {
        $items = Tblregistroslaboratorio::orderByDesc('idRegistrosLaboratorio')->paginate(15);
        return view('pages/TblRegistrosLaboratorio/index', compact('items'));
    }

    public function create()
    {
        return view('pages/TblRegistrosLaboratorio/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Tblregistroslaboratorio::create($data);
        return redirect()->route('TblRegistrosLaboratorio.index')->with('ok','Creado');
    }

    public function show(Tblregistroslaboratorio $tblregistroslaboratorio)
    {
        return view('pages/TblRegistrosLaboratorio/show', ['item' => $tblregistroslaboratorio]);
    }

    public function edit(Tblregistroslaboratorio $tblregistroslaboratorio)
    {
        return view('pages/TblRegistrosLaboratorio/edit', ['item' => $tblregistroslaboratorio]);
    }

    public function update(Request $request, Tblregistroslaboratorio $tblregistroslaboratorio)
    {
        $data = $request->all();
        $tblregistroslaboratorio->update($data);
        return redirect()->route('TblRegistrosLaboratorio.index')->with('ok','Actualizado');
    }

    public function destroy(Tblregistroslaboratorio $tblregistroslaboratorio)
    {
        $tblregistroslaboratorio->delete();
        return back()->with('ok','Eliminado');
    }
}
