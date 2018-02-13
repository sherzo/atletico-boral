<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tab;

class PagesController extends Controller
{
    public function getAbout()
    {
    	$we = Tab::where('title', 'ACERCA DE')->first();
    	$we->load('imagesUpload');
    	
    	return view('pages.we', [
    		'we' => $we,
    	]);
    }

    public function getHistory()
    {
    	$we = Tab::where('title', 'HISTORIA')->first();
    	$we->load('imagesUpload');
    	
    	return view('pages.we', [
    		'we' => $we,
    	]);
    }

    public function getPhilosophy()
    {
        $we = Tab::where('title', 'FILOSOFÍA')->first();
        $we->load('imagesUpload');
        
        return view('pages.we', [
            'we' => $we,
        ]);
    }

    public function getMission()
    {
        $we = Tab::where('title', 'MISIÓN')->first();
        $we->load('imagesUpload');
        
        return view('pages.we', [
            'we' => $we,
        ]);
    }

    public function getView()
    {
        $we = Tab::where('title', 'VISIÓN')->first();
        $we->load('imagesUpload');
        
        return view('pages.we', [
            'we' => $we,
        ]);
    }

    public function getObjetives()
    {
        $we = Tab::where('title', 'OBJETIVOS')->first();
        $we->load('imagesUpload');
        
        return view('pages.we', [
            'we' => $we,
        ]);
    }

    public function getGoals()
    {
        $we = Tab::where('title', 'METAS')->first();
        $we->load('imagesUpload');
        
        return view('pages.we', [
            'we' => $we,
        ]);
    }

    public function getStaff()
    {
        
    }

    public function getField()
    {
        $we = Tab::where('title', 'INSTALACIONES DEPORTIVAS')->first();
        $we->load('imagesUpload');
        
        return view('pages.we', [
            'we' => $we,
        ]);
    }

    public function getTestimonials()
    {
        # code...
    }
}
