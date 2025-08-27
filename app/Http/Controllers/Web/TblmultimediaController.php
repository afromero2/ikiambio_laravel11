<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Tblmultimedia;
use Illuminate\Http\Request;

class TblmultimediaController extends Controller
{
    public function index()
    {
        $items = Tblmultimedia::orderByDesc('idMultimedia')->paginate(15);
        return view('pages/TblMultimedia/index', compact('items'));
    }

    public function create()
    {
        return view('pages/TblMultimedia/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Tblmultimedia::create($data);
        return redirect()->route('TblMultimedia.index')->with('ok','Creado');
    }

    public function show(Tblmultimedia $tblmultimedia)
    {
        return view('pages/TblMultimedia/show', ['item' => $tblmultimedia]);
    }

    public function edit(Tblmultimedia $tblmultimedia)
    {
        return view('pages/TblMultimedia/edit', ['item' => $tblmultimedia]);
    }

    public function update(Request $request, Tblmultimedia $tblmultimedia)
    {
        $data = $request->all();
        $tblmultimedia->update($data);
        return redirect()->route('TblMultimedia.index')->with('ok','Actualizado');
    }

    public function destroy(Tblmultimedia $tblmultimedia)
    {
        $tblmultimedia->delete();
        return back()->with('ok','Eliminado');
    }
}
