<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Match extends Model
{
	protected $guarded = [];

	public function getRouteKey()
    {
		return Hashids::encode(intval($this->getKey()));
	}
	
	public function local()
	{
		return $this->belongsTo('App\Team', 'local_id');
	}

	public function visitor()
	{
		return $this->belongsTo('App\Team', 'visitor_id');
	}

	public function place()
	{
		return $this->belongsTo(Place::class);
	}

	public function time()
	{
		return $this->belongsTo(Time::class);
	}

	public function result()
	{
		return $this->hasOne(Result::class);
	}
}
