<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Vinkla\Hashids\Facades\Hashids;

class GeneralStatistics extends Model
{
    use SoftDeletes;

    protected $table = 'general_statistics';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public $timestamps = false;

    public function getRouteKey()
    {
        return Hashids::encode($this->getKey());
    }
    
    public function individual()
    {
    	return $this->hasMany('App\IndividualStatistics', 'gs_id', 'id');
    }

    
}
