<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PharmacyController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Pharmacy::all());
    }

    public function getByMonth($month): \Illuminate\Http\JsonResponse
    {
        if (!is_numeric($month) || (int)$month < 1 || (int)$month > 12) {
            return response()->json(['error' => 'Mes inválido. Debe ser un número entre 1 y 12.'], 400);
        }

        $month = (int)$month;

        $pharmacies = Pharmacy::where('month', $month)
            ->orderByRaw('CAST(day AS UNSIGNED) ASC')
            ->get();

        if ($pharmacies->isEmpty()) {
            return response()->json(['message' => 'No se encontraron farmacias para este mes.'], 404);
        }

        return response()->json($pharmacies, 200);
    }
}
