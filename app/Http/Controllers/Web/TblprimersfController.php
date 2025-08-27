<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Tblprimersf;
use Illuminate\Http\Request;

class TblprimersfController extends Controller
{
    public function index()
    {
        $items = Tblprimersf::orderByDesc('idPrimers')->paginate(15);
        return view('pages/TblPrimersF/index', compact('items'));
    }

    public function create()
    {
        return view('pages/TblPrimersF/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Tblprimersf::create($data);
        return redirect()->route('TblPrimersF.index')->with('ok','Creado');
    }

    public function show(Tblprimersf $tblprimersf)
    {
        return view('pages/TblPrimersF/show', ['item' => $tblprimersf]);
    }

    public function edit(Tblprimersf $tblprimersf)
    {
        return view('pages/TblPrimersF/edit', ['item' => $tblprimersf]);
    }

    public function update(Request $request, Tblprimersf $tblprimersf)
    {
        $data = $request->all();
        $tblprimersf->update($data);
        return redirect()->route('TblPrimersF.index')->with('ok','Actualizado');
    }

    public function destroy(Tblprimersf $tblprimersf)
    {
        $tblprimersf->delete();
        return back()->with('ok','Eliminado');
    }
}
