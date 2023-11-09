<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class EventPost extends Model
{
    use HasUuids;
    protected $table = 'event_posts';
    protected $primaryKey = 'id';
    protected $keyType = 'uuid';
    protected $fillable = [
        "title",
        "address",
        "location_name",
        "longitude",
        "latitude",
        "date_start",
        "date_end",
        "time_start",
        "time_end",
        "is_endless",
        "timezone"
    ];
    function toModel(
        $title, $address, $location_name, $longitude, $latitude, $date_start, $date_end, $time_start, $time_end, $is_endless, $timezone): void
    {
        $this->title = $title;
        $this->address = $address;
        $this->location_name = $location_name;
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->date_start = $date_start;
        $this->date_end = $date_end;
        $this->time_start = $time_start;
        $this->time_end = $time_end;
        $this->is_endless = $is_endless;
        $this->timezone = $timezone;
    }
}
