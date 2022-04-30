<?php

namespace App\Http\Controllers;

use Flash;
use Illuminate\Http\Request;
use App\Repositories\EmployeeLeaveRepository;
use DB;
use Auth;
use App\Notifications\LeaveReminder;
use App\DataTables\EmployeeleaveDataTable;
use App\EmployeeLeave;
use App\User;
class employeeleaveController extends Controller
{
	/** @var  Disciplainary_statusRepository */
    private $EmployeeLeaveRepository;

    public function __construct(EmployeeLeaveRepository $EmployeeleaveRepo)
    {
        $this->employeeleave  = new employeeleave ;

        $this->EmployeeLeaveRepository = $EmployeeleaveRepo;
    }

    //
    public function index( EmployeeleaveDataTable $employeeleaveDataTable){
      $user = Auth::user();
        $user_id = Auth::user()->emp_pin;
        $user_details = User::join('Employees','Employees.emp_pin','=','users.emp_pin')
                        // ->join('department','department.id','=','users.')
                        // ->join('skills','skills.employee_id','=','users.id')
                        ->select('Employees.Department_id','Employees.Division_id',
                        
                                   'users.*','users.id as user_id')
                        ->where('users.emp_pin',$user_id)
                        ->first();
                        $userdepafrtid= DB::table('users')->join('Employees','Employees.emp_pin','=','users.emp_pin')
                       
                        ->select('Employees.Department_id')
                        ->where('users.emp_pin',$user_id)->first();
                       	
                        $userdepartment = DB::table('Department')->select('name')->where('id',$userdepafrtid->Department_id)->first();
        //dd($userdepartment);

        $default_days= 30;
        $user_id = Auth::user()->emp_pin;
        $daystaken= DB::table('employeeleave')->select('days_taken')->where('emp_pin',$user_id)->SUM('days_taken');
        $remainingLeaveDays=$default_days-$daystaken;
                              return $employeeleaveDataTable->render('EmployeeLeave.index',compact('userdepartment','user_details','daystaken','remainingLeaveDays','userdepafrtid','user_id'));

    }
    public function store(Request $request){

    	$input = $request->all();
//dd($input);
         $employeeleave = $this->EmployeeLeaveRepository->create($input);
         //User::find(1)->notify( new LeaveReminder); to use over internet but it works.

        Flash::success('Employee Leave applied for successfully.');

        return redirect(route('employeeleave.index'));
    }

    public function approval($id){
        $leave = $this->EmployeeLeaveRepository->find($id);

        if (empty($leave)) {
            Flash::error('Leave Records not found');

            return redirect(route('EmployeeLeave.index'));
        }

        return view('EmployeeLeave.approval')->with('leave', $leave);

    }
    public function update($id, Request $request)
    {
        $empleave = $this->EmployeeLeaveRepository->find($id);

        if (empty($empleave)) {
            Flash::error('Leave Records not found');

            return redirect(route('employeeleave.index'));
        }

        $contracts = $this->EmployeeLeaveRepository->update($request->all(), $id);

        Flash::success('Employee Leave updated successfully.');

        return redirect(route('employeeleave.index'));
    }
}
