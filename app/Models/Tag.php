<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';
    protected $primaryKey = 'id_tag';
    protected $fillable = [
        'action',
        'page_name',
        'label',
        'id_member'
    ];
}
