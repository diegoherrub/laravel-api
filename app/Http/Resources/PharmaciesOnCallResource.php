<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PharmaciesOnCallResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'pharmacyOnCallId' => $this->pharmacy_on_call_id,
            'name_pharmacy' => $this->name_pharmacy,
            'location' => $this->location,
            'schedule' => $this->schedule,
            'phone' => $this->phone,
            'day' => $this->day,
            'month' => $this->month,
            'year' => $this->year
        ];
    }
}
