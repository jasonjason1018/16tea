<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameAudioLog extends Model
{
    protected $table = 'game_audio_log';
    protected $primaryKey = 'id_game_audio_log';
    protected $fillable = [
        'levels',
        'audio_status',
        'uid'
    ];
}
