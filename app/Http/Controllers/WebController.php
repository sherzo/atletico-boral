<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tournament;
use App\Time;

class WebController extends Controller
{
    public function index() 
    {
    	$categories = Category::all();

    	return view('web.results.index', ['categories' => $categories]);
    }

    public function getTournaments(Request $request, Category $category)
    {
    	//if($request->ajax()) {
    		
            $times = $category->times()->get();
            $uniques = $times->unique('tournament_id');
            $times = $uniques->load('tournament');
            return $times;
    	//}
    }

    public function getTimes(Request $request, Category $category, $time)
    {
        $times = $category->times()->where('tournament_id', $time)->get();

        $times->load('tournament');
        return $times;
    }

    public function getMatches(Request $request, Time $time, $category)
    {
        $matches = $time->matches()->get();
        $matches->load('local', 'visitor', 'result');
        $matches = $matches->each(function ($match) {
            $category = 1;
            if($match->local->category->id == $category)
            {
                return $match;
            }
        });
        return $matches;
    }
}
