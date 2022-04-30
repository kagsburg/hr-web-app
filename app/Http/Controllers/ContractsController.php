<?php

namespace App\Http\Controllers;

use App\DataTables\ContractsDataTable;
use App\Http\Requests;
use App\Models\Contract_status;
use App\Models\Employees;
use App\Http\Requests\CreateContractsRequest;
use App\Http\Requests\UpdateContractsRequest;
use App\Repositories\ContractsRepository;
use Flash;
use DB;
use Carbon\Carbon;
use DateTime;   
use App\Http\Controllers\AppBaseController;
use Response;

class ContractsController extends AppBaseController
{
    /** @var  ContractsRepository */
    private $contractsRepository;

    public function __construct(ContractsRepository $contractsRepo)
    {
        $this->contractsRepository = $contractsRepo;
    }
    public function ContractDays(){
       
       
    }

    /**
     * Display a listing of the Contracts.
     *
     * @param ContractsDataTable $contractsDataTable
     * @return Response
     */
    public function index(ContractsDataTable $contractsDataTable)
    {
        $users = DB::table('contracts')->select('endingDate')->get();
        foreach($users as $val){
            $date1 = Carbon::now()->toDateTimeString();
            // $date2 = '2020-08-20';
            $d1=new DateTime($val->endingDate); 
            $d2=new DateTime($date1);                                  
            $Months = $d2->diff($d1); 
            $howeverManyMonths = (($Months->y) * 12) + ($Months->m);
           
            if( $howeverManyMonths== 6){
                return  dd($howeverManyMonths);
            }
            if ($howeverManyMonths== 3){
                return  dd($howeverManyMonths);
            }
        }
        //dd($users);
        
        
        $contractstatus= Contract_status::pluck('status','id');
        $empfname = Employees::pluck('FirstName','emp_pin');
        return $contractsDataTable->render('contracts.index',['contractstatus'=>$contractstatus,'empfname'=>$empfname]);
    }

    /**
     * Show the form for creating a new Contracts.
     *
     * @return Response
     */
    public function create()
    {
        
      
       
        return view('contracts.create');
        // ->with('contractstatus', $contractstatus)->with('empfname',$empfname);
    }

    /**
     * Store a newly created Contracts in storage.
     *
     * @param CreateContractsRequest $request
     *
     * @return Response
     */
    public function store(CreateContractsRequest $request)
    {
        $input = $request->all();

        $contracts = $this->contractsRepository->create($input);

        Flash::success('Contracts saved successfully.');

        return redirect(route('contracts.index'));
    }

    /**
     * Display the specified Contracts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contractstatus= DB::table('contracts')->join('contracts_status','contracts_status.id','=','contracts.status_id')
                                ->select('contracts_status.status');
                                
      
        $contracts = $this->contractsRepository->find($id);

        if (empty($contracts)) {
            Flash::error('Contracts not found');

            return redirect(route('contracts.index'));
        }

        return view('contracts.show')->with('contracts', $contracts)
        ->with('contractstatus', $contractstatus);
    }

    /**
     * Show the form for editing the specified Contracts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contractstatus= Contract_status::pluck('status','id');
        $empfname = Employees::pluck('FirstName','emp_pin');
        
        $contracts = $this->contractsRepository->find($id);

        if (empty($contracts)) {
            Flash::error('Contracts not found');

            return redirect(route('contracts.index'));
        }

        return view('contracts.edit')->with('contracts', $contracts)
        ->with('contractstatus', $contractstatus)
        ->with('empfname',$empfname);
    }

    /**
     * Update the specified Contracts in storage.
     *
     * @param  int              $id
     * @param UpdateContractsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContractsRequest $request)
    {
        $contracts = $this->contractsRepository->find($id);

        if (empty($contracts)) {
            Flash::error('Contracts not found');

            return redirect(route('contracts.index'));
        }

        $contracts = $this->contractsRepository->update($request->all(), $id);

        Flash::success('Contracts updated successfully.');

        return redirect(route('contracts.index'));
    }

    /**
     * Remove the specified Contracts from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contracts = $this->contractsRepository->find($id);

        if (empty($contracts)) {
            Flash::error('Contracts not found');

            return redirect(route('contracts.index'));
        }

        $this->contractsRepository->delete($id);

        Flash::success('Contracts deleted successfully.');

        return redirect(route('contracts.index'));
    }
}
