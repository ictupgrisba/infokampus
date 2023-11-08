<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id')
                ->unique('user_id_unique')
                ->nullable(false);

            $table->string('username', 25)
                ->nullable(false);

            $table->enum('role', ['ADMIN', 'GUEST'])
                ->nullable(false);

            $table->string('token')
                ->nullable()
                ->unique('user_token_unique');

            $table->string('password', 255)
                ->nullable(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
