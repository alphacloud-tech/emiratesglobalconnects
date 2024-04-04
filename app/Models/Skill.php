<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function skillPercent()
    {
        return $this->belongsTo(SkillPercent::class);
    }
}
