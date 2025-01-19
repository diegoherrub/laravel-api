<?php

namespace App\Http\Controllers;

use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $news = News::with('newSource')->get();
        return response()->json(NewsResource::collection($news));
    }
}
