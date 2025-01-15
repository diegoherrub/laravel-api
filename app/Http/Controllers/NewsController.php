<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('source')->get(); // Obtiene todas las noticias con su fuente
        return response()->json($news);
    }
}
