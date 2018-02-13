<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Athlete extends Model
{
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'dni', 'name', 'surname', 'nationality', 'birthdate', 'age', 'height', 'weight', 'position_id', 'from', 'representative_id', 'type', 'registered',
    ];

    public function getRouteKey()
    {
		   return Hashids::encode(intval($this->getKey()));
	  }

    public function getIdentificationAttribute()
    {
        return $this->nationality . '-' . $this->dni;
    }

    public function athlete()
    {
        return $this->hasOne(About::class);
    }

    public function representative()
    {
        return $this->belongsTo(Representative::class);
    }

    public function GeneralStatistics()
    {
        return $this->belongsToMany('App\GeneralStatistics', 'statistics_general', 'avg_id', 'athletes_id')->withPivot('match_id', 'total');
    }

    public function IndividualStatistics()
    {
        return $this->belongsToMany('App\GeneralStatistics', 'statistics_tournament', 'avg_id', 'athletes_id')->withPivot('tournament_id', 'total');
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function actualTeam()
    {
        return $this->belongsToMany(Team::class)->get()->last();
    }


    public function individual()
    {
        return $this->belongsTo('App\Individual', 'position_id');
    }
    
    /*
    *  Attributes 
    */

    public function getFullDniAttribute()
    {
        return $this->nationality . '-' . $this->dni;
    }

    public function getFullNameAttribute()
    { 
       return $this->name . ' ' . $this->surname;
    }

    public function getFullNationalityAttribute()
    {
        if($this->nationality == 'N'){
            return 'Nacional';
        }else{
            return 'Extranjero';
        }
    }

    public function getYearsAttribute()
    {
        $date  = explode('-', $this->birthdate);

        return $years = (date('m') >= $date[1]) ? $years = date('Y') - $date[0] : $years = (date('Y')-1) - $date[0];
    }

    public function getImageAttribute()
    {
        if($this->url == 'nofoto.png')
        {
            return "http://base1.dyndns-server.com:8090/asemeh/wp-content/uploads/2015/01/nofoto.png";
        }else{
            return \Storage::disk('public')->url($this->url);
        }
    }
}
