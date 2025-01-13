<?php

namespace App\Http\Controllers;

use App\Models\FilesEvents;
use Illuminate\Http\Request;

class FilesEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $filesEvents = FilesEvents::with('event')->get();
        return response()->json($filesEvents);
    }

}
