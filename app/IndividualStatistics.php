<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Vinkla\Hashids\Facades\Hashids;

class IndividualStatistics extends Model
{
	use SoftDeletes;

    protected $table = 'average_statistics';

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
    
    public function general()
    {
    	return $this->belongsTo('App\GeneralStatistics', 'gs_id');
    }
}
