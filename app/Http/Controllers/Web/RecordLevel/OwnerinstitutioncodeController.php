<?php

namespace App\Http\Controllers\Web\RecordLevel;

use App\Http\Controllers\Controller;
use App\Models\Vocab\RecordLevel\Ownerinstitutioncode;
use Illuminate\Http\Request;

class OwnerinstitutioncodeController extends Controller
{
    public function index()
    {
        $items = Ownerinstitutioncode::orderByDesc('ownerinstitutioncode_id')->paginate(15);
        return view('pages/vocab-record-level-ownerInstitutionCode/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-record-level-ownerInstitutionCode/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Ownerinstitutioncode::create($data);
        return redirect()->route('vocab-record-level-ownerInstitutionCode.index')->with('ok','Creado');
    }

    public function show(Ownerinstitutioncode $ownerinstitutioncode)
    {
        return view('pages/vocab-record-level-ownerInstitutionCode/show', ['item' => $ownerinstitutioncode]);
    }

    public function edit(Ownerinstitutioncode $ownerinstitutioncode)
    {
        return view('pages/vocab-record-level-ownerInstitutionCode/edit', ['item' => $ownerinstitutioncode]);
    }

    public function update(Request $request, Ownerinstitutioncode $ownerinstitutioncode)
    {
        $data = $request->all();
        $ownerinstitutioncode->update($data);
        return redirect()->route('vocab-record-level-ownerInstitutionCode.index')->with('ok','Actualizado');
    }

    public function destroy(Ownerinstitutioncode $ownerinstitutioncode)
    {
        $ownerinstitutioncode->delete();
        return back()->with('ok','Eliminado');
    }
}
