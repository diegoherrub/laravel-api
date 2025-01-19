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
            $currentYear = $currentDate->year;

            $nextPharmacies = collect();
            $maxResults = 8;

            while ($nextPharmacies->count() < $maxResults) {
                $dailyPharmacies = Pharmacy::whereHas('pharmaciesSchedules', function ($query) use ($currentMonth, $currentDay, $currentYear) {
                    $query->where('month', $currentMonth)
                        ->where('day', $currentDay)
                        ->where('year', $currentYear); // Asegurarse de filtrar por año también
                })
                    ->with(['pharmaciesSchedules' => function ($query) use ($currentMonth, $currentDay, $currentYear) {
                        $query->where('month', $currentMonth)
                            ->where('day', $currentDay)
                            ->where('year', $currentYear)
                            ->limit(1);
                    }])
                    ->get();

                $nextPharmacies = $nextPharmacies->merge($dailyPharmacies);
                $currentDay++;

                if ($currentDay > Carbon::create($currentYear, $currentMonth)->daysInMonth) {
                    $currentDay = 1;
                    $currentMonth++;
                }

                if ($currentMonth > 12) {
                    $currentMonth = 1;
                    $currentYear++;
                }
            }

            return response()->json(PharmaciesResource::collection($nextPharmacies), 200);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
