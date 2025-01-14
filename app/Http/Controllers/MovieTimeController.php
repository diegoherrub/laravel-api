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
        return response()->json($movieTimes);
    }
}
