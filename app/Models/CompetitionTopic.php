<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionTopic extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }


    public function participants()
    {
        return $this->belongsToMany(
            Participant::class,
            'participant_topics',
            'topic_id',
            'participant_id'
        );
    }
}