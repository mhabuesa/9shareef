<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $guarded = ['id'];

    public function replies()
    {
        return $this->hasMany(ContactReply::class, 'contact_id');
    }
}
