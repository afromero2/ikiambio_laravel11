<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Organism;
use Illuminate\Http\Request;

class OrganismController extends Controller
{
    public function index()
    {
        $items = Organism::orderByDesc('organismID')->paginate(15);
        return view('pages/organism/index', compact('items'));
    }

    public function create()
    {
        return view('pages/organism/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Organism::create($data);
        return redirect()->route('organism.index')->with('ok','Creado');
    }

    public function show(Organism $organism)
    {
        return view('pages/organism/show', ['item' => $organism]);
    }

    public function edit(Organism $organism)
    {
        return view('pages/organism/edit', ['item' => $organism]);
    }

    public function update(Request $request, Organism $organism)
    {
        $data = $request->all();
        $organism->update($data);
        return redirect()->route('organism.index')->with('ok','Actualizado');
    }

    public function destroy(Organism $organism)
    {
        $organism->delete();
        return back()->with('ok','Eliminado');
    }
}
