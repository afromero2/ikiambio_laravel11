<?php

namespace App\Http\Controllers\Web\RecordLevel;

use App\Http\Controllers\Controller;
use App\Models\Vocab\RecordLevel\Accessrights; // si tu modelo se llama así
use Illuminate\Http\Request;

class AccessRightsController extends Controller
{
    public function index()
    {
        $items = Accessrights::orderByDesc('accessrights_id')->paginate(15);
        return view('pages.vocab-record-level-access-rights.index', compact('items'));
    }

    public function create()
    {
        return view('pages.vocab-record-level-access-rights.create');
    }

    public function store(Request $request)
    {
        // ajusta reglas a tu esquema real
        $data = $request->validate([
            'accessrights_value' => ['required', 'string', 'max:150'],
            'description'        => ['nullable', 'string'],
        ]);

        $item = Accessrights::create($data);

        return redirect()
            ->route('vocab-record-level-access-rights.index')
            ->with('ok','Creado');
    }

    public function show(Accessrights $accessRights) // <-- nombre de variable = nombre del parámetro de ruta
    {
        return view('pages.vocab-record-level-access-rights.show', ['item' => $accessRights]);
    }

    public function edit(Accessrights $accessRights)
    {
        return view('pages.vocab-record-level-access-rights.edit', ['item' => $accessRights]);
    }

    public function update(Request $request, Accessrights $accessRights)
    {
        $data = $request->validate([
            'accessrights_value' => ['required', 'string', 'max:150'],
            'description'        => ['nullable', 'string'],
        ]);

        $accessRights->update($data);

        return redirect()
            ->route('vocab-record-level-access-rights.index')
            ->with('ok','Actualizado');
    }

    public function destroy(Accessrights $accessRights)
    {
        $accessRights->delete();
        return back()->with('ok','Eliminado');
    }
}
