<?php

namespace App\Http\Controllers;

use App\Models\SourceEvents;
use Illuminate\Http\Request;

class SourceEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $sourceEvents = SourceEvents::all();
        return response()->json($sourceEvents);
    }
}
