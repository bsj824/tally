<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class classify extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'created_at','updated_at'
    ];
}
