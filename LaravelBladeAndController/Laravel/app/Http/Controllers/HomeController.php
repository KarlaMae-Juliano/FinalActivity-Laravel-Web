<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function elements(){
        return view('elements');
    }

    public function generic(){
        return view('generic');
    }

    public function index(){
        return view('index');
    }

}
