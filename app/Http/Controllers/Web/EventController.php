<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $items = Event::orderByDesc('eventID')->paginate(15);
        return view('pages/event/index', compact('items'));
    }

    public function create()
    {
        return view('pages/event/create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = Event::create($data);
        return redirect()->route('event.index')->with('ok','Creado');
    }

    public function show(Event $event)
    {
        return view('pages/event/show', ['item' => $event]);
    }

    public function edit(Event $event)
    {
        return view('pages/event/edit', ['item' => $event]);
    }

    public function update(Request $request, Event $event)
    {
        $data = $request->all();
        $event->update($data);
        return redirect()->route('event.index')->with('ok','Actualizado');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return back()->with('ok','Eliminado');
    }
}
