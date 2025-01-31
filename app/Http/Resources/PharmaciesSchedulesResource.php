<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PharmaciesSchedulesResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'schedule_id' => $this->schedule_id,
            'id_pharmacy' => $this->id_pharmacy,
            'schedule_on_call' => $this->schedule_on_call
        ];
    }
}
