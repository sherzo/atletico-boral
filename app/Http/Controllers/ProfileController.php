<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
    	$user = User::findOrFail(\Auth::user()->id);

    	return view('profile.index', [
    		'user' => $user
    	]);
    }
}
