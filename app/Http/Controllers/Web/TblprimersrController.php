<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Tblprimersr;
use Illuminate\Http\Request;

class TblprimersrController extends Controller
{
    public function index()
    {
        $items = Tblprimersr::orderByDesc('idPrimers')->paginate(15);
        return view('pages/TblPrimersR/index', compact('items'));
    }

    public function create()
    {
        return view('pages/TblPrimersR/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Tblprimersr::create($data);
        return redirect()->route('TblPrimersR.index')->with('ok','Creado');
    }

    public function show(Tblprimersr $tblprimersr)
    {
        return view('pages/TblPrimersR/show', ['item' => $tblprimersr]);
    }

    public function edit(Tblprimersr $tblprimersr)
    {
        return view('pages/TblPrimersR/edit', ['item' => $tblprimersr]);
    }

    public function update(Request $request, Tblprimersr $tblprimersr)
    {
        $data = $request->all();
        $tblprimersr->update($data);
        return redirect()->route('TblPrimersR.index')->with('ok','Actualizado');
    }

    public function destroy(Tblprimersr $tblprimersr)
    {
        $tblprimersr->delete();
        return back()->with('ok','Eliminado');
    }
}
