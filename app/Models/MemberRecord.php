<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberRecord extends Model
{
    protected $table = 'member_record';
    protected $primaryKey = 'id_member_record';
    protected $fillable = [
        'id_member',
        'id_record_item'
    ];
}
