<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function home_team()
    {
        return $this->belongsTo(Team::class, 'homeTeam');
    }
    public function away_team()
    {
    return $this->belongsTo(Team::class, 'awayTeam');
    }
}