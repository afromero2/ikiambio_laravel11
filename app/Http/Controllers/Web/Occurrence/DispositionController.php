<?php

namespace App\Http\Controllers\Web\Occurrence;

use App\Http\Controllers\Controller;
use App\Models\Vocab\Occurrence\Disposition;
use Illuminate\Http\Request;

class DispositionController extends Controller
{
    public function index()
    {
        $items = Disposition::orderByDesc('disposition_id')->paginate(15);
        return view('pages/vocab-occurrence-disposition/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-occurrence-disposition/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Disposition::create($data);
        return redirect()->route('vocab-occurrence-disposition.index')->with('ok','Creado');
    }

    public function show(Disposition $disposition)
    {
        return view('pages/vocab-occurrence-disposition/show', ['item' => $disposition]);
    }

    public function edit(Disposition $disposition)
    {
        return view('pages/vocab-occurrence-disposition/edit', ['item' => $disposition]);
    }

    public function update(Request $request, Disposition $disposition)
    {
        $data = $request->all();
        $disposition->update($data);
        return redirect()->route('vocab-occurrence-disposition.index')->with('ok','Actualizado');
    }

    public function destroy(Disposition $disposition)
    {
        $disposition->delete();
        return back()->with('ok','Eliminado');
    }
}
