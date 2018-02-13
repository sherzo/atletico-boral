<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Athlete;
use App\Match;
use App\Time;
use App\Place;
use App\Category;
use App\GeneralStatistics as General;
use App\IndividualStatistics as Individual;
use App\Result;

class MatchesController extends Controller
{
    public function create(Request $request)
    {
        $time = Time::findOrFail($request->input('time'));
        $quantity = $request->input('quantity');

        session()->flash('time', $time);

        $places = Place::all();
        $tournament = $time->tournament()->first();
    	$categories = $time->categories()->get();
    	$categories->load('teams');

    	return view('matches.create',[
    		'tournament' => $tournament,
    		'categories' => $categories,
    		'places' => $places,
            'quantity' => $quantity,
    	]);
    }

    public function store(Request $request)
    {   
        $fallidos = 0;
        $locals = $request->local_id;
        $visitors = $request->visitor_id;
        $stages = $request->stage;
        $places = $request->place;
        $dates = $request->date;
        $hours = $request->hour;

        $time = session('time');

        // Recorro datos del jugador local
        foreach ($locals as $key => $local) {
            
            // Si alguno fue llenado
            if($local OR $visitors[$key] OR $stages[$key] OR 
                $places[$key] OR $dates[$key] OR $hours[$key]){

                   // Verifico que todos esten llenos
                   if($local AND $visitors[$key] AND $stages[$key] AND 
                   $places[$key] AND $dates[$key] AND $hours[$key]){

                    $match = Match::create([
                        'time_id' => $time->id,
                        'local_id' => $local,
                        'visitor_id' => $visitors[$key],
                        'stage' => $stages[$key],
                        'place_id' => $places[$key],
                        'date' => $dates[$key],
                        'hour' => $hours[$key],
                        ]); 

                    }else {

                        // Incremente si lleno alguno, pero no todos en un partido
                        $fallidos++;
                    } 

                }

            
            }
        
        //Aviso que algunos partidos no se guardaron porque no completo los datos
        if($fallidos > 0)
        {

            dd("Intento llenar $fallidos partidos incompletos");
            
        }

        return redirect('tournaments/'. $time->id);
    }

    public function results($match)
    {
        $id = $this->decode($match);
        return $id;
        $match = Match::findOrFail($id);
        $generals = General::all();
        $individuals = Individual::all();
        
        return view('matches.results', [
            'match'       => $match,
            'generals'    => $generals,
            'individuals' => $individuals,
        ]);
    }

    public function load(Request $request, $matche)
    {
        dd($request->all());
        foreach($request->local_avg as $key => $local)
        {
            $athlete = Athlete::findOrFail($key);
            
            foreach($local as $key => $unset)
            {
                if($unset == 0) unset($local[$key]); 
            }
        }
    }

    public function getMatch(Request $request, $id)
    {
        //if($request->ajax()){
            $match = Match::find($id);
            $match->load('time', 'local', 'visitor', 'place', 'result');
            return $match;
        //}else {
          //  return redirect()->back();
       // }
    }

    public function getResult(Request $request, $id)
    {
        $result = Result::where('match_id', $id)->first();
        return $result;
    }

    public function saveResults(Request $request)
    {
        if($request->ajax()){
            $match = Match::find($request->id);
            if($match){            
                $result = Result::firstOrNew([
                    'match_id' => $request->input('id'),
                ]);
                $result->goals_local = $request->input('local_goals');
                $result->goals_visitor = $request->input('visitor_goals');

                $result->save();
            }else {
                dd('Error no existe el partido');
            }

        }else {
            return redirect('/tournaments');            
        }
    }
}
