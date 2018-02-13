<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function promotion()
    {
    	return $this->belongsTo(Promotion::class);
    }

    public function athlete()
    {
    	return $this->belongsTo(Athlete::class);
    }
}
