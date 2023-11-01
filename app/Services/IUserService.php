<?php

namespace App\Services;


use App\Domain\User;
use App\Http\Requests\UserRegisterRequest;

interface IUserService
{
    function register(UserRegisterRequest $request): User;
}
