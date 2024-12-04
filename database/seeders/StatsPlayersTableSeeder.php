<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatsPlayersTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\StatsPlayer::create([
            'name' => 'John Doe',
            'position' => 'Midfielder',
            'matches' => 20,
            'goals' => 5,
            'assists' => 3,
            'market_value' => 20000000
        ]);
    }

}
