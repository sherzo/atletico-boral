<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    protected $table = 'individual_positions';

    protected $guarded = [];

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	protected $fillable = [
        'gp_id', 'position',
    ];

    public function general()
    {
        return $this->belongsTo('App\General', 'gp_id');
    }
}
