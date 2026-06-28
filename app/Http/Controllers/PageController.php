<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $name = "Amir Raza";
        $email = "amir@gmail.com";
        return view('home',compact('name','email'));
    }

    public function about(){

        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function faq(){
        return view('faq');
    }
}
