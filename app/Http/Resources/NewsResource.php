<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'source_id' => $this->source_id,
            'title' => $this->title,
            'pub_date' => $this->pub_date,
            'description' => $this->description,
            'link' => $this->link,
            'url_image' => $this->url_image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'source' => $this->newSource ? [
                'id' => $this->newSource->id,
                'name' => $this->newSource->name,
                'url_image' => $this->newSource->url_image,
                'url_source' => $this->newSource->url_source,
                'created_at' => $this->newSource->created_at,
                'updated_at' => $this->newSource->updated_at,
            ] : null,
        ];
    }
}
