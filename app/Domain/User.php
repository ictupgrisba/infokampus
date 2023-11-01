<?php

namespace App\Domain;

class User
{
    public string $username;
    public string $role;
    public string $password;
    public function __construct(string $username, string $role, string $password){
        $this->username = $username;
        $this->role = $role;
        $this->password = $password;
    }
}
