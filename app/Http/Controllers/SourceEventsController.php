<?php

namespace App\Http\Controllers;

use App\Models\SourceEvents;
use Illuminate\Http\Request;

class SourceEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sourceEvents = SourceEvents::all();
        return response()->json($sourceEvents);
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
            'id' => 'required|string|max:32|unique:source_events,id',
            'name' => 'required|string|max:32|unique:source_events,name',
            'urlSource' => 'required|url|max:128',
            'urlImage' => 'nullable|url|max:128',
        ]);

        $sourceEvent = SourceEvents::create($validated);

        return response()->json($sourceEvent, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(SourceEvents $sourceEvents)
    {
        return response()->json($sourceEvents);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SourceEvents $sourceEvents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SourceEvents $sourceEvents)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:32|unique:source_events,name,' . $sourceEvents->id,
            'urlSource' => 'sometimes|required|url|max:128',
            'urlImage' => 'nullable|url|max:128',
        ]);

        $sourceEvents->update($validated);

        return response()->json($sourceEvents);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SourceEvents $sourceEvents)
    {
        $sourceEvent->delete();

        return response()->json(['message' => 'SourceEvent deleted successfully.']);
    }
}
