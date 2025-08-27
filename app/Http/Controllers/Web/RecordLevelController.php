<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\RecordLevel;
use Illuminate\Http\Request;

class RecordLevelController extends Controller
{
    public function index()
    {
        $items = RecordLevel::orderByDesc('record_level_id')->paginate(15);
        return view('pages/record-level/index', compact('items'));
    }

    public function create()
    {
        return view('pages/record-level/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = RecordLevel::create($data);
        return redirect()->route('record-level.index')->with('ok','Creado');
    }

    public function show(RecordLevel $recordLevel)
    {
        return view('pages/record-level/show', ['item' => $recordLevel]);
    }

    public function edit(RecordLevel $recordLevel)
    {
        return view('pages/record-level/edit', ['item' => $recordLevel]);
    }

    public function update(Request $request, RecordLevel $recordLevel)
    {
        $data = $request->all();
        $recordLevel->update($data);
        return redirect()->route('record-level.index')->with('ok','Actualizado');
    }

    public function destroy(RecordLevel $recordLevel)
    {
        $recordLevel->delete();
        return back()->with('ok','Eliminado');
    }
}
