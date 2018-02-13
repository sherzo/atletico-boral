<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $guarded = [];

    public function tournaments()
    {
    	return $this->belongsToMany(Tournament::class);
    }
}
