<?php

namespace App\Http\Controllers\Web\Occurrence;

use App\Http\Controllers\Controller;
use App\Models\Vocab\Occurrence\Establishmentmeans;
use Illuminate\Http\Request;

class EstablishmentmeansController extends Controller
{
    public function index()
    {
        $items = Establishmentmeans::orderByDesc('estabmeans_id')->paginate(15);
        return view('pages/vocab-occurrence-establishmentMeans/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-occurrence-establishmentMeans/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Establishmentmeans::create($data);
        return redirect()->route('vocab-occurrence-establishmentMeans.index')->with('ok','Creado');
    }

    public function show(Establishmentmeans $establishmentmeans)
    {
        return view('pages/vocab-occurrence-establishmentMeans/show', ['item' => $establishmentmeans]);
    }

    public function edit(Establishmentmeans $establishmentmeans)
    {
        return view('pages/vocab-occurrence-establishmentMeans/edit', ['item' => $establishmentmeans]);
    }

    public function update(Request $request, Establishmentmeans $establishmentmeans)
    {
        $data = $request->all();
        $establishmentmeans->update($data);
        return redirect()->route('vocab-occurrence-establishmentMeans.index')->with('ok','Actualizado');
    }

    public function destroy(Establishmentmeans $establishmentmeans)
    {
        $establishmentmeans->delete();
        return back()->with('ok','Eliminado');
    }
}
