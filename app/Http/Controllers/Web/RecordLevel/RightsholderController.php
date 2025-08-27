<?php

namespace App\Http\Controllers\Web\RecordLevel;

use App\Http\Controllers\Controller;
use App\Models\Vocab\RecordLevel\RightsHolder;
use Illuminate\Http\Request;

class RightsHolderController extends Controller
{
    public function index()
    {
        $items = RightsHolder::orderByDesc('rightsHolder_id')->paginate(15);
        return view('pages.vocab-record-level-rights-holder.index', compact('items'));
    }

    public function create()
    {
        return view('pages.vocab-record-level-rights-holder.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'rightsHolder_value' => ['required', 'string', 'max:150'],
            'description'        => ['nullable', 'string'],
        ]);

        $item = RightsHolder::create($data);

        return redirect()
            ->route('vocab-record-level-rights-holder.index')
            ->with('ok', 'Creado correctamente');
    }

    public function show(RightsHolder $rightsHolder)
    {
        return view('pages.vocab-record-level-rights-holder.show', [
            'item' => $rightsHolder,
        ]);
    }

    public function edit(RightsHolder $rightsHolder)
    {
        return view('pages.vocab-record-level-rights-holder.edit', [
            'item' => $rightsHolder,
        ]);
    }

    public function update(Request $request, RightsHolder $rightsHolder)
    {
        $data = $request->validate([
            'rightsHolder_value' => ['required', 'string', 'max:150'],
            'description'        => ['nullable', 'string'],
        ]);

        $rightsHolder->update($data);

        return redirect()
            ->route('vocab-record-level-rights-holder.index')
            ->with('ok', 'Actualizado correctamente');
    }

    public function destroy(RightsHolder $rightsHolder)
    {
        $rightsHolder->delete();

        return back()->with('ok', 'Eliminado');
    }
}
