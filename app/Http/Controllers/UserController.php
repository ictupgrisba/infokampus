<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Resources\UserResource;
use App\Services\IUserService;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserController extends Controller implements IUserController
{
    private IUserService $userService;
    public function __construct(IUserService $service)
    {
        $this->userService = $service;
    }
    function register(UserRegisterRequest $request): UserResource
    {
        try {
            $user = $this->userService->register($request);
            return new UserResource($user);

        } catch (\Throwable $throwable) {
            $response = Helper::getResponse($throwable);

            throw new HttpResponseException($response);
        }
    }

    function login(UserLoginRequest $request): UserResource
    {
        try {
            $user = $this->userService->login($request);
            return new UserResource($user);

        } catch (\Throwable $throwable) {
            $response = Helper::getResponse($throwable);

            throw new HttpResponseException($response);
        }
    }
}
