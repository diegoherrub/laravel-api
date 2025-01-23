<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventsResource;
use App\Models\Events;
use Carbon\Carbon;

class EventsController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $events = Events::with('eventSources', 'eventFiles')->get();
        return response()->json(EventsResource::collection($events));
    }

    private function setLocale(): void
    {
        Carbon::setLocale('es');
    }

    private static function fetchEventsByMonth(int $month): \Illuminate\Support\Collection
    {
        return Events::with('eventSources', 'eventFiles')
            ->whereMonth('date_start', $month)
            ->orderBy('date_start', 'asc')
            ->get();
    }

    private static function fetchAllEvents(): \Illuminate\Support\Collection
    {
        return Events::with('eventSources', 'eventFiles')
            ->orderBy('date_start', 'asc')
            ->get();
    }

    private static function formatEventDates($events): void
    {
        $events->each(function ($event) {
            $event->date_start = Carbon::parse($event->date_start)->format('d/m/Y');
            $event->date_end = Carbon::parse($event->date_end)->format('d/m/Y');
        });
    }

    public function getEventsByMonth(?string $month = null): \Illuminate\Http\JsonResponse
    {
        $this->setLocale();

        if ($month) {
            if (!is_numeric($month) || $month < 1 || $month > 12) {
                return response()->json(['error' => 'Mes inválido. Debe ser un número entre 1 y 12.'], 400);
            }

            $events = self::fetchEventsByMonth($month);
            if ($events->isEmpty()) {
                return response()->json(['message' => 'No hay eventos para este mes.'], 404);
            }
            self::formatEventDates($events);

            $monthName = Carbon::createFromDate(null, $month)->translatedFormat('F Y');

            return response()->json([
                'month' => $monthName,
                'events' => EventsResource::collection($events),
            ]);
        } else {
            $events = self::fetchAllEvents();

            if ($events->isEmpty()) {
                return response()->json(['message' => 'No hay eventos disponibles.'], 404);
            }

            $groupedEvents = $events->groupBy(function ($event) {
                return Carbon::parse($event->date_start)->format('Y-m');
            });

            $response = [];
            foreach ($groupedEvents as $monthYear => $monthEvents) {
                $monthName = Carbon::parse($monthYear)->translatedFormat('F Y');
                self::formatEventDates($monthEvents);

                $response[] = [
                    'month' => $monthName,
                    'events' => EventsResource::collection($monthEvents),
                ];
            }

            return response()->json($response, 200);
        }
    }
}
