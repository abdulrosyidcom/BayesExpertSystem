<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $fillable = ['code', 'name', 'probability', 'appear', 'information', 'suggestion'];

    public function datasets()
    {
        return $this->belongsToMany(Dataset::class)->withTimestamps();
    }
}
