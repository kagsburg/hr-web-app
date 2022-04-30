<?php

namespace App\Http\Controllers;

use App\DataTables\DisciplainaryDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDisciplainaryRequest;
use App\Http\Requests\UpdateDisciplainaryRequest;
use App\Repositories\DisciplainaryRepository;
use Flash;
use DB;
use App\Models\Disciplainary_status;
use App\Models\Employees;
use App\Http\Controllers\AppBaseController;
use Response;

class DisciplainaryController extends AppBaseController
{
    /** @var  DisciplainaryRepository */
    private $disciplainaryRepository;

    public function __construct(DisciplainaryRepository $disciplainaryRepo)
    {
        $this->disciplainaryRepository = $disciplainaryRepo;
    }

    /**
     * Display a listing of the Disciplainary.
     *
     * @param DisciplainaryDataTable $disciplainaryDataTable
     * @return Response
     */
    public function index(DisciplainaryDataTable $disciplainaryDataTable)
    {
        $disstatus= Disciplainary_status::pluck('status','id');
        $empfname = Employees::pluck('FirstName','emp_pin');
        return $disciplainaryDataTable->render('disciplainaries.index',['empfname'=>$empfname,'disstatus'=> $disstatus]);
    }

    /**
     * Show the form for creating a new Disciplainary.
     *
     * @return Response
     */
    public function create()
    {
        $disstatus= Disciplainary_status::pluck('status','id');
        $empfname = Employees::pluck('FirstName','emp_pin');
        return view('disciplainaries.create')->with('disstatus', $disstatus)->with('empfname',$empfname);
    }

    /**
     * Store a newly created Disciplainary in storage.
     *
     * @param CreateDisciplainaryRequest $request
     *
     * @return Response
     */
    public function store(CreateDisciplainaryRequest $request)
    {
        $input = $request->all();

        $disciplainary = $this->disciplainaryRepository->create($input);

        Flash::success('Disciplainary saved successfully.');

        return redirect(route('disciplainaries.index'));
    }

    /**
     * Display the specified Disciplainary.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $disciplainary = $this->disciplainaryRepository->find($id);
        $empfname = Employees::all()->map->only('FirstName','emp_pin');
        $disstatus= Disciplainary_status::all()->map->only('status','id');
        $contractstatus= DB::table('Disciplainary')->join('Disciplainarystatus','disciplainary.status_id','=','disciplainarystatus.id')
                                ->select('disciplainarystatus.status','disciplainary.status_id');
                        
                                                  //               dd($disciplainary);
//dd($disstatus);
        if (empty($disciplainary)) {
            Flash::error('Disciplainary not found');

            return redirect(route('disciplainaries.index'));
        }

        return view('disciplainaries.show',['disciplainary'=> $disciplainary ,'empfname'=>$empfname ]);
    }

    /**
     * Show the form for editing the specified Disciplainary.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $disstatus= Disciplainary_status::pluck('status','id');
        $empfname = Employees::pluck('FirstName','emp_pin');
        $disciplainary = $this->disciplainaryRepository->find($id);

        if (empty($disciplainary)) {
            Flash::error('Disciplainary not found');

            return redirect(route('disciplainaries.index'));
        }

        return view('disciplainaries.edit')->with('disciplainary', $disciplainary)
        ->with('disstatus', $disstatus)->with('empfname',$empfname);
    }

    /**
     * Update the specified Disciplainary in storage.
     *
     * @param  int              $id
     * @param UpdateDisciplainaryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDisciplainaryRequest $request)
    {
        $disciplainary = $this->disciplainaryRepository->find($id);

        if (empty($disciplainary)) {
            Flash::error('Disciplainary not found');

            return redirect(route('disciplainaries.index'));
        }

        $disciplainary = $this->disciplainaryRepository->update($request->all(), $id);

        Flash::success('Disciplainary updated successfully.');

        return redirect(route('disciplainaries.index'));
    }

    /**
     * Remove the specified Disciplainary from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $disciplainary = $this->disciplainaryRepository->find($id);

        if (empty($disciplainary)) {
            Flash::error('Disciplainary not found');

            return redirect(route('disciplainaries.index'));
        }

        $this->disciplainaryRepository->delete($id);

        Flash::success('Disciplainary deleted successfully.');

        return redirect(route('disciplainaries.index'));
    }
}
