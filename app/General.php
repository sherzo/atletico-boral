<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $table = 'general_positions';

    protected $guarded = [];

    public $timestamps = false;

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	protected $fillable = [
        'function',
    ];

    public function position()
    {
        return $this->hasMany('App\Individual', 'gp_id', 'id');
    }
}
