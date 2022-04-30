<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class design extends Controller
{
    //
    public function index($name){
    	
    	$d = "Kisufu Bakery";
    	return view("design",['data'=> $name]);
}
}