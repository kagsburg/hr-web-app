<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;
use DB;
class superAdminController extends Controller
{
    //
    public function index()
    {
    	$employeeCount = DB::table('Employees')->count();
            // dd($employeeCount); die;
            $departments = DB::table('Department')->count();
              $leave = DB::table('employeeleave')->count();
            //$countries = DB::table('country')->count();
           // $countries = DB::table('country')->count();

        return view('superAdmin.home',['employeeCount' => $employeeCount,'leave'=>$leave ,'departments' => $departments]);
    }
}
