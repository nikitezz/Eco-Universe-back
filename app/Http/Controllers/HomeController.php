<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        return view('one.index');
    }
    public function home(){
        return view('two.index');
    }
    public function climate(){
        return view('climate.index');
    }
    public function water(){
        return view('water.index');
    }
    public function air(){
        return view('air.index');
    }
    public function biodiversity(){
        return view('biodiversity.index');
    }
    public function resources(){
        return view('resources.index');
    }
    public function thesoil(){
        return view('thesoil.index');
    }
}
