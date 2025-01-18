<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventsResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'url_source' => $this->url_source,
            'url_image' => $this->url_image,
            'date_start' => $this->date_start,
            'date_end' => $this->date_end,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'sources' => $this->eventSources->map(function ($eventSource) {
                return [
                    'id' => $eventSource->id,
                    'event_id' => $eventSource->event_id,
                    'name' => $eventSource->name,
                    'url_source' => $eventSource->url_source,
                    'url_image' => $eventSource->url_image,
                    'created_at' => $eventSource->created_at,
                    'updated_at' => $eventSource->updated_at
                ];
            }),
            'files' => $this->eventFiles->map(function ($eventFile) {
                return [
                    'id' => $eventFile->id,
                    'event_id' => $eventFile->event_id,
                    'url_files' => $eventFile->url_files,
                    'created_at' => $eventFile->created_at,
                    'updated_at' => $eventFile->updated_at
                ];
            }),
        ];
    }
}
