<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function mypanel(){
        if (Auth::user()->usertype == 1){
            return redirect()->route('ড্যাশবোর্ড(এডমিন)');
        }
        else if (Auth::user()->usertype == 2){
            return redirect()->route('ড্যাশবোর্ড(একাউন্টেড)');
        }
        else if (Auth::user()->usertype == 3){
            return redirect()->route('ড্যাশবোর্ড(শিক্ষক)');
        }
        else{
            return redirect()->route('ড্যাশবোর্ড(শিক্ষার্থী)');
        }
    }
}
