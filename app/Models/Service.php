<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    public function subImages()
    {
        return $this->hasMany(SubImage::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
