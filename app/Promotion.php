<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;


class Promotion extends Model
{
    protected $guarded = [];

    public function getRouteKey()
    {
		return Hashids::encode($this->getKey());
	}

	public function applications()
	{
		return $this->hasMany(Application::class);
	}
}
