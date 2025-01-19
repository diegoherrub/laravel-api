<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PharmaciesResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name_pharmacy' => $this->name_pharmacy,
            'location' => $this->location,
            'phone' => $this->phone,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'schedules' => $this->pharmaciesSchedules->map(function ($schedule) {
                return [
                    'id' => $schedule->id,
                    'pharmacy_id' => $schedule->pharmacy_id,
                    'range_date' => $schedule->range_date,
                    'day' => $schedule->day,
                    'month' => $schedule->month,
                    'year' => $schedule->year,
                    'created_at' => $schedule->created_at,
                    'updated_at' => $schedule->updated_at,
                ];
            }),
        ];
    }
}
