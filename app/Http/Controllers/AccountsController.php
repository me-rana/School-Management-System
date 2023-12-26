<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    //
    protected function dashboard(){
        return view('backend.accounts.index');
    }
}
