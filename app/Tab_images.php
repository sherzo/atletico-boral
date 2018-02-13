<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tab_images extends Model
{
	protected $table = 'tabs_images';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = [];

    protected $fillable = [
        'tab_id', 'url',
    ];

    public function tabImages()
    {
    	return $this->belongsTo('App\Tab', 'tab_id');
    }
}
