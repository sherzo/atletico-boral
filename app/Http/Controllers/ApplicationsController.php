<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Promotion;
use App\Applicant;
use Faker\Factory;
use App\Notifications\UserApplication;
use App\Representative;
use App\Athlete;
use Auth;
use App\General;
use App\Category;
use Carbon\Carbon;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $watings = Application::where('status', true)->get();
        $process = Application::where('status', false)->get();

        return view('applications.index', [
                'waitings' => $watings,
                'process' => $process,
            ]);
    }

    public function process()
    {
        $applications = Application::where('status', false)->get();

        return view('applications.list',['applications' => $applications]);
    }

    public function waiting()
    {
        $applications = Application::where('status', true)->get();

        return view('applications.list',['applications' => $applications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function application(Promotion $promotion, Request $request)
    {

        $user = $request->user();

        if($user->hasPromotion($promotion)){
            return redirect('/');
        }

        return view('applications.create', [
            'promotion' => $promotion,
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Promotion $promotion, Request $request)
    {
        $user = Auth::user();

        dd($request->all());

        if($user->hasPromotion($promotion)){
            return redirect('/');
        }

        $faker = Factory::create();

        $exists = Athlete::where([['nationality', $request->nationality], ['dni', $request->dnia]])->exists();

        if(!$exists){ // Verifico que el atleta no esta registrado
            $athlete = Athlete::create([
                'dni' => $request->dnia,
                'nationality' => $request->nationality,
                'name' => $request->name,
                'surname' => $request->surname,
                'birthdate' => $request->birth_submit,
                'registered' => false,
                'type' => $promotion->page,
            ]);

            $application = Application::create([
                'code' => $faker->ean8,
                'athlete_id' => $athlete->id,
                'promotion_id' => $promotion->id,
                'user_id' => $user->id,
                'status' => true,
                'other' => !$request->me, // Si no es forMe other true y viceversa
            ]);

            if(!$request->me){
                $representative = session('representative');
                $athlete->representative()->attach($representative->id);
            }

            session()->flash('message', true);

            $user->notify(new UserApplication($application));

            return redirect('/');

        }else{

            session()->flash('exists', true);
            return back();

        }
    }

    /**
     * Me return the current user for request AJAX.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function me(Request $request)
    {
        if($request->ajax()){
            return $request->user();
        }
    }

    /*
     * Method for inscription online GET
    */

    public function inscription()
    {
        $promotion = Promotion::where('page', 'INSCRIPCIÓN')->first();
        $user = Auth::user();

        if($user->hasPromotion($promotion)){
            return redirect('/');
        }

        return view('applications.inscription', ['promotion' => $promotion, 'user' => $user]);
    }

    /*
     * Method for inscription online POST
    */
    public function online(Promotion $promotion, Request $request)
    {
        $user = $request->user();
        $representative = $user->representative()->first();

        if($user->hasPromotion($promotion)){
            return redirect('/');
        }

        $faker = Factory::create();
        $code = $faker->ean8;

        $total = count($request->dni);
        $count = 0;

        foreach ($request->dni as $key => $dni) {

            $exists = Athlete::where([['nationality', $request->nationality[$key]], ['dni', $dni]])->exists();

            dd($exists);
            
            if(!$exists){

	            $athlete = Athlete::create([
	                'dni' => $dni,
	                'nationality' => $request->nationality[$key],
	                'birthdate' => $request->birth[$key],
	                'name' => $request->name[$key],
	                'surname' => $request->surname[$key],
	                'type' => $request->dicipline[$key],
                    'representative_id' => $representative->id,
                    'registered' => false,
	            ]);


	            $application = Application::create([
	                'code' => $code,
	                'user_id' => $user->id,
	                'athlete_id' => $athlete->id,
	                'promotion_id' => $promotion->id,
	                'status' => true,
	                'other' => true,
	            ]);

            }else{

            	$count++;

            }


        }

        if(isset($application)){
        	$user->notify(new UserApplication($application));
        }

        if($count == $total)
        {
        	session()->flash('error', true);
        	return redirect('/inscription');
        }

        session()->flash('message', true);
        return redirect('/');
    }

    public function processApp(Application $application)
    {
        $athlete = $application->athlete;
                
        if($athlete->type == 'INSCRIPCIÓN' || $athlete->type == 'GUARDAMETA' || $athlete->type == 'INFANTO-JUVENIL'){

            session()->flash('application', $application);
            $positions = General::all();
            $categories = Category::all();
            $disabled = true;

            return view('applications.process', [
                'athlete' => $athlete,
                'categories' => $categories,
                'positions' => $positions,
                'disabled' => $disabled,
            ]);

        }else{

            $application->status = false;
            $application->save();

            alert()->success('Perfecto', 'Se ha procesado la solicitud...');

            return redirect('/applications/process');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
