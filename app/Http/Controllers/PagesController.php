<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome Page";
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = "About US";
        return view('pages.about')->with('title',$title);;
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['WEB','DATABASE','SEO']
        );
        return view('pages.services')->with($data);
    }
}
