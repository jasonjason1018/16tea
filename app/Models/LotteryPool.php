<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LotteryPool extends Model
{
    protected $table = 'lottery_pool';
    protected $primaryKey = 'id_lottery_pool';
    protected $fillable = [
        'start_at',
        'end_at',
        'quantity',
        'winning_odds'
    ];
}
