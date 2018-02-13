<?php

namespace App\Http\Controllers\Athlete;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Vinkla\Hashids\Facades\Hashids;
use App\Athlete;
use App\General;
use App\About;
use App\Category;

class AthletesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $athletes = Athlete::where('registered', true)->orderBy('id', 'DESC')->get();

        return view('athlete.index', ['athletes' => $athletes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = General::all();
        $categories = Category::all();
        $disabled = true;

        return view('athlete.create', [
            'positions' => $positions,
            'categories' => $categories,
            'disabled' => $disabled,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $representative = session('representative');
        
        $age = $this->age($request->input('birthdate'));

        if (empty(request('url')))
        {
            $name = 'nofoto.png';

        } else {

            $file = $request->file('url');
            $name = $file->getClientOriginalName();
            $request->file('url')->storeAs('/public/athletes', $name);
        }

        $athlete = Athlete::create([
            'nationality'       => $request->input('nationality'),
            'dni'               => $request->input('dni'),
            'url'               => $name,
            'name'              => $request->input('name'),
            'surname'           => $request->input('surname'),
            'from'              => $request->input('from'),
            'birthdate'         => $request->input('birthdate'),
            'age'               => $age,
            'height'            => $request->input('height'),
            'weight'            => $request->input('weight'),
            'position_id'       => $request->input('position_id'),
            'representative_id' => $representative->id,
        ]);

        $about = About::create([
            'athlete_id'           => $athlete->id,
            'foot'                 => $request->input('foot'),
            'age'                  => $request->input('age'),
            'sports'               => $request->input('sports'),
            'soccer'               => $request->input('soccer'),
            'favorites'            => $request->input('favorites'),
            'goalkeeper'           => $request->input('goalkeeper'),
            'fanA'                 => $request->input('fanA'),
            'fanI'                 => $request->input('fanI'),
            'country_team'         => $request->input('country_team'),
            'profession'           => $request->input('profession'),
            'occupation'           => $request->input('occupation'),
            'description_football' => $request->input('description_football'),
            'description_like'     => $request->input('description_like'),
            'nickname'             => $request->input('nickname'),
        ]);

        $athlete->teams()->attach($request->team_id);

        alert()->success('Perfecto', 'Registro del atleta exitoso...');

        return redirect('/athlete');
    }

    /**
     * Age a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function age($birthdate)
    {
        $date  = explode('-', $birthdate);

        return $years = (date('m') >= $date[1]) ? $years = date('Y') - $date[0] : $years = (date('Y')-1) - $date[0];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($athlete)
    {
        $id = $this->decode($athlete);
        return Athlete::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($athlete)
    {  
        $positions = General::all();
        $categories = Category::all();
        
        $id = $this->decode($athlete);
        $athlete = Athlete::findOrFail($id);

        $disabled = true;
        return view('athlete.edit', [
          'athlete' => $athlete,
          'positions' => $positions,
          'categories' => $categories,
          'disabled' => $disabled,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $athlete)
    {
        $id = $this->decode($athlete);
        $athlete = Athlete::find($id);
        $age = $this->age($request->input('birthdate'));
    
        if (empty(request('url')))
        {
            $name = 'nofoto.png';
        } else {
            $image = $request->file('url');
            $name = $image->store('athletes', 'public');
        }

        $athlete->name = $request->input('name');
        $athlete->surname = $request->input('surname');
        $athlete->birthdate = $request->input('birthdate');
        $athlete->height = $request->input('height');
        $athlete->weight = $request->input('weight');
        $athlete->from = $request->input('from');
        $athlete->age = $age;
        $athlete->url = $name;

        if($request->position_id){
            $athlete->position_id = $request->input('position_id');
        }

        if($request->team_id){
            $athlete->teams()->attach($request->input('team_id'));
        }
        
        // Si viene de procesar la solicitud 
        if(session()->has('application')){
            $application = session('application');
            $application->status = false;
            $application->save();
            
            $athlete->registered = true;
        }

        $athlete->save();

        $about = $athlete->athlete()->first();

        if(!$about){
            $about = new About();
            $about->athlete_id = $athlete->id;
        }

        $about->goalkeeper = $request->input('goalkeeper');
        $about->foot = $request->input('foot');
        $about->age = $request->input('age');
        $about->sports = $request->input('sports');
        $about->soccer = $request->input('soccer');
        $about->favorites = $request->input('favorites');
        $about->fanA = $request->input('fanA');
        $about->fanI = $request->input('fanI');        
        $about->country_team = $request->input('country_team');
        $about->nickname = $request->input('nickname');
        $about->profession = $request->input('profession');
        $about->occupation = $request->input('occupation');
        $about->description_like = $request->input('description_like');
        $about->description_football = $request->input('description_football');

        $about->save();

        alert()->success('Perfecto', 'La operación se realizó existoramente');

        return redirect('/athlete');
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
