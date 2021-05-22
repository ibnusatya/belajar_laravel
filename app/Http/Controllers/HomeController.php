<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        return view("home0276");
    }
    public function artikel(){
        return view("artikel0276");
    }
    public function contact(){
        return view("contact0276");
    }
}