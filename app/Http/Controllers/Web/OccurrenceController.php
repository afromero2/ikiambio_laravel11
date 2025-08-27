<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\WrapsTransactions;
use App\Models\Occurrence;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class OccurrenceController extends Controller
{
    use WrapsTransactions;

    public function index()
    {
        $items = Occurrence::orderByDesc('id')->paginate(15);
        return view('pages.occurrence.index', compact('items'));
    }

    public function create()
    {
        return view('pages.occurrence.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        try {
            $item = $this->tx(fn () => Occurrence::create($data));
            return redirect()->route('occurrence.index')->with('ok','Creado');
        } catch (QueryException $e) {
            return back()->withErrors('No se pudo crear.')->withInput();
        }
    }

    public function show(Occurrence $occurrence)
    {
        return view('pages.occurrence.show', ['item' => $occurrence]);
    }

    public function edit(Occurrence $occurrence)
    {
        return view('pages.occurrence.edit', ['item' => $occurrence]);
    }

    public function update(Request $request, Occurrence $occurrence)
    {
        $data = $request->all();
        try {
            $this->tx(fn () => $occurrence->update($data));
            return redirect()->route('occurrence.index')->with('ok','Actualizado');
        } catch (QueryException $e) {
            return back()->withErrors('No se pudo actualizar.')->withInput();
        }
    }

    public function destroy(Occurrence $occurrence)
    {
        try {
            $this->tx(fn () => $occurrence->delete());
            return back()->with('ok','Eliminado');
        } catch (QueryException $e) {
            return back()->withErrors('No se pudo eliminar (posibles FKs).');
        }
    }
}
