<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PharmaciesSchedulesResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'pharmacy_id' => $this->pharmacy_id,
            'schedule_on_call' => $this->schedule_on_call
        ];
    }
}
