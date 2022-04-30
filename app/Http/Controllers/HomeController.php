<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $employeeCount = DB::table('employees')->count();
            // dd($employeeCount); die;
            $departments = DB::table('department')->count();
              $leave = DB::table('employeeleave')->count();
            //$countries = DB::table('country')->count();
           // $countries = DB::table('country')->count();

        return view('home', ['employeeCount' => $employeeCount,'leave'=>$leave ,'departments' => $departments]);
       
    }
}
