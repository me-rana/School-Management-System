<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    //Role Management System---------------------------------------------------------->
    protected function mypanel(){
        if(Auth::user()->usertype == 4){
            return redirect()->route('dashboard');
        }
        else if (Auth::user()->usertype == 3) {
            return redirect()->route('dashboard');
        }
        else if (Auth::user()->usertype == 2) {
            return redirect()->route('dashboard');
        }
        else {
            return redirect()->route('dashboard');
        }
    }
    //Frontend Task are executed below----------------------------------------------->
    
    protected function home(){
        return view('frontend.index');
    }

}
