<?php

namespace App\Http\Controllers;

use App\Models\FilesEvents;
use Illuminate\Http\Request;

class FilesEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filesEvents = FilesEvents::with('event')->get(); // Cargar relación con eventos
        return response()->json($filesEvents);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string|max:32|unique:files_events,id',
            'id_event' => 'required|string|exists:events,id',
            'urlFiles' => 'required|string|max:32',
        ]);

        $filesEvent = FilesEvents::create($validated);

        return response()->json($filesEvent, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(FilesEvents $filesEvents)
    {
        $filesEvents->load('event'); // Cargar la relación con el evento
        return response()->json($filesEvents);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FilesEvents $filesEvents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FilesEvents $filesEvents)
    {
        $validated = $request->validate([
            'id_event' => 'sometimes|required|string|exists:events,id',
            'urlFiles' => 'sometimes|required|string|max:32',
        ]);

        $filesEvents->update($validated);

        return response()->json($filesEvents);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FilesEvents $filesEvents)
    {
        $filesEvent->delete();

        return response()->json(['message' => 'FileEvent deleted successfully.']);
    }
}
