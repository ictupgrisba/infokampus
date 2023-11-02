<?php

namespace App\Repositories;

use App\Models\User;

interface IUserRepository
{
    function save(User $request): ?User;
    function isUserExist(string $username): bool;
    function destroyAll(): void;
}
