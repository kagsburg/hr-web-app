<?php

namespace App\Http\Controllers;

use App\DataTables\DivisionsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDivisionsRequest;
use App\Http\Requests\UpdateDivisionsRequest;
use App\Models\Divisions;
use App\Models\Departments;
use App\Repositories\DivisionsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DivisionsController extends AppBaseController
{
    /** @var  DivisionsRepository */
    private $divisionsRepository;

    public function __construct(DivisionsRepository $divisionsRepo)
    {
        $this->divisionsRepository = $divisionsRepo;
    }

    /**
     * Display a listing of the Divisions.
     *
     * @param DivisionsDataTable $divisionsDataTable
     * @return Response
     */
    public function index(DivisionsDataTable $divisionsDataTable)
    {
          $empfname = Departments::pluck('name','id');
            $empname = Departments::pluck('HeadsofDepartments','id');
        return $divisionsDataTable->render('divisions.index',['empfname'=>$empfname,'empname'=>$empname]);
    }

    /**
     * Show the form for creating a new Divisions.
     *
     * @return Response
     */
    public function create()
    {
        return view('divisions.create');
    }

    /**
     * Store a newly created Divisions in storage.
     *
     * @param CreateDivisionsRequest $request
     *
     * @return Response
     */
    public function store(CreateDivisionsRequest $request)
    {
        $input = $request->all();

        $divisions = $this->divisionsRepository->create($input);

        Flash::success('Divisions saved successfully.');

        return redirect(route('divisions.index'));
    }

    /**
     * Display the specified Divisions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $divisions = $this->divisionsRepository->find($id);

        if (empty($divisions)) {
            Flash::error('Divisions not found');

            return redirect(route('divisions.index'));
        }

        return view('divisions.show')->with('divisions', $divisions);
    }

    /**
     * Show the form for editing the specified Divisions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
         $empfname = Departments::pluck('name','id');
          $empname = Departments::pluck('HeadsofDepartments','id');
        $divisions = $this->divisionsRepository->find($id);

        if (empty($divisions)) {
            Flash::error('Divisions not found');

            return redirect(route('divisions.index'));
        }

        return view('divisions.edit')->with('divisions', $divisions)
        ->with('empfname',$empfname)->with('empname',$empname);
    }

    /**
     * Update the specified Divisions in storage.
     *
     * @param  int              $id
     * @param UpdateDivisionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDivisionsRequest $request)
    {
        $divisions = $this->divisionsRepository->find($id);

        if (empty($divisions)) {
            Flash::error('Divisions not found');

            return redirect(route('divisions.index'));
        }

        $divisions = $this->divisionsRepository->update($request->all(), $id);

        Flash::success('Divisions updated successfully.');

        return redirect(route('divisions.index'));
    }

    /**
     * Remove the specified Divisions from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $divisions = $this->divisionsRepository->find($id);

        if (empty($divisions)) {
            Flash::error('Divisions not found');

            return redirect(route('divisions.index'));
        }

        $this->divisionsRepository->delete($id);

        Flash::success('Divisions deleted successfully.');

        return redirect(route('divisions.index'));
    }
     public function findCityWithDepartmentID($id)
    {
        $city = Divisions::where('Department_id',$id)->get();
        return response()->json($city);
    }
}
