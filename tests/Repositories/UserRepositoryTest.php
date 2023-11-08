<?php

namespace Tests\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    private array $data = [
        "username" => "utifmd",
        "role" => "ADMIN",
        "password" => "121212"
    ];
    public function testSaveUserSuccess()
    {
        $request = new User();
        $request->toModel(
            username: $this->data['username'],
            role: $this->data['role'],
            password: $this->data['password']
        );
        $user = $this->userRepository->add($request);
        self::assertSame($user->username, $request->username);
        self::assertSame($user->role, $request->role);
        self::assertTrue(Hash::check($request->password, $user->password));
    }

    public function testUpdateUserSuccess()
    {
        $model = User::query()->create($this->data);

        $request = new User();
        $request->toModel(
            username: 'new_uname',
            role: 'GUEST',
            password: $this->data['password']
        );
        $user = $this->userRepository->update($model->id, $request);
        self::assertSame('new_uname', $user->username);
        self::assertSame('GUEST', $user->role);
        self::assertSame($request->token, $user->token);
        self::assertSame($request->password, $user->password);
    }
}
