<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizInfo extends Model
{
    protected $guarded = ["id"];

    protected $casts = [
        'starting' => 'datetime',
        'ending'   => 'datetime',
    ];
}
