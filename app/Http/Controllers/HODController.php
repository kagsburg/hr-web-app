<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HODController extends Controller
{
    //
      public function index(SupervisorDataTable $DataTable)
    {
    	

        return $DataTable->render('Supervisor.home');
    }
}
