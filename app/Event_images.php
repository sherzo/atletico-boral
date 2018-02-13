<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_images extends Model
{
    protected $table = 'events_images';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = [];

    protected $fillable = [
        'event_id', 'url',
    ];

    public function tabImages()
    {
    	return $this->belongsTo('App\Event', 'event_id');
    }
}
