<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatsPlayersTable extends Migration
{
    public function up()
    {
        Schema::create('stats_players', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('matches')->nullable();
            $table->integer('goals')->nullable();
            $table->integer('assists')->nullable();
            $table->decimal('market_value', 10, 2)->nullable();
            $table->string('position')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stats_players');
    }
}


