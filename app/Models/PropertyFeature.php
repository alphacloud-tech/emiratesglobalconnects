<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PropertyFeature extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_feature_property', 'property_feature_id', 'property_id');
    }
}
