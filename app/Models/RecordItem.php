<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecordItem extends Model
{
    protected $table = 'record_item';
    protected $primaryKey = 'id_record_item';
    protected $fillable = [
        'name',
        'image_path',
        'name_en'
    ];
}
