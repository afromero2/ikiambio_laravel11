<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Occurrence;
use Illuminate\Http\Request;

class OccurrenceController extends Controller
{
    public function index()
    {
        $items = Occurrence::orderByDesc('id_occ_bd')->paginate(15);
        return view('pages/occurrence/index', compact('items'));
    }

    public function create()
    {
        return view('pages/occurrence/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Occurrence::create($data);
        return redirect()->route('occurrence.index')->with('ok','Creado');
    }

    public function show(Occurrence $occurrence)
    {
        return view('pages/occurrence/show', ['item' => $occurrence]);
    }

    public function edit(Occurrence $occurrence)
    {
        return view('pages/occurrence/edit', ['item' => $occurrence]);
    }

    public function update(Request $request, Occurrence $occurrence)
    {
        $data = $request->all();
        $occurrence->update($data);
        return redirect()->route('occurrence.index')->with('ok','Actualizado');
    }

    public function destroy(Occurrence $occurrence)
    {
        $occurrence->delete();
        return back()->with('ok','Eliminado');
    }
}
