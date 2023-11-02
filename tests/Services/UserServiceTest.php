<?php

namespace Tests\Services;

use App\Http\Requests\UserRegisterRequest;
use App\Services\IUserService;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    public function testRegisterSuccess()
    {
        $request = new UserRegisterRequest([
            'username' => 'mimin',
            'role' => 'ADMIN',
            'password' => '121212'
        ]);
        $user = $this->userService->register($request);
        self::assertSame($request->username, $user->username);
    }
}
