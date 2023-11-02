<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserRepository implements IUserRepository
{
    function save(User $request): ?User
    {
        $user = new User();
        $user->toModel(
            username: $request->username,
            role: $request->role,
            password: $request->password
        );
        $savedUser = $user->save();
        if (!$savedUser) return null;

        return $user;
    }
    function destroyAll(): void
    {
        Log::info("UserRepository > destroyAll");
        DB::table('users')->truncate();
        // DB::delete('DELETE FROM users');
    }

    function isUserExist(string $username): bool
    {
        return User::query()
                ->where('username', $username)
                ->count() > 0;
    }
}
