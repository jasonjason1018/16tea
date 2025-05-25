<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';
    protected $primaryKey = 'id_form';
    protected $fillable = [
        'id_member',
        'ip',
        'name',
        'mobile',
        'email',
        'topic'
    ];
}
