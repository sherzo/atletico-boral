<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Tab extends Model
{
    protected $guarded = [];

    public function getRouteKey()
    {
		return Hashids::encode($this->getKey());
	  }

    public function imagesUpload()
    {
    	return $this->hasMany('App\Tab_images', 'tab_id', 'id');
    }
}
