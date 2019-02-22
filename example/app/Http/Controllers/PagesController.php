<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Secure Project Management Tool';
        return view('pages.index',compact('title'));
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        $data=array(
            'title'=> 'Services',
            'services'=> ['Project List','Team Members','My Project']

        );
        return view('pages.services')-> with ($data);
    }

}
