<?php

namespace App\Services;

use App\Http\Requests\EventPostPostRequest;
use App\Models\EventPost;
use Illuminate\Support\Collection;

interface IEventPostService
{
    function post(EventPostPostRequest $request): EventPost;
    function delete(string $eventPostId): void;
    function list(): Collection;
}
