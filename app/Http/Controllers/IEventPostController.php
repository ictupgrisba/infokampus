<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventPostPostRequest;
use App\Http\Resources\EventPostResource;

interface IEventPostController
{
    function post(EventPostPostRequest $request): EventPostResource;
    function delete(string $postId): void;
    function list(): array;
}
