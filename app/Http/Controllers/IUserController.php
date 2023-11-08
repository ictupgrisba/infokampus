<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Resources\UserResource;

interface IUserController
{
    function register(UserRegisterRequest $request): UserResource;
    function login(UserLoginRequest $request): UserResource;
}
