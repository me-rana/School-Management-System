<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    protected function dashboard(){
        return view('backend.admin.index');
    }
}
