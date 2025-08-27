<?php

namespace App\Http\Controllers\Web\RecordLevel;

use App\Http\Controllers\Controller;
use App\Models\Vocab\RecordLevel\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $items = Type::orderByDesc('type_id')->paginate(15);
        return view('pages/vocab-record-level-type/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-record-level-type/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Type::create($data);
        return redirect()->route('vocab-record-level-type.index')->with('ok','Creado');
    }

    public function show(Type $type)
    {
        return view('pages/vocab-record-level-type/show', ['item' => $type]);
    }

    public function edit(Type $type)
    {
        return view('pages/vocab-record-level-type/edit', ['item' => $type]);
    }

    public function update(Request $request, Type $type)
    {
        $data = $request->all();
        $type->update($data);
        return redirect()->route('vocab-record-level-type.index')->with('ok','Actualizado');
    }

    public function destroy(Type $type)
    {
        $type->delete();
        return back()->with('ok','Eliminado');
    }
}
