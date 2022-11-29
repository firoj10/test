<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catController extends Controller
{
    //
    function show(){
        // echo "show";
        return view('admin.cat');
    }

    function insert(Request $req){
        $cat_name = $req->cat_name;
        echo  $cat_name;
        return view ('admin.cat',compact('cat_name'));
    }

    function edit(){
        echo "edit";
    }
} 
