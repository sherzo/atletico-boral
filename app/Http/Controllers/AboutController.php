<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
    	return view('web.about');
    }

    public function history()
    {
    	return view('web.history');
    }

    public function philosophy()
    {
    	return view('web.philosophy');
    }

    public function mission()
    {
    	return view('web.mission');
    }

    public function vision()
    {
    	return view('web.vision');
    }

    public function objetives()
    {
    	return view('web.objetives');
    }

    public function goals()
    {
    	return view('web.goals');
    }

    public function staff()
    {
    	return view('web.staff');
    }

    public function facilities()
    {
    	return view('web.sportsFacilities');
    }
}
