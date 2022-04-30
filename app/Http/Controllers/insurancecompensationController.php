<?php

namespace App\Http\Controllers;

use App\DataTables\insurancecompensationDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateinsurancecompensationRequest;
use App\Http\Requests\UpdateinsurancecompensationRequest;
use App\Repositories\insurancecompensationRepository;
use Flash;
use App\Models\Employees;
use App\Http\Controllers\AppBaseController;
use Response;

class insurancecompensationController extends AppBaseController
{
    /** @var  insurancecompensationRepository */
    private $insurancecompensationRepository;

    public function __construct(insurancecompensationRepository $insurancecompensationRepo)
    {
        $this->insurancecompensationRepository = $insurancecompensationRepo;
    }

    /**
     * Display a listing of the insurancecompensation.
     *
     * @param insurancecompensationDataTable $insurancecompensationDataTable
     * @return Response
     */
    public function index(insurancecompensationDataTable $insurancecompensationDataTable)
    {
         $empfname = Employees::pluck('FirstName','emp_pin');
        return $insurancecompensationDataTable->render('insurancecompensations.index',['empfname'=>$empfname]);
    }

    /**
     * Show the form for creating a new insurancecompensation.
     *
     * @return Response
     */
    public function create()
    {
        return view('insurancecompensations.create');
    }

    /**
     * Store a newly created insurancecompensation in storage.
     *
     * @param CreateinsurancecompensationRequest $request
     *
     * @return Response
     */
    public function store(CreateinsurancecompensationRequest $request)
    {
        $input = $request->all();

        $insurancecompensation = $this->insurancecompensationRepository->create($input);

        Flash::success('Insurancecompensation saved successfully.');

        return redirect(route('insurancecompensations.index'));
    }

    /**
     * Display the specified insurancecompensation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $insurancecompensation = $this->insurancecompensationRepository->find($id);

        if (empty($insurancecompensation)) {
            Flash::error('Insurancecompensation not found');

            return redirect(route('insurancecompensations.index'));
        }

        return view('insurancecompensations.show')->with('insurancecompensation', $insurancecompensation);
    }

    /**
     * Show the form for editing the specified insurancecompensation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $insurancecompensation = $this->insurancecompensationRepository->find($id);
        $empfname = Employees::pluck('FirstName','emp_pin');

        if (empty($insurancecompensation)) {
            Flash::error('Insurancecompensation not found');

            return redirect(route('insurancecompensations.index'));
        }

        return view('insurancecompensations.edit')->with('insurancecompensation', $insurancecompensation)->with('empfname',$empfname);
    }

    /**
     * Update the specified insurancecompensation in storage.
     *
     * @param  int              $id
     * @param UpdateinsurancecompensationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateinsurancecompensationRequest $request)
    {
        $insurancecompensation = $this->insurancecompensationRepository->find($id);

        if (empty($insurancecompensation)) {
            Flash::error('Insurancecompensation not found');

            return redirect(route('insurancecompensations.index'));
        }

        $insurancecompensation = $this->insurancecompensationRepository->update($request->all(), $id);

        Flash::success('Insurancecompensation updated successfully.');

        return redirect(route('insurancecompensations.index'));
    }

    /**
     * Remove the specified insurancecompensation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $insurancecompensation = $this->insurancecompensationRepository->find($id);

        if (empty($insurancecompensation)) {
            Flash::error('Insurancecompensation not found');

            return redirect(route('insurancecompensations.index'));
        }

        $this->insurancecompensationRepository->delete($id);

        Flash::success('Insurancecompensation deleted successfully.');

        return redirect(route('insurancecompensations.index'));
    }
}
