<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Vinkla\Hashids\Facades\Hashids;

use App\Activity;

class ActivitiesController extends Controller
{
    /**
     * Create a new function instance.
     *
     * @return void
     */
    protected function method($activity) 
    {
       return Hashids::decode($activity);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::all();
        $number = 0;

        return view('activities.index', [
            'activities' => $activities,
            'number'     => $number,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $position = Activity::create([
            'name' => $request->input('name'),
        ]);

        return redirect('/activities');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($activity)
    {   
        $id = $this->method($activity);
        
        $activity = Activity::findOrFail(array_pop($id));  
    
        return view('activities.edit', [
            'activity' => $activity,
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $activity)
    {
        $id = $this->method($activity);
        
        $activity = Activity::find(array_pop($id)); 
        $activity->name = $request->input('name');
        $activity->save();

        return redirect('/activities');
    }
}
