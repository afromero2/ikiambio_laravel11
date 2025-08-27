<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Tblfechapcr;
use Illuminate\Http\Request;

class TblfechapcrController extends Controller
{
    public function index()
    {
        $items = Tblfechapcr::orderByDesc('idFechaPCR')->paginate(15);
        return view('pages/TblFechaPCR/index', compact('items'));
    }

    public function create()
    {
        return view('pages/TblFechaPCR/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Tblfechapcr::create($data);
        return redirect()->route('TblFechaPCR.index')->with('ok','Creado');
    }

    public function show(Tblfechapcr $tblfechapcr)
    {
        return view('pages/TblFechaPCR/show', ['item' => $tblfechapcr]);
    }

    public function edit(Tblfechapcr $tblfechapcr)
    {
        return view('pages/TblFechaPCR/edit', ['item' => $tblfechapcr]);
    }

    public function update(Request $request, Tblfechapcr $tblfechapcr)
    {
        $data = $request->all();
        $tblfechapcr->update($data);
        return redirect()->route('TblFechaPCR.index')->with('ok','Actualizado');
    }

    public function destroy(Tblfechapcr $tblfechapcr)
    {
        $tblfechapcr->delete();
        return back()->with('ok','Eliminado');
    }
}
