<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTournamentRequest;
use App\Place;
use App\Category;
use App\Tournament;
use App\Time;
use App\Type;
use Alert;

class TournamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tournaments = Tournament::all();
        $categories = Category::all()->pluck('category', 'id');
        $inProgress = Time::where('in_progress', true)->get();

        return view('tournaments.index', [
            'tournaments' => $tournaments,
            'inProgress'  => $inProgress,
            'categories'  => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $places = Place::all()->pluck('place', 'id');
        $types = Type::all()->pluck('name', 'id');
        $categories = Category::all()->pluck('category', 'id');

        return view('tournaments.create', [
            'categories' => $categories,
            'places'     => $places,
            'types'      => $types,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTournamentRequest $request)
    {   
        $organizer = $request->input('anfitrion') ? 'CLUB ATLETICO BORAL' : $request->input('organizer');

        $anfitrion = $request->input('anfitrion') ? 1 : 0;

        $tournament = Tournament::create([
            'name' => $request->input('name'),
            'organizer' => $organizer,
            'category_id' => $request->input('type'),
            'anfitrion' => $anfitrion,
        ]);

        $time = Time::create([
            'tournament_id' => $tournament->id,
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'in_progress' => true,
        ]);

        $time->categories()->attach($request->categories);

        alert()->success('Enhorabuena', 'Nuevo torneo creado exitosamente...');

        return redirect('/tournaments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       
        $time = Time::findOrFail($id);

        $tournament = $time->tournament()->first();

        $time->load('categories');

        $matches = $time->matches()->get();

        $matches->load('local', 'visitor');

        return view('tournaments.show', [
            'time' => $time,
            'tournament' => $tournament,
            'matches' => $matches,
        ]);
    }

    public function start(Request $request)
    {
        $time = Time::create([
            'tournament_id' => $request->input('tournament_id'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'in_progress' => true,
        ]);

        $time->categories()->attach($request->categories);

        alert()->success('Perfecto', 'Inicio del torneo exitoso...');

        return redirect('/tournaments');
    }

    public function list(Tournament $tournament)
    {
        $times = $tournament->times()->get();

        return view('tournaments.list',[
            'tournament' => $tournament,
            'times' => $times,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
