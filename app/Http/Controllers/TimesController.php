<?php

namespace App\Http\Controllers;

use App\Models\Times;
use Illuminate\Http\Request;

class TimesController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $times = Times::all();
        return response()->json($times);
    }
}
