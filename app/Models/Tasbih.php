<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tasbih extends Model implements Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, AuthenticatableTrait;

    protected $guarded = ['id'];
}
