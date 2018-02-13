<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Tab;
use App\Tab_images;
use App\History;

class TabsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabs = Tab::all();
        $number = 0;

        $tabs->load('imagesUpload');

        return view('tabs.index', [
            'tabs'   => $tabs,
            'number' => $number,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tab)
    {
        $id = $this->decode($tab);
        $tab = Tab::find($id);
        $tab->load('imagesUpload');

        return view('tabs.show', [
            'tab' => $tab,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tab)
    {
        $id = $this->decode($tab);
        $tab = Tab::find($id);

        return view('tabs.edit', [
            'tab' => $tab,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tab)
    {
        $id = $this->decode($tab);
        $url = is_null($request->input('url')) ? '' : $url = $request->input('url');

        $tab = Tab::findOrFail($id);
        $tab->url = $url;
        $tab->content = $request->input('content');
        $tab->save();

        $logs = $this->logUpdate('PESTAÑA', $tab->title, \Auth::user()->id);

        return redirect('/tabs');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function putUpload(Request $request, $tab)
    {
        $id = $this->decode($tab);
        $tab = Tab::findOrFail($id);

        $maxFiles = count($tab->imagesUpload);

        if ($maxFiles == 4)
        {
            return \Response::json('Error!', 500);

        } else {

            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $request->file('file')->storeAs('/public/tabs', $name);

            $image = new Tab_images(['url' => $name]);
            $tab->imagesUpload()->save($image);
        }
    }

    /**
     * Upload the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUpload(Request $request, $tab)
    {
        $encode = $tab;
        $id = $this->decode($tab);

        $tab = Tab::findOrFail($id);
        $tab->load('imagesUpload');

        $view = view('tabs.partials.images', [
            'tab'    => $tab,
            'encode' => $encode,
        ]);

        if($request->ajax())
        {
            $sections = $view->renderSections();
            return \Response::json($sections['images']);

        } else {

            return $view;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  var  $url
     * @return \Illuminate\Http\Response
     */
    public function destroy($url)
    {
        $image = Tab_images::where('url', $url)->delete();
        $path = public_path().'/storage/tabs/'.$url;

        \File::Delete($path);

        return ($image) ? \Response::json('Ok!', 200) : \Response::json('Error!', 500);
    }
}
