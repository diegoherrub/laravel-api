<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::with('sourceEvent', 'filesEvents')->get();
        return response()->json($events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string|max:32|unique:events,id',
            'title' => 'required|string|max:128',
            'urlSource' => 'required|url|max:128',
            'urlImage' => 'nullable|url|max:128',
            'dateStart' => 'required|string|max:16',
            'dateEnd' => 'nullable|string|max:16',
            'source' => 'required|string|exists:source_events,id',
        ]);

        $event = Event::create($validated);

        return response()->json($event, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $event->load('sourceEvent', 'filesEvents'); // Cargar relaciones
        return response()->json($event);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:128',
            'urlSource' => 'sometimes|required|url|max:128',
            'urlImage' => 'nullable|url|max:128',
            'dateStart' => 'sometimes|required|string|max:16',
            'dateEnd' => 'nullable|string|max:16',
            'source' => 'sometimes|required|string|exists:source_events,id',
        ]);

        $event->update($validated);

        return response()->json($event);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return response()->json(['message' => 'Event deleted successfully.']);
    }
}
