<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PharmaciesScheduleResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'pharmacy_id' => $this->pharmacy_id,
            'range_date' => $this->range_date,
            'day' => $this->day,
            'month' => $this->month,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt
        ];
    }
}
