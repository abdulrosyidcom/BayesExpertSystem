<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    protected $fillable = ['code', 'symptom'];

    public function datasets()
    {
        return $this->belongsToMany(Dataset::class)->withTimestamps();
    }
}
