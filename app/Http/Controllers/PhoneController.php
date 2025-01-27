<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $phones = Phone::all();
        return response()->json($phones);
    }
}
