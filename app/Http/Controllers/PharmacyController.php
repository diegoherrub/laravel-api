<?php

namespace App\Http\Controllers;

use App\Http\Resources\PharmaciesResource;
use App\Models\Pharmacy;

class PharmacyController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $pharmacies = Pharmacy::with('pharmaciesSchedules')->get();
        return response()->json(PharmaciesResource::collection($pharmacies));
    }

    public function getByMonth($month): \Illuminate\Http\JsonResponse
    {
        if (!is_numeric($month) || (int)$month < 1 || (int)$month > 12) {
            return response()->json(['error' => 'Mes inválido. Debe ser un número entre 1 y 12.'], 400);
        }

        $month = (int)$month;

        // Filtrar farmacias que tengan horarios para el mes proporcionado
        $pharmacies = Pharmacy::whereHas('pharmaciesSchedules', function ($query) use ($month) {
            $query->where('month', $month);
        })->with(['pharmaciesSchedules' => function ($query) use ($month) {
            $query->where('month', $month);
        }])->get();

        if ($pharmacies->isEmpty()) {
            return response()->json(['message' => 'No se encontraron farmacias para este mes.'], 404);
        }

        return response()->json(PharmaciesResource::collection($pharmacies));
    }

}
