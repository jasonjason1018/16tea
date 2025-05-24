<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberPrize extends Model
{
    protected $table = 'member_prize';
    protected $primaryKey = 'id_member_prize';
    protected $fillable = [
        'ip',
        'id_pin',
        'id_member',
    ];
}
