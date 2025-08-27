<?php

namespace App\Http\Controllers\Web\RecordLevel;

use App\Http\Controllers\Controller;
use App\Models\Vocab\RecordLevel\Institutioncode;
use Illuminate\Http\Request;

class InstitutioncodeController extends Controller
{
    public function index()
    {
        $items = Institutioncode::orderByDesc('institutionCode_id')->paginate(15);
        return view('pages/vocab-record-level-institutionCode/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-record-level-institutionCode/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Institutioncode::create($data);
        return redirect()->route('vocab-record-level-institutionCode.index')->with('ok','Creado');
    }

    public function show(Institutioncode $institutioncode)
    {
        return view('pages/vocab-record-level-institutionCode/show', ['item' => $institutioncode]);
    }

    public function edit(Institutioncode $institutioncode)
    {
        return view('pages/vocab-record-level-institutionCode/edit', ['item' => $institutioncode]);
    }

    public function update(Request $request, Institutioncode $institutioncode)
    {
        $data = $request->all();
        $institutioncode->update($data);
        return redirect()->route('vocab-record-level-institutionCode.index')->with('ok','Actualizado');
    }

    public function destroy(Institutioncode $institutioncode)
    {
        $institutioncode->delete();
        return back()->with('ok','Eliminado');
    }
}
