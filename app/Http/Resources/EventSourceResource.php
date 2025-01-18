<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventSourceResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'event_id' => $this->event_id,
            'url_files' => $this->url_files,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt
        ];
    }
}
