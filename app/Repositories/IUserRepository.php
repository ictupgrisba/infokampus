<?php

namespace App\Repositories;

use App\Models\User;

interface IUserRepository
{
    function add(User $request): ?User;
    function update(string $userId, User $request): ?User;
    function isUserExist(string $username): bool;
    function find(string $username): ?User;
    function removeAll(): void;
}
