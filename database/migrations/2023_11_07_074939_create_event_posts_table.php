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
        Schema::create('event_posts', function (Blueprint $table) {
            $table->string('id')
                ->unique('event_id_unique')
                ->nullable(false)
                ->primary();
            $table->string('title')
                ->nullable(false);
            $table->string('address')
                ->nullable();
            $table->string('location_name', 100)
                ->nullable();
            $table->string('longitude', 45)
                ->nullable();
            $table->string('latitude', 45)
                ->nullable();
            $table->date('date_start')
                ->nullable(false);
            $table->date('date_end')
                ->nullable();
            $table->time('time_start')
                ->nullable(false);
            $table->time('time_end')
                ->nullable();
            $table->boolean('is_endless')
                ->nullable();
            $table->string('timezone', 25)
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_posts');
    }
};
