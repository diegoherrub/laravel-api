<?php

namespace App\Http\Controllers;

use App\Models\SourceNews;
use Illuminate\Http\Request;

class SourceNewsController extends Controller
{
    public function index()
    {
        $sources = SourceNews::all();
        return response()->json($sources);
    }
}
