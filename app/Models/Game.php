<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'game';
    protected $primaryKey = 'id_game';
    protected $fillable = [
        'name',
        'start_at',
        'on_image',
        'off_image',
        'tree_image',
        'style'
    ];
}
