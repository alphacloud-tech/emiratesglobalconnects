<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function quote()
    {
        return $this->hasOne(Quote::class);
    }

    public function commentCount()
    {
        return $this->comments()->count();
    }

    public function subImages()
    {
        return $this->hasMany(SubImage::class);
    }

}
