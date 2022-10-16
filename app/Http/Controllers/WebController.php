<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('front.home');
    }
    public function menus(){
        return view('front.menus');
    }
    public function restaurant(){
        return view('front.restaurants');
    }
    public function contact(){
        return view('front.contact');
    }
    public function about(){
        return view('front.about');
    }
    public function booking(){
        return view('front.booking');
    }



}
