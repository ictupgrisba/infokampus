<?php

namespace Tests\Http\Controllers;

use App\Models\User;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    private array $data = [
        'username' => 'utifmd',
        'role' => 'ADMIN',
        'password' => '121212'
    ];
    public function testRegisterSuccess()
    {
        $this
            ->post('/api/users', $this->data)
            ->assertStatus(201)
            ->assertJson([
                "data" => [
                    "username" => $this->data['username'],
                    "role" => $this->data['role']
                ]
            ]);
    }

    public function testRegisterUnameAlreadyExistsSuccess()
    {
        User::query()->create($this->data);

        $this->post('/api/users', $this->data)
            ->assertStatus(400)
            ->assertJson([
                "errors" => [
                    "username" => $this->data['username']. " already registered."
                ]
            ]);
    }

    public function testLoginUserSuccess()
    {
        User::query()->create($this->data);

        $this->post('/api/users/login', $this->data)
            ->assertStatus(200)
            ->assertJson([
                "data" => [
                    "username" => $this->data['username'],
                    "role" => $this->data['role']
                ]
            ]);
    }
}
