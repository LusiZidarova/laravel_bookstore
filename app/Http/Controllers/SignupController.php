<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index(){
        //echo 'this is signup controller ';
        return view('signup',['test'=>'this is signup controller']);
    }
}
