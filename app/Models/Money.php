<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    protected $fillable = [
        'user_id','class_id','money','type'
    ];

    protected $hidden = [
        'created_at','updated_at'
    ];
}
