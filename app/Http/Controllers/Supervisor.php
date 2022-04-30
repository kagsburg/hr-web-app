<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\SupervisorDataTable;
use App\Repositories\EmployeeLeaveRepository;
use App\EmployeeLeave;

class Supervisor extends Controller
{
    //
      public function index(SupervisorDataTable $DataTable)
    {
    	

        return $DataTable->render('Supervisor.home');
    }
}
