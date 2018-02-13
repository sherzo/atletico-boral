<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Representative extends Model
{
    protected $guarded = [];

    public function getRouteKey()
    {
		  return Hashids::encode($this->getKey());
	  }

    public function athlete()
    {
    	return $this->belongsToMany(Athlete::class)->first();
    }

    public function user()
    {
    	return belongsTo(User::class);
    }

    public function getFullDniAttribute()
    {
      return $this->nationality . '-' . $this->dni;
    }
}
