<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventsResource;
use App\Models\Events;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $events = Events::with('eventSources', 'eventFiles')->get();
        return response()->json(EventsResource::collection($events));
    }

    public function getEventsByMonth(?string $month = null): \Illuminate\Http\JsonResponse
    {

        \Carbon\Carbon::setLocale('es');

        if ($month) {
            if (!is_numeric($month) || $month < 1 || $month > 12) {
                return response()->json(['error' => 'Mes inválido. Debe ser un número entre 1 y 12.'], 400);
            }
            $events = Events::with('eventSources', 'eventFiles')
                ->whereMonth('date_start', $month)
                ->orderBy('date_start', 'asc')
                ->get();

            $monthName = Carbon::create()->month($month)->translatedFormat('F');

            $events->each(function ($event) {
                $event->date_start = Carbon::parse($event->date_start)->format('d/m/Y');
                $event->date_end = Carbon::parse($event->date_end)->format('d/m/Y');
            });

            return response()->json([
                'month' => $monthName,
                'events' => EventsResource::collection($events),
            ]);

        } else {
            $events = Events::with('eventSources', 'eventFiles')
                ->orderBy('date_start', 'asc')
                ->get();

            $groupedEvents = $events->groupBy(function ($event) {
                return Carbon::parse($event->date_start)->format('m-Y');
            });

            $response = [];
            foreach ($groupedEvents as $monthYear => $monthEvents) {
                $monthName = Carbon::parse($monthYear)->translatedFormat('F Y');

                $formattedMonthEvents = $monthEvents->map(function ($event) {
                    $event->date_start = Carbon::parse($event->date_start)->format('d/m/Y');
                    $event->date_end = Carbon::parse($event->date_end)->format('d/m/Y');
                    return $event;
                });

                $response[] = [
                    'month' => $monthName,
                    'events' => EventsResource::collection($formattedMonthEvents),
                ];
            }

            return response()->json($response);
        }
    }
}
