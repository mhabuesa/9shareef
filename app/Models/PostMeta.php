<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostMeta extends Model
{
    protected $guarded = ['id'];

    public function getTagsArrayAttribute()
    {
        return $this->tags
            ? array_map('trim', explode(',', $this->tags))
            : [];
    }
}
