<?php

namespace App\Http\Controllers;

use App\DataTables\MedicalinsuranceDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMedicalinsuranceRequest;
use App\Http\Requests\UpdateMedicalinsuranceRequest;
use App\Repositories\MedicalinsuranceRepository;
use Flash;
use App\Models\Employees;
use App\Http\Controllers\AppBaseController;
use Response;

class MedicalinsuranceController extends AppBaseController
{
    /** @var  MedicalinsuranceRepository */
    private $medicalinsuranceRepository;

    public function __construct(MedicalinsuranceRepository $medicalinsuranceRepo)
    {
        $this->medicalinsuranceRepository = $medicalinsuranceRepo;
    }

    /**
     * Display a listing of the Medicalinsurance.
     *
     * @param MedicalinsuranceDataTable $medicalinsuranceDataTable
     * @return Response
     */
    public function index(MedicalinsuranceDataTable $medicalinsuranceDataTable)
    {
        $empfname = Employees::pluck('FirstName','emp_pin');
        return $medicalinsuranceDataTable->render('medicalinsurances.index',['empfname'=>$empfname]);
    }

    /**
     * Show the form for creating a new Medicalinsurance.
     *
     * @return Response
     */
    public function create()
    {
        return view('medicalinsurances.create');
    }

    /**
     * Store a newly created Medicalinsurance in storage.
     *
     * @param CreateMedicalinsuranceRequest $request
     *
     * @return Response
     */
    public function store(CreateMedicalinsuranceRequest $request)
    {
        $input = $request->all();

        $medicalinsurance = $this->medicalinsuranceRepository->create($input);

        Flash::success('Medicalinsurance saved successfully.');

        return redirect(route('medicalinsurances.index'));
    }

    /**
     * Display the specified Medicalinsurance.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $medicalinsurance = $this->medicalinsuranceRepository->find($id);

        if (empty($medicalinsurance)) {
            Flash::error('Medicalinsurance not found');

            return redirect(route('medicalinsurances.index'));
        }

        return view('medicalinsurances.show')->with('medicalinsurance', $medicalinsurance);
    }

    /**
     * Show the form for editing the specified Medicalinsurance.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $medicalinsurance = $this->medicalinsuranceRepository->find($id);
         $empfname = Employees::pluck('FirstName','emp_pin');

        if (empty($medicalinsurance)) {
            Flash::error('Medicalinsurance not found');

            return redirect(route('medicalinsurances.index'));
        }

        return view('medicalinsurances.edit')->with('medicalinsurance', $medicalinsurance)->with('empfname',$empfname);
    }

    /**
     * Update the specified Medicalinsurance in storage.
     *
     * @param  int              $id
     * @param UpdateMedicalinsuranceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMedicalinsuranceRequest $request)
    {
        $medicalinsurance = $this->medicalinsuranceRepository->find($id);

        if (empty($medicalinsurance)) {
            Flash::error('Medicalinsurance not found');

            return redirect(route('medicalinsurances.index'));
        }

        $medicalinsurance = $this->medicalinsuranceRepository->update($request->all(), $id);

        Flash::success('Medicalinsurance updated successfully.');

        return redirect(route('medicalinsurances.index'));
    }

    /**
     * Remove the specified Medicalinsurance from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $medicalinsurance = $this->medicalinsuranceRepository->find($id);

        if (empty($medicalinsurance)) {
            Flash::error('Medicalinsurance not found');

            return redirect(route('medicalinsurances.index'));
        }

        $this->medicalinsuranceRepository->delete($id);

        Flash::success('Medicalinsurance deleted successfully.');

        return redirect(route('medicalinsurances.index'));
    }
}
