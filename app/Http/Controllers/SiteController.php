<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function site(){

      return view('site');
    }
    public function about(){

        return view('about');
      }
    public function category(){

        return view('categories');
    }
    public function tasks(){

        return view('tasks');
    }
    
    public function signup(){

        return view('signup');
    }
    

}
