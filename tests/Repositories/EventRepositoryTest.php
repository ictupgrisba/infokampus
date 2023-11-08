<?php

namespace Tests\Repositories;

use App\Models\EventPost;
use Carbon\Carbon;
use Tests\TestCase;


class EventRepositoryTest extends TestCase
{
    private array $data = [];
    public function __construct(string $name)
    {
        parent::__construct($name);
        $date = Carbon::now();

        $this->data['title'] = "Acara wisuda kampus ";
        $this->data['address'] = "Jl. Gunung pangilun No.1 Padang";
        $this->data['location_name'] = "Kampus UPCC";
        $this->data['longitude'] = "-0.9080311";
        $this->data['latitude'] = "100.3680981";
        $this->data['date_start'] = $date->toDateString();
        $this->data['date_end'] = $date->toDateString();
        $this->data['time_start'] = $date->toDateTimeString();
        $this->data['time_end'] = $date->toDateTimeString();
        $this->data['is_endless'] = false;
        $this->data['timezone'] = "WIB";
    }
    public function testSaveSuccess()
    {
        $request = new EventPost();
        $request->toModel(
            title: $this->data['title'],
            address: $this->data['address'],
            location_name: $this->data['location_name'],
            longitude: $this->data['longitude'],
            latitude: $this->data['latitude'],
            date_start: $this->data['date_start'],
            date_end: $this->data['date_end'],
            time_start: $this->data['time_start'],
            time_end: $this->data['time_end'],
            is_endless: $this->data['is_endless'],
            timezone: $this->data['timezone'],
        );

        $response = $this->eventPostRepository->add($request);
        self::assertNotNull($response);
        self::assertSame($request->title, $response->title);
        self::assertSame($request->address, $response->address);
        self::assertSame($request->location_name, $response->location_name);
        self::assertSame($request->longitude, $response->longitude);
        self::assertSame($request->latitude, $response->latitude);
        self::assertSame($request->date_start, $response->date_start);
        self::assertSame($request->date_end, $response->date_end);
        self::assertSame($request->time_start, $response->time_start);
        self::assertSame($request->time_end, $response->time_end);
        self::assertSame($request->is_endless, $response->is_endless);
        self::assertSame($request->timezone, $response->timezone);
    }

    public function testRemoveSuccess()
    {
        $model = EventPost::query()->create($this->data);
        $removed = $this->eventPostRepository->remove($model->id);
        self::assertTrue($removed);
    }

    public function testListSuccess()
    {
        EventPost::query()->create($this->data);
        $list = $this->eventPostRepository->list();
        self::assertNotEmpty($list);
    }
}
