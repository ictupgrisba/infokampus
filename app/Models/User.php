<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model implements Authenticatable
{
    use HasUuids;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $keyType = 'uuid';

    protected $fillable = [
        "username", "role", "password", "token"
    ];

    public function toModel(
        string $username,
        string $role,
        string $password): void {

        $this->username = $username;
        $this->role = $role;
        $this->password = $password;
    }

    /*function contacts(): HasMany
    {
        return $this->hasMany(
            Contact::class, "user_id", "id"
        );
    }*/
    public function getAuthIdentifierName()
    {
        return "username";
    }

    public function getAuthIdentifier()
    {
        return $this->username;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->token;
    }

    public function setRememberToken($value)
    {
        $this->token = $value;
    }

    public function getRememberTokenName()
    {
        return "token";
    }
}
