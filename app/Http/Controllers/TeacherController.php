<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    protected function dashboard(){
        return view('backend.teacher.index');
    }
}
