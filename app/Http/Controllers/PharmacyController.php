<?php

namespace App\Http\Controllers;

use App\Http\Resources\PharmaciesResource;
use App\Models\Pharmacy;
use Carbon\Carbon;

class PharmacyController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $pharmacies = Pharmacy::with('pharmaciesSchedules')->get();
        return response()->json(PharmaciesResource::collection($pharmacies));
    }

    public function getByMonth($month): \Illuminate\Http\JsonResponse
    {
        if (!is_numeric($month) || $month < 1 || $month > 12) {
            return response()->json(['error' => 'Mes inválido. Debe ser un número entre 1 y 12.'], 400);
        }

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

    public function getTodayAndNextPharmacies(): \Illuminate\Http\JsonResponse
    {
        try {
            $currentDate = Carbon::now();
            $currentDay = $currentDate->day;
            $currentMonth = $currentDate->month;

            $nextPharmacies = collect(); // Colección para almacenar resultados
            $maxResults = 8;

            while ($nextPharmacies->count() < $maxResults) {
                // Consultar farmacias del día actual en el bucle
                $dailyPharmacies = Pharmacy::whereHas('pharmaciesSchedules', function ($query) use ($currentMonth, $currentDay) {
                    $query->where('month', $currentMonth)
                        ->where('day', $currentDay);
                })
                    ->with(['pharmaciesSchedules' => function ($query) use ($currentMonth, $currentDay) {
                        $query->where('month', $currentMonth)
                            ->where('day', $currentDay)
                            ->limit(1); // Un horario relevante por farmacia
                    }])
                    ->get();

                // Agregar resultados a la colección
                $nextPharmacies = $nextPharmacies->merge($dailyPharmacies);

                // Incrementar el día
                $currentDay++;

                // Pasar al siguiente mes si se superan los días del mes actual
                if ($currentDay > $currentDate->daysInMonth) {
                    $currentDay = 1; // Reiniciar día
                    $currentMonth++; // Pasar al siguiente mes
                    $currentDate->addMonth(); // Actualizar el objeto Carbon para reflejar el nuevo mes
                }

                // Salir si se superan los meses del año
                if ($currentMonth > 12) {
                    break;
                }
                // TODO - hacer que pase al año siguiente
            }

            return response()->json(PharmaciesResource::collection($nextPharmacies), 200);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
