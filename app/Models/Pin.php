<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    protected $table = 'pin';
    protected $primaryKey = 'id_pin';
    protected $fillable = [
        'active',
    ];

    const ACTIVE = [
        'enabled' => 1,
        'disabled' => 0
    ];
}
