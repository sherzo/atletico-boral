<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
	protected $table = 'athletes_about';

    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'athlete_id', 'foot', 'age', 'sports', 'soccer', 'favorites', 'goalkeeper', 'fanA', 'fanI', 'country_team', 'profession', 'occupation', 'description_football', 'description_like', 'nickname'
    ];

    public function athlete()
    {
    	return $this->blongsTo(Athlete::class);
    }
}
