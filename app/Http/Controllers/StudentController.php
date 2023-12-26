<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    protected function dashboard(){
        return view('backend.student.index');
    }
}
