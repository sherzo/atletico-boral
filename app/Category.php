<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $guarded = [];

	public function times()
    {
    	return $this->belongsToMany(Time::class);
    }

    public function teams()
    {
    	return $this->hasMany(Team::class);
    }

    public function tournaments()
    {
    	return $this->times();
    }
}
