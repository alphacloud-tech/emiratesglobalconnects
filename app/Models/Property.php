<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subImages()
    {
        return $this->hasMany(SubImage::class);
    }

    public function detail()
    {
        return $this->hasOne(PropertyDetail::class);
    }

    public function features()
    {
        return $this->belongsToMany(PropertyFeature::class, 'property_feature_property', 'property_id', 'property_feature_id');
    }
}
