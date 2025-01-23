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

    public function getById($movieId): \Illuminate\Http\JsonResponse
    {
        $movie = Movies::with('movieTimes')->find($movieId);

        if (!$movie) {
            return response()->json(['message' => "No se encontraron películas con este id: $movieId"], 404);
        }

        return response()->json(new MovieResource($movie));
    }

}
