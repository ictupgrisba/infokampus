<?php

namespace App\Repositories;

use App\Models\EventPost;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class EventRepository implements IEventPostRepository
{
    function add(EventPost $request): ?EventPost
    {
        $request->toModel(
            title: $request->title,
            address: $request->address,
            location_name: $request->location_name,
            longitude: $request->longitude,
            latitude: $request->latitude,
            date_start: $request->date_start,
            date_end: $request->date_end,
            time_start: $request->time_start,
            time_end: $request->time_end,
            is_endless: $request->is_endless,
            timezone: $request->timezone
        );
        $saved = $request->save();
        if (!$saved) return null;

        return $request;
    }

    function remove(string $eventId): bool
    {
        $state = EventPost::destroy($eventId);
        return $state > 0;
    }

    function list(): Collection
    {
        return EventPost::query()
            ->select('*')
            ->get();
    }

    function removeAll(): void
    {
        DB::table('event_posts')->truncate();
    }
}
