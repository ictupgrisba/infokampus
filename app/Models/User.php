<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use HasUuids;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $keyType = 'uuid';
    protected $fillable = [
        "username", "role", "password"
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
}
