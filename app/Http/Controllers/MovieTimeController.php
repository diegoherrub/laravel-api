<?php

namespace App\Http\Controllers;

use App\Models\MovieTimes;
use Illuminate\Http\Request;

class MovieTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $movieTimes = MovieTimes::with(['movie', 'time'])->get();

        // Ocultar el campo "pivot" si está presente
        $movieTimes->each(function ($movieTime) {
            $movieTime->movie?->makeHidden('pivot');
            $movieTime->time?->makeHidden('pivot');
        });

        return response()->json([
            'success' => true,
            'data' => $movieTimes,
        ]);
    }
}


