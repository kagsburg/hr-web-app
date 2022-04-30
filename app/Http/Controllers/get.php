<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class get extends Controller
{
    //
    function index(Request $request){
    	print_r($request -> url());
    }
}
