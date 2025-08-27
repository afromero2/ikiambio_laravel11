<?php

namespace App\Http\Controllers\Web\RecordLevel;

use App\Http\Controllers\Controller;
use App\Models\Vocab\RecordLevel\License;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    public function index()
    {
        $items = License::orderByDesc('license_id')->paginate(15);
        return view('pages/vocab-record-level-license/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-record-level-license/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = License::create($data);
        return redirect()->route('vocab-record-level-license.index')->with('ok','Creado');
    }

    public function show(License $license)
    {
        return view('pages/vocab-record-level-license/show', ['item' => $license]);
    }

    public function edit(License $license)
    {
        return view('pages/vocab-record-level-license/edit', ['item' => $license]);
    }

    public function update(Request $request, License $license)
    {
        $data = $request->all();
        $license->update($data);
        return redirect()->route('vocab-record-level-license.index')->with('ok','Actualizado');
    }

    public function destroy(License $license)
    {
        $license->delete();
        return back()->with('ok','Eliminado');
    }
}
