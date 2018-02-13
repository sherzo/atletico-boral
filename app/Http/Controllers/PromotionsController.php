<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;
use App\History;

class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::all();

        return view('promotions.index', [
                'promotions' => $promotions,
            ]);
    }

    public function status(Promotion $promotion, $status)
    {
        $promotion->status = $status;

        $promotion->save();

        return $promotion;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $id = $this->decode($id);
        $promotion = Promotion::findOrFail($id);

        return view('promotions.edit', [
                'promotion' => $promotion,
            ]);
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
        $id = $this->decode($id);
        $promotion = Promotion::find($id);

        $promotion->title = $request->input('title');
        $promotion->promotion = $request->input('promotion');
        $promotion->content = $request->input('content');
        $promotion->save();

        $history = new History();
        $history->location = '';
        $history->action = 'UPDATE';
        $history->details = 'MODULO DE PROMOCIONES CON EL NOMBRE CORRESPONDIENTE A '.$promotion->title.'.';
        $history->user = $user = \Auth::user()->id;
        $history->save();

        return redirect('/promotions');
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
