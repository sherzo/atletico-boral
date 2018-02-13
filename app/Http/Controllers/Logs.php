<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\History;

trait Logs 
{
    public function logCreate($module, $name, $user)
    {
    	$history = new History();
    	$history->location = \Request::ip();
    	$history->action = 'CREATE';
    	$history->details = 'INSERCIÓN EN MODULO '.$module.' CON EL NOMBRE CORRESPONDIENTE A ['.$name.'].';
    	$history->user = $user;

    	return $history->save();
    }

    public function logRead($module, $name, $user)
    {
    	$history = new History();
    	$history->location = \Request::ip();
    	$history->action = 'READ';
    	$history->details = 'LECTURA EN MODULO '.$module.' CON EL NOMBRE CORRESPONDIENTE A ['.$name.'].';
    	$history->user = $user;
    	
    	return $history->save();
    }

    public function logUpdate($module, $name, $user)
    {
    	$history = new History();
    	$history->location = \Request::ip();
    	$history->action = 'UPDATE';
    	$history->details = 'MODIFICACIÓN EN MODULO '.$module.' CON EL NOMBRE CORRESPONDIENTE A ['.$name.'].';
    	$history->user = $user;
    	
    	return $history->save();
    }

    public function logDelete($module, $name, $user)
    {
    	$history = new History();
    	$history->location = \Request::ip();
    	$history->action = 'DELETE';
    	$history->details = 'ELIMINACIÓN EN MODULO '.$module.' CON EL NOMBRE CORRESPONDIENTE A ['.$name.'].';
    	$history->user = $user;
    	
    	return $history->save();
    }
}
