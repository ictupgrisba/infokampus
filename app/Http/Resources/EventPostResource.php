<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventPostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->title,
            "title" => $this->title,
            "address" => $this->address,
            "location_name" => $this->location_name,
            "longitude" => $this->longitude,
            "latitude" => $this->latitude,
            "date_start" => $this->date_start,
            "date_end" => $this->date_end,
            "time_start" => $this->time_start,
            "time_end" => $this->time_end,
            "is_endless" => $this->is_endless,
            "timezone" => $this->timezone,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
