<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function web(){
        return view('service.web');
    }

    public function app(){
        return view('service.app');
    }

    public function seo(){
        return view('service.seo');
    }
}
