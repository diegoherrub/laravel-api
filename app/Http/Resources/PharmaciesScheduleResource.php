<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PharmaciesScheduleResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'range_date' => $this->range_date,
            'day' => $this->day,
            'month' => $this->month,
        ];
    }
}
