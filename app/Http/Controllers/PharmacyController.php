<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Pharmacy::all());
    }

    public function getByMonth($month): \Illuminate\Http\JsonResponse
    {
        // Validar que el parámetro sea un número válido representado como string
        if (!is_numeric($month) || (int)$month < 1 || (int)$month > 12) {
            return response()->json(['error' => 'Mes inválido. Debe ser un número entre 1 y 12.'], 400);
        }

        // Consultar farmacias por el mes especificado
        $pharmacies = Pharmacy::where('month', $month)->get();

        // Verificar si hay resultados
        if ($pharmacies->isEmpty()) {
            return response()->json(['message' => 'No se encontraron farmacias para este mes.'], 404);
        }

        // Retornar los resultados
        return response()->json($pharmacies, 200);
    }
}
