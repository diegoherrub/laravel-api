<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'poster' => $this->poster,
            'link' => $this->link,
            'calification' => $this->calification,
            'director' => $this->director,
            'characters' => $this->characters,
            'duration' => $this->duration,
            'link_video' => $this->link_video,
            'synopsis' => $this->synopsis,
            'link_ticket' => $this->link_ticket,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'times' => $this->movieTimes->map(function ($time) {
                return [
                    'id' => $time->id,
                    'movie_id' => $time->movie_id,
                    'time' => $time->time,
                    'created_at' => $time->created_at,
                    'updated_at' => $time->updated_at
                ];
            })
        ];
    }
}
