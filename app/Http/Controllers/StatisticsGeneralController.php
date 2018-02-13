<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GeneralStatistics as General;

class StatisticsGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generals = General::all()->reverse('id');
        $number = 0;

        return view('statistics.index', [
            'generals' => $generals,
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
        return view('statistics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $general = General::create([
            'type' => $request->input('type'),
        ]);

        $logs = $this->logCreate('ESTADÍSTICA', $general->type, \Auth::user()->id);

        alert()->success('Enhorabuena', 'Se ha creado la estadística correctamente...');

        return redirect('/statistics/generals');
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
    public function edit($general)
    {
        $id = $this->decode($general);

        $general = General::findOrFail($id);

        return view('statistics.edit', [
            'general' => $general,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $general)
    {
        $id = $this->decode($general);

        $general = General::find($id);
        $general->type = $request->input('type');
        $general->save();

        $logs = $this->logUpdate('ESTADÍSTICA', $general->type, \Auth::user()->id);

        alert()->success('Enhorabuena', 'Se ha actualizado la estadística correctamente...');
        
        return redirect('statistics/generals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $general)
    {
        $general = General::find($request->id);
        $general->individual()->delete();
        $general->delete();

        $logs = $this->logDelete('ESTADÍSTICA', $general->type, \Auth::user()->id);

        alert()->success('Enhorabuena', 'Se ha eliminado la estadística correctamente...');

        return redirect()->back();
    }
}
