<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

         'name', 'organizer', 'anfitrion', 'category_id',

    ];

    public function times()
    {
    	return $this->hasMany(Time::class);
    }

    public function getFullNameAttribute()
    {
    	$time = $this->times()->where('in_progress', true)->first();
    	$date = strtotime($time->start_date);
    	return $this->name . ' - ' . strtoupper(date('M Y', $date));
    }

    public function inProgress()
    {
        return $this->times()->where('in_progress', true)->exists();
    }

    public function type()
    {
        return $this->belongsTo('App\Type', 'category_id');
    }
}
