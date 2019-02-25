<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = 'Welcome To Larvel';
        return view('pages.index')->with('title' , $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title' , $title);
    }

    public function services(){
        $data = array(
            'title' => 'Service',
            'services' => ['Web Design', 'Proggramming']
        );
        return view('pages.services')->with($data);
    }
}
