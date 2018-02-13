<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\History;

class HistoryController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$history = History::all()->reverse('id');
    	$number = 0;

    	return view('history.index', [
    		'history' => $history,
    		'number'  => $number,
    	]);
    }
}
