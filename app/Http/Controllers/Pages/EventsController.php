<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Activity;
use App\Event;
use App\Event_images;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $number = 0;

        return view('events.index', [
            'events' => $events,
            'number' => $number,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activities = Activity::all();

        return view('events.create', [
            'activities' => $activities,
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
        $url = is_null($request->input('url')) ? '' : $request->input('url');
 
        $event = Event::create([
            'activity_id' => $request->input('activity_id'),
            'url'         => $url,
            'title'       => $request->input('title'),
            'date'        => $request->input('date'),
            'content'     => $request->input('content'),
        ]);

        return redirect('/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($event)
    {
        $id = $this->decode($event);
        $events = Event::find($id);
        $events->load('imagesUpload');

        return view('events.show', [
            'events' => $events,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($event)
    {
        $id = $this->decode($event);
        $events = Event::findOrFail($id);
        $activities = Activity::all();

        return view('events.edit', [
            'events'     => $events,
            'activities' => $activities,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $event)
    {
        $id = $this->decode($event);
        $events = Event::find($id);
        
        $url = is_null($request->input('url')) ? '' : $request->input('url');   

        $events->activity_id = $request->input('activity_id');
        $events->url = $url;
        $events->title = $request->input('title');
        $events->date = $request->input('date');
        $events->content = $request->input('content');
        $events->save();

        return redirect('/events');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $event
     * @return \Illuminate\Http\Response
     */
    public function putUpload(Request $request, $event)
    {
        $id = $this->decode($event);
        $events = Event::findOrFail($id); 

        $maxFiles = count($events->imagesUpload);

        if ($maxFiles == 4) 
        {
            return redirect()->back();

        } else {

            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $request->file('file')->storeAs('/public/events', $name);

            $image = new Event_images(['url' => $name]);
            $events->imagesUpload()->save($image);
        }
    }

    /**
     * Upload the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUpload($event)
    {
        $id = $this->decode($event);
        $events = Event::findOrFail($id);
        $events->load('imagesUpload');

        return view('events.upload', [
            'events' => $events,
        ]);
    }
}
