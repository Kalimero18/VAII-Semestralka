<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navrh extends Model
{
    use HasFactory;

    protected $table = 'navrhy';

    protected $fillable = ['user_id', 'nazov_klubu', 'popis'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

