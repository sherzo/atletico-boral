<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Team extends Model
{
    protected $guarded = [];

    public function getRouteKey()
    {
        return Hashids::encode($this->getKey());
    }
    
    public function matches_visitor()
    {
    	return $this->hasMany('App\Match', 'visitor_id');
    }

    public function matches_local()
    {
    	return $this->hasMany('App\Match', 'local_id');
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function athlete()
    {
        return $this->belongsToMany('App\Athlete', 'athlete_team', 'team_id', 'athlete_id')->withPivot('status');
    }
}
