<?php

namespace App\Services;


use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;

interface IUserService
{
    function register(UserRegisterRequest $request): User;

    function login(UserLoginRequest $request): User;
}
