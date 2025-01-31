<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PharmaciesResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'pharmacyId' => $this->pharmacy_id,
            'name_pharmacy' => $this->name_pharmacy,
            'location' => $this->location,
            'schedule' => $this->schedule,
            'phone' => $this->phone
        ];
    }
}
