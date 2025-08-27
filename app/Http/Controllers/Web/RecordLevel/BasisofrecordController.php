<?php

namespace App\Http\Controllers\Web\RecordLevel;

use App\Http\Controllers\Controller;
use App\Models\Vocab\RecordLevel\Basisofrecord;
use Illuminate\Http\Request;

class BasisofrecordController extends Controller
{
    public function index()
    {
        $items = Basisofrecord::orderByDesc('basisofrecord_id')->paginate(15);
        return view('pages/vocab-record-level-basisOfRecord/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-record-level-basisOfRecord/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Basisofrecord::create($data);
        return redirect()->route('vocab-record-level-basisOfRecord.index')->with('ok','Creado');
    }

    public function show(Basisofrecord $basisofrecord)
    {
        return view('pages/vocab-record-level-basisOfRecord/show', ['item' => $basisofrecord]);
    }

    public function edit(Basisofrecord $basisofrecord)
    {
        return view('pages/vocab-record-level-basisOfRecord/edit', ['item' => $basisofrecord]);
    }

    public function update(Request $request, Basisofrecord $basisofrecord)
    {
        $data = $request->all();
        $basisofrecord->update($data);
        return redirect()->route('vocab-record-level-basisOfRecord.index')->with('ok','Actualizado');
    }

    public function destroy(Basisofrecord $basisofrecord)
    {
        $basisofrecord->delete();
        return back()->with('ok','Eliminado');
    }
}
