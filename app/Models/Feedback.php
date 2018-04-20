<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'nickname','theme', 'phone','details','qq','e_mail'
    ];

}
