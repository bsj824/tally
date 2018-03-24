<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = [
        'user_id','sign','name','avatar','sex','birthday','vacation','company','school','location'
    ];

    protected $hidden = [
        'created_at','updated_at'
    ];
}
