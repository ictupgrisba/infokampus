<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserRepository implements IUserRepository
{
    function add(User $request): ?User
    {
        $request->toModel(
            username: $request->username,
            role: $request->role,
            password: Hash::make($request->password)
        );

        $savedUser = $request->save();
        if (!$savedUser) return null;

        return $request;
    }
    function removeAll(): void
    {
        Log::info("UserRepository > destroyAll");
        DB::table('users')->truncate();
        // DB::delete('DELETE FROM users');
    }
    function find(string $username): ?User
    {
        return User::query()
            ->where('username', $username)
            ->get()
            ->first();
    }
    function isUserExist(string $username): bool
    {
        return !is_null($this->find($username));
    }

    function update(string $userId, User $request): ?User
    {
        $user = User::query()->find($userId);
        if (is_null($user)) return null;

        $user->username = $request->username;
        $user->role = $request->role;
        $user->token = $request->token;
        $user->password = $request->password;

        // Log::debug("UserRepository > ". json_encode($user));

        $savedUser = $user->save();
        if (!$savedUser) return null;

        return $user->get()->first();
    }
}
