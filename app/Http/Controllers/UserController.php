<?php

namespace App\Http\Controllers;

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
            $errors = explode("|", $throwable->getMessage(), 2);
            $response = response(["errors" => [
                $errors[0] => $errors[1]
            ]],
                $throwable->getCode()
            );
            throw new HttpResponseException($response);
        }
    }
}
