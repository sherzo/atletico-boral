<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTeamRequest;
use App\Team;
use App\Category;

class TeamsController extends Controller
{
    protected function code()
    {
        $teams = Team::all();
        $code = (count($teams) == 0) ? '1000' : Team::all()->last()->code + 1;

        return $code;
    }

    protected function uri()
    {
        return public_path().'/storage/teams/';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all()->reverse('id');
        $number = 0;
        $teams->load('category');
        
        return view('teams.index', [
            'teams'  => $teams,
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
        $categories = Category::all();
        $code = $this->code();

        return view('teams.create', [
            'categories' => $categories,
            'code'       => $code,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamRequest $request)
    {
        $uri = $this->uri();
        $exist = empty($request->file('url')) ? null : \File::exists($uri.$request->file('url')->getClientOriginalName());

        if(is_null($request->file('url')))
        {
            $name = "image-not-found.png";

        } elseif (isset($exist) AND !$exist) {
            
            $file = $request->file('url');
            $name = $file->getClientOriginalName();
            $request->file('url')->storeAs('/public/teams', $name);

        } else {

            $name = $request->file('url')->getClientOriginalName();
        }

        foreach($request->categories as $key => $category) 
        {
            $team = Team::create([
                'category_id' => $category,
                'code'        => $this->code(),
                'name'        => $request->input('name'),
                'coach'       => $request->input('coach'),
                'shield'      => $name,
            ]);
        }
        
        return redirect('/teams');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($team)
    {
        $id = $this->decode($team);

        $team = Team::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($team)
    {
        $id = $this->decode($team);

        $team = Team::findOrFail($id);
        $categories = Category::all();

        return view('teams.edit', [
            'team'       => $team,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $team)
    {
        $id = $this->decode($team);
        $uri = $this->uri();

        $team = Team::find($id);
        $exist = Team::where([['name', $team->name], ['category_id', $request->input('category')]])->exists();

        if (!empty($request->file('url'))) 
        {
            $file = \File::exists($uri.$request->file('url')->getClientOriginalName());
            $name = $request->file('url')->getClientOriginalName();

            if (!$file) 
            {
                $search = Team::where('shield', $team->shield)->get()->count();

                if ($search == 1) 
                {
                    $delete = \File::Delete($uri.$team->shield);
                }

                $request->file('url')->storeAs('/public/teams', $name);
                $team->shield = $name;
            }
        }

        if ($team->category_id == $request->input('category'))
        {
            $team->name  = $request->input('name');
            $team->coach = $request->input('coach');

        } elseif ($exist) {

            return redirect()->back();

        } else {

            $team->category_id = $request->input('category');
            $team->name        = $request->input('name');
            $team->coach       = $request->input('coach');
        }

        $team->save();

        return redirect('/teams');
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

    public function getTeams($id)
    {
        $teams = Team::where('category_id', $id)->get();

        return $teams;
    }
}
