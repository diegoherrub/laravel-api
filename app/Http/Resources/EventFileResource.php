<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventFileResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'event_id' => $this->event_id,
            'url_files' => $this->url_files,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
