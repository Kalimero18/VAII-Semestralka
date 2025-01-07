<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatsTeam extends Model
{
    use HasFactory;

    protected $table = 'stats_teams';

    protected $fillable = ['name', 'matches', 'wins', 'draws', 'losses', 'points'];

    public $timestamps = true;
}
