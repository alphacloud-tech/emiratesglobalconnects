<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function isMainComment()
    {
        return $this->parent_id === null;
    }
}
