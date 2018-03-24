<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    protected $fillable = [
        'user_id','class_id','money'
    ];

    protected $hidden = [
        'created_at','updated_at'
    ];
}