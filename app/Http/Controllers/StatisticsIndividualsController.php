<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IndividualStatistics as Individual;
use App\GeneralStatistics as General;

class StatisticsIndividualsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $individuals = Individual::all()->reverse('id');
        $number = 0;

        return view('statistics.individuals.index', [
            'individuals' => $individuals,
            'number'      => $number
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generals = General::all();

        return view('statistics.individuals.create', [
            'generals' => $generals,
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
        $individual = Individual::create([
            'gs_id'  => $request->input('gs_id'),
            'action' => $request->input('action'),
        ]);

        $logs = $this->logCreate('ESTADÍSTICA', $individual->action, \Auth::user()->id);

        alert()->success('Enhorabuena', 'Se ha creado la estadística correctamente...');

        return redirect('/statistics/individuals');
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
    public function edit($individual)
    {
        $id = $this->decode($individual);

        $individual = Individual::findOrFail($id);
        $generals = General::all();

        return view('statistics.individuals.edit', [
            'individual' => $individual,
            'generals'   => $generals,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $individual)
    {
        $id = $this->decode($individual);

        $individual = Individual::find($id);
        $individual->action = $request->input('action');
        $individual->gs_id  = $request->input('gs_id');
        $individual->save();

        $logs = $this->logUpdate('ESTADÍSTICA', $individual->action, \Auth::user()->id);

        alert()->success('Enhorabuena', 'Se ha actualizado la estadística correctamente...');

        return redirect('statistics/individuals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $individual)
    {
        $individual = Individual::find($request->id);
        $individual->delete();

        $logs = $this->logDelete('ESTADÍSTICA', $individual->action, \Auth::user()->id);

        alert()->success('Enhorabuena', 'Se ha eliminado la estadística correctamente...');

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $status
     * @return \Illuminate\Http\Response
     */
    public function status(Individual $statistic, $status)
    {
        $statistic->status = $status;

        $statistic->save();

        return $statistic;
    }
}
