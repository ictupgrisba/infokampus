<?php

namespace App\Services;

use App\Exceptions\FailedResponseException;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

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
        if ($this->userRepository->isUserExist($username))
            throw new FailedResponseException(
                "username|$username already registered.", 400
            );
        $response = $this->userRepository->add($user);
        if (is_null($response))
            throw new FailedResponseException(
                "server|An error occurred.", 500
            );
        Auth::login($response);

        Log::debug("UserService > save > ". json_encode($response));
        return $response;
    }

    function login(UserLoginRequest $request): User
    {
        $validated = $request->validated();
        $userRequest = new User($validated);
        $user = $this->userRepository->find($userRequest->username);
        if(is_null($user)) throw new FailedResponseException(
            "username|User with username ".$userRequest->username." not found.", 404
        );
        $hashedPassword = $user->password;
        if (Hash::check($request['password'], $hashedPassword)) throw new FailedResponseException(
            "password|User password does not match.", 401
        );
        Auth::login($user);
        $user->token = Str::uuid()->toString();

        Log::debug("UserService > ". json_encode($user));
        $tokenized = $this->userRepository->update($user->id, $user);
        if (is_null($tokenized)) throw new FailedResponseException(
            "server|User token unrecognized.", 500
        );
        return $user;
    }
}
