<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;

class FormationController extends Controller
{
 	public function index()
 	{
 		return view('web.formation.index');
 	}

 	public function juvenile()
 	{	
 		$promotion = Promotion::where('page', 'INFANTO-JUVENIL')->first();

 		return view('web.formation.juvenileCategory', [
 				'promotion' => $promotion,
 				'user' => \Auth::user(),
 			]);
 	}

 	public function female()
 	{
 		$promotion = Promotion::where('page', 'FEMENINA')->first();
 		return view('web.formation.femaleCategory', [
 				'promotion' => $promotion,
 			]);
 	}

 	public function goalkeeper()
 	{
 		$promotion = Promotion::where('page', 'GUARDAMETA')->first();

 		return view('web.formation.goalkeeper', [
 				'promotion' => $promotion,
 			]);
 	}

 	public function vacations()
 	{
 		$promotion = Promotion::where('page', 'VACACIONAL')->first();

 		return view('web.formation.vacations', [
 				'promotion' => $promotion,
 			]);
 	}

 	public function adults()
 	{
 		$promotion = Promotion::where('page', 'ADULTO')->first();

 		return view('web.formation.adults', [
 				'promotion' => $promotion,
 			]);
 	}

 	public function tournaments()
 	{
 		return view('web.formation.tournaments');
 	}

 	public function scholarships()
 	{
 		return view('web.formation.scholarships');
 	}

 	public function tryouts()
 	{
 		return view('web.formation.tryouts');
 	}

 	private function currentUser()
 	{	
 		$user = \Auth::user();
 		return $user;
 	}

}
