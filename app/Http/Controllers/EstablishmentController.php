<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetEstablishmentsByTypeRequest;
use App\Http\Resources\EstablishmentResource;
use App\Models\Establishment;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $establishments = Establishment::all();
        return response()->json(EstablishmentResource::collection($establishments));
    }
    public function getByType(Request $request, string $type): \Illuminate\Http\JsonResponse
    {
        // Validar que el tipo sea válido
        if (!in_array($type, ['bar', 'restaurant', 'hotel'])) {
            return response()->json(['error' => 'Invalid type'], 400);
        }

        // Obtener los establecimientos por tipo
        $establishments = Establishment::where('type', $type)->get();

        // Retornar los resultados usando el recurso
        return response()->json(EstablishmentResource::collection($establishments));
    }
}
