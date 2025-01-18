<?php

namespace App\Http\Controllers;

use App\Http\Resources\MovieResource;
use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $movies = Movies::with('movieTimes')->get();
        return response()->json(MovieResource::collection($movies));
    }

}
