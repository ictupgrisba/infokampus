<?php

namespace App\Services;


use App\Models\User;
use App\Http\Requests\UserRegisterRequest;

interface IUserService
{
    function register(UserRegisterRequest $request): User;
}
