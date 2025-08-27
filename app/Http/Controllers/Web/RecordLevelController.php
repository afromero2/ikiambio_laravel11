<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\WrapsTransactions;
use App\Models\RecordLevel;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class RecordLevelController extends Controller
{
    use WrapsTransactions;

    public function index()
    {
        $items = RecordLevel::orderByDesc('id')->paginate(15);
        return view('pages.recor\1-\2.index', compact('items'));
    }

    public function create()
    {
        return view('pages.recor\1-\2.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        try {
            $item = $this->tx(fn () => RecordLevel::create($data));
            return redirect()->route('recor\1-\2.index')->with('ok','Creado');
        } catch (QueryException $e) {
            return back()->withErrors('No se pudo crear.')->withInput();
        }
    }

    public function show(RecordLevel $recordLevel)
    {
        return view('pages.recor\1-\2.show', ['item' => $recordLevel]);
    }

    public function edit(RecordLevel $recordLevel)
    {
        return view('pages.recor\1-\2.edit', ['item' => $recordLevel]);
    }

    public function update(Request $request, RecordLevel $recordLevel)
    {
        $data = $request->all();
        try {
            $this->tx(fn () => $recordLevel->update($data));
            return redirect()->route('recor\1-\2.index')->with('ok','Actualizado');
        } catch (QueryException $e) {
            return back()->withErrors('No se pudo actualizar.')->withInput();
        }
    }

    public function destroy(RecordLevel $recordLevel)
    {
        try {
            $this->tx(fn () => $recordLevel->delete());
            return back()->with('ok','Eliminado');
        } catch (QueryException $e) {
            return back()->withErrors('No se pudo eliminar (posibles FKs).');
        }
    }
}
