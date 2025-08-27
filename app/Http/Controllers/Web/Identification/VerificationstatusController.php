<?php

namespace App\Http\Controllers\Web\Identification;

use App\Http\Controllers\Controller;
use App\Models\Vocab\Identification\Verificationstatus;
use Illuminate\Http\Request;

class VerificationstatusController extends Controller
{
    public function index()
    {
        $items = Verificationstatus::orderByDesc('vocab_identification_verificationStatus_id')->paginate(15);
        return view('pages/vocab-identification-verificationStatus/index', compact('items'));
    }

    public function create()
    {
        return view('pages/vocab-identification-verificationStatus/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Verificationstatus::create($data);
        return redirect()->route('vocab-identification-verificationStatus.index')->with('ok','Creado');
    }

    public function show(Verificationstatus $verificationstatus)
    {
        return view('pages/vocab-identification-verificationStatus/show', ['item' => $verificationstatus]);
    }

    public function edit(Verificationstatus $verificationstatus)
    {
        return view('pages/vocab-identification-verificationStatus/edit', ['item' => $verificationstatus]);
    }

    public function update(Request $request, Verificationstatus $verificationstatus)
    {
        $data = $request->all();
        $verificationstatus->update($data);
        return redirect()->route('vocab-identification-verificationStatus.index')->with('ok','Actualizado');
    }

    public function destroy(Verificationstatus $verificationstatus)
    {
        $verificationstatus->delete();
        return back()->with('ok','Eliminado');
    }
}
