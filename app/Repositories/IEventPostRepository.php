<?php

namespace App\Repositories;

use App\Models\EventPost;
use Illuminate\Support\Collection;

interface IEventPostRepository
{
    function add(EventPost $request): ?EventPost;
    function remove(string $eventId): bool;
    function list(): Collection;
    function removeAll(): void;
    // function listOf(int $page, int $size): array;
}
