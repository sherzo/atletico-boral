<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Activity extends Model
{
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
    ];

    public function getRouteKey()
    {
        return Hashids::encode(intval($this->getKey()));
    }

    public function events()
    {
    	return $this->hasMany(Event::class);
    }
}
