<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fristController extends Controller
{
    //
    function show(){
        // echo "cat show";
        return view('index');
    }
}
