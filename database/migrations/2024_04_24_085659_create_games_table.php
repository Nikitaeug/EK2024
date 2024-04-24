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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->dateTime('utcDate');
            $table->integer('matchday');
            $table->string('stage');
            $table->string('group');
            $table->foreignId('homeTeam')->constrained('teams');
            $table->foreignId('awayTeam')->constrained('teams');
            $table->string('winner')->nullable();
            $table->integer('scoreHomeHalfTime')->nullable();
            $table->integer('scoreAwayHalfTime')->nullable();
            $table->integer('scoreHomeFullTime')->nullable();
            $table->integer('scoreAwayFullTime')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
