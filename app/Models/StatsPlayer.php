<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatsPlayer extends Model
{
    use HasFactory;

    protected $table = 'stats_players';

    protected $fillable = ['name', 'position', 'matches', 'goals', 'assists', 'market_value'];

    public $timestamps = true;
}

