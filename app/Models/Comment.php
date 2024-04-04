<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function blogPost()
    {
        return $this->belongsTo(BlogPost::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function isMainComment()
    {
        return $this->parent_id === null;
    }
}
