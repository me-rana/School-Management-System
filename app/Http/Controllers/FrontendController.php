<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    //Role Management System---------------------------------------------------------->
    public function mypanel(){
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

    //Fontend Support files
    public function support(){
        $info_data = ['address' => 'ঢাকা-১২১৬, বাংলাদেশ','phone' => '+8801521380065', 'email' => 'contact@ranasvc.com'];
        $courses_data = ['course_list' => 'কোর্সসমূহ', 'course1' => 'স্নাতক', 'course2' => 'ডিপ্লোমা', 'course3' => 'মাস্টার্স' ];
        $datas = compact('info_data', 'courses_data');
        return $datas;
    }
    //Frontend Task are executed below----------------------------------------------->

    
    public function home(){
        $support = $this->support();
        return view('frontend.index')->with($support);
    }

    public function about(){
        $support = $this->support();
        return view('frontend.about')->with($support);
    }

    public function contact(){
        $support = $this->support();
        return view('frontend.contact')->with($support);
    }

}
