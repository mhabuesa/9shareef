<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizModel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sentence()
    {
        return $this->hasMany(QuizSentence::class, 'quiz_id', 'id');
    }

    public function qaseedah()
    {
        return $this->hasMany(QuizQaseedah::class, 'quiz_id', 'id');
    }
}
