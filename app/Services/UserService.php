<?php

namespace App\Services;

use App\Exceptions\FailedResponseException;
use App\Models\User;
use App\Http\Requests\UserRegisterRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Log;

class UserService implements IUserService
{
    private UserRepository $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    function register(UserRegisterRequest $request): User
    {
        $validated = $request->validated();
        $user = new User($validated);
        $username = $user->username;
        Log::debug("UserService > user > ". json_encode($user));
        if ($this->userRepository->isUserExist($username)) throw new FailedResponseException(
            "username|$username already registered.", 400
        );
        $response = $this->userRepository->save($user);
        if (is_null($response)) throw new FailedResponseException(
            "server|An error occurred.", 500
        );
        Log::debug("UserService > save > ". json_encode($response));
        return $response;
    }
}
