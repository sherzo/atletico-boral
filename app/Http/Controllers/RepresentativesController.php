<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Representative;

class RepresentativesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $representatives = Representative::all()->reverse();

        return view('representatives.index', [
          'representatives' => $representatives,
        ]);
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
        if($request->ajax()){

            $representative = Representative::create([
                'nationality' => $request->input('nationality'),
                'dni' => $request->input('dni'),
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'phone' => $request->input('phone'),
                'movil' => $request->input('movil'),
                'relationship' => $request->input('relationship'),
                'address' => $request->input('address'),
                'user_id' => $request->user()->id,
            ]);

            session(['representative' => $representative]);

            return $representative;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($representative)
    {
          $id = $this->decode($representative);
          dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($representative)
    {
      $id = $this->decode($representative);
      $representative = Representative::findOrFail($id);

      return view('representatives.edit', [
        'representative' => $representative,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $representative)
    {
      $id = $this->decode($representative);

      $representative = Representative::findOrFail($id);
      $representative->name = $request->input('name');
      $representative->surname = $request->input('surname');
      $representative->phone = $request->input('phone');
      $representative->movil = $request->input('movil');
      $representative->address = $request->input('address');

      $representative->save();

      alert()->success('Perfecto', 'Se edito el representante exitosamente...');

      return redirect('/representatives');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    /**
     * Representatives search a representative for request AJAX
     *
     * @param  \Illuminate\Http\Request  $nationality
     * @return \Illuminate\Http\Response JSON
     */

    public function search($nationality, $dni)
    {
        $exists = Representative::where([['nationality', $nationality], ['dni', $dni]])->exists();
        if($exists){
            $representative = Representative::where([['nationality', $nationality], ['dni', $dni]])->first();

            session(['representative' => $representative]);

        }else {
            $representative = '';
        }

        return $representative;
    }
}
