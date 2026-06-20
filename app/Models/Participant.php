<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function CreateTopics()
    {
        return $this->hasMany(ParticipantTopic::class);
    }
    
     public function topics()
    {
        return $this->belongsToMany(
            CompetitionTopic::class,
            'participant_topics',
            'participant_id',
            'topic_id'
        );
    }
}