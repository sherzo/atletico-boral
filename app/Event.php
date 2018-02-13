<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Event extends Model
{
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activity_id', 'url', 'title', 'date', 'content', 
    ];

    public function getRouteKey()
    {
        return Hashids::encode($this->getKey());
    }

    public function imagesUpload()
    {
    	return $this->hasMany('App\Event_images', 'event_id', 'id');
    }

    public function activity()
    {
        return $this->belongsTo('App\Activity', 'activity_id');
    }
}
