<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'id_member';
    protected $fillable = [
        'name',
        'uid',
        'source',
        'ip'
    ];

    const SOURCE = [
        'line' => 2,
        'fb' => 1
    ];
}
