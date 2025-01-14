<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $events = Event::with('sourceEvents', 'filesEvents')->get();
        return response()->json($events); // Envuelve la colección en una respuesta JSON

    }
}
