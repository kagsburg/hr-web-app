<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    //
    function index(Request $request){
        $request->validate(
            [
                'user'=>'required',
                'password'=>'required|min:5|max:12'
            ]
            );
        print_r( $request ->input());
    }
}
