<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubImage extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function blogPost()
    // {
    //     return $this->belongsTo(BlogPost::class);
    // }

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
