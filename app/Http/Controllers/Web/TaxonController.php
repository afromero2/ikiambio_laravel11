<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\WrapsTransactions;
use App\Models\Taxon;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class TaxonController extends Controller
{
    use WrapsTransactions;

    public function index()
    {
        $items = Taxon::orderByDesc('id')->paginate(15);
        return view('pages.taxon.index', compact('items'));
    }

    public function create()
    {
        return view('pages.taxon.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        try {
            $item = $this->tx(fn () => Taxon::create($data));
            return redirect()->route('taxon.index')->with('ok','Creado');
        } catch (QueryException $e) {
            return back()->withErrors('No se pudo crear.')->withInput();
        }
    }

    public function show(Taxon $taxon)
    {
        return view('pages.taxon.show', ['item' => $taxon]);
    }

    public function edit(Taxon $taxon)
    {
        return view('pages.taxon.edit', ['item' => $taxon]);
    }

    public function update(Request $request, Taxon $taxon)
    {
        $data = $request->all();
        try {
            $this->tx(fn () => $taxon->update($data));
            return redirect()->route('taxon.index')->with('ok','Actualizado');
        } catch (QueryException $e) {
            return back()->withErrors('No se pudo actualizar.')->withInput();
        }
    }

    public function destroy(Taxon $taxon)
    {
        try {
            $this->tx(fn () => $taxon->delete());
            return back()->with('ok','Eliminado');
        } catch (QueryException $e) {
            return back()->withErrors('No se pudo eliminar (posibles FKs).');
        }
    }
}
