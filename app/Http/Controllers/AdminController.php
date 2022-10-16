<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $name;
    public function manage(Request $request){

        return view('admin.managesite');
    }
    public function adminHome(){
        return view('admin.homepage');
    }
    public function restaurantPage(){
        return view('admin.restaurantpage');
    }
    public function aboutPage(){
        return view('admin.aboutpage');
    }
    public function contactPage(){
        return view('admin.contactpage');
    }
    public function bookingPage(){
        return view('admin.bookingpage');
    }
}
