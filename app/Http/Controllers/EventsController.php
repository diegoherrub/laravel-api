<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventsResource;
use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $events = Events::with('eventSources', 'eventFiles')->get();
        return response()->json(EventsResource::collection($events));
    }
}
