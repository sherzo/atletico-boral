<?php

namespace App\Http\Controllers;

use Vinkla\Hashids\Facades\Hashids as Hashids;

trait Encrypt 
{
    public function decode($hash)
    {
    	$var = Hashids::decode($hash);

    	return array_pop($var);
    }
}
