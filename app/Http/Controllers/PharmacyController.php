<?php

namespace App\Http\Controllers;

use App\Http\Resources\PharmaciesResource;
use App\Http\Resources\PharmaciesSchedulesResource;
use App\Models\PharmaciesSchedules;
use App\Models\Pharmacy;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\DB;

class PharmacyController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $pharmacies = Pharmacy::all();
        return response()->json(PharmaciesResource::collection($pharmacies));
    }

    public function getSchedulesOnCall(): \Illuminate\Http\JsonResponse
    {
        $schedules = DB::table('pharmacies_schedules')
            ->select('schedule_id','id_pharmacy', 'schedule_on_call')
            ->orderBy('schedule_on_call', 'asc')
            ->get();

        return response()->json(PharmaciesSchedulesResource::collection($schedules));
    }

    public function getWeekSchedulesOnCall(): \Illuminate\Http\JsonResponse
    {
        $today = Carbon::today();
        $sevenDaysFromNow = Carbon::today()->addDays(7);
        $schedules = DB::table('pharmacies_schedules')
            ->select('schedule_id','id_pharmacy', 'schedule_on_call')
            ->whereBetween('schedule_on_call', [$today->toDateString(), $sevenDaysFromNow->toDateString()])
            ->orderBy('schedule_on_call', 'asc')
            ->get();

        return response()->json(PharmaciesSchedulesResource::collection($schedules));
    }


    public function getPharmacyById($id): \Illuminate\Http\JsonResponse
    {
        $pharmacy = Pharmacy::with('pharmaciesSchedules')->find($id);
        if (!$pharmacy) {
            return response()->json(['message' => "No hay ninguna farmacia con el ID $id."], 404);
        }

        return response()->json(new PharmaciesResource($pharmacy));
    }

    public function getPharmacyForToday(): \Illuminate\Http\JsonResponse
    {
        // Obtener el día y mes actuales
        $today = now();
        $currentDay = $today->day;
        $currentMonth = $today->month;

        // Buscar farmacias que tengan horarios para el día y mes actuales
        $pharmacies = Pharmacy::with(['pharmaciesSchedules' => function ($query) use ($currentDay, $currentMonth) {
            $query->where('day', $currentDay)
                ->where('month', $currentMonth);
        }])->whereHas('pharmaciesSchedules', function ($query) use ($currentDay, $currentMonth) {
            $query->where('day', $currentDay)
                ->where('month', $currentMonth);
        })->get();

        // Validar si no se encuentran farmacias
        if ($pharmacies->isEmpty()) {
            return response()->json(['message' => "No hay farmacias de guardia con horarios disponibles para hoy."], 404);
        }

        // Retornar las farmacias y sus horarios para hoy
        return response()->json(PharmaciesResource::collection($pharmacies));
    }

    public function getByMonth($month): \Illuminate\Http\JsonResponse
    {
        if (\Utils::intIsValidMonth($month) === false) {
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
