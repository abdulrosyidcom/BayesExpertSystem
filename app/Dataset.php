<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    protected $fillable = ['test'];

    public function diseases()
    {
        return $this->belongsToMany(Disease::class)->withTimestamps();
    }

    public function symptoms()
    {
        return $this->belongsToMany(Symptom::class)->withTimestamps();
    }
}
