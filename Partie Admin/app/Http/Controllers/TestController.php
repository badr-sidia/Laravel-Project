<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view ('view');
    }
    public function about(){
        return view ('about');
    }
  
}
