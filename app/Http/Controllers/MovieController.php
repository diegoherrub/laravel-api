<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $movies = Movie::with('times')->get()->map(function ($movie) {
            $movie->times->each->makeHidden('pivot');
            return $movie;
        });
        return response()->json($movies);
    }
}
