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
        Schema::create('stats_teams', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('matches')->nullable();
            $table->integer('wins')->nullable();
            $table->integer('draws')->nullable();
            $table->integer('losses')->nullable();
            $table->integer('points')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats_teams');
    }
};
