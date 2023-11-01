<?php

namespace App\Services;

use App\Domain\User;
use App\Http\Requests\UserRegisterRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserService implements IUserService
{
    private UserRepository $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    function register(UserRegisterRequest $request): User
    {
        $user = new User(
            username: $request['username'],
            role: $request['role'],
            password: $request['password']
        );
        $username = $user->username;
        if ($this->userRepository->isUserExist($username)){
            $error = [
                "errors" => [
                    "username" => ["Username $username already registered."]
                ]
            ];
            throw new HttpResponseException(response($error, 400));
        }
        return $user;
    }
}
