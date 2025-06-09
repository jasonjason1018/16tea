<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameToken extends Model
{
    protected $table = 'game_token';
    protected $primaryKey = 'id_game_token';
    protected $fillable = [
        'uid',
        'token',
        'active'
    ];
}
