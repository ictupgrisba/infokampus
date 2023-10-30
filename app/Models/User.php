<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasUuids;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $keyType = 'uuid';
    public $incrementing = false;

    public function __construct(
        public string $username,
        public string $role,
        public string $password,
    ){}
}
