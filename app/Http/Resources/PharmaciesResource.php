<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PharmaciesResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name_pharmacy' => $this->name_pharmacy,
            'location' => $this->location,
            'phone' => $this->phone,
            'schedules' => $this->pharmaciesSchedules->map(function ($schedule) {
                return [
                    'range_date' => $schedule->range_date,
                    'day' => $schedule->day,
                    'month' => $schedule->month
                ];
            }),
        ];
    }
}
