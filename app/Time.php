<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $guarded = [];

	public function tournament()
	{
		return $this->belongsTo(Tournament::class);
	}

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function matches()
    {
    	return $this->hasMany(Match::class);
    }

    public function getFullNameAttribute()
    {
    	$date = strtotime($this->start_date);
    	return strtoupper(date('F Y', $date));
    }
}
