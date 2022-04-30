<?php

namespace App\Http\Controllers;

use App\DataTables\Contract_statusDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateContract_statusRequest;
use App\Http\Requests\UpdateContract_statusRequest;
use App\Repositories\Contract_statusRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Contract_statusController extends AppBaseController
{
    /** @var  Contract_statusRepository */
    private $contractStatusRepository;

    public function __construct(Contract_statusRepository $contractStatusRepo)
    {
        $this->contractStatusRepository = $contractStatusRepo;
    }

    /**
     * Display a listing of the Contract_status.
     *
     * @param Contract_statusDataTable $contractStatusDataTable
     * @return Response
     */
    public function index(Contract_statusDataTable $contractStatusDataTable)
    {
        return $contractStatusDataTable->render('contract_statuses.index');
    }

    /**
     * Show the form for creating a new Contract_status.
     *
     * @return Response
     */
    public function create()
    {
        return view('contract_statuses.create');
    }

    /**
     * Store a newly created Contract_status in storage.
     *
     * @param CreateContract_statusRequest $request
     *
     * @return Response
     */
    public function store(CreateContract_statusRequest $request)
    {
        $input = $request->all();

        $contractStatus = $this->contractStatusRepository->create($input);

        Flash::success('Contract Status saved successfully.');

        return redirect(route('contractStatuses.index'));
    }

    /**
     * Display the specified Contract_status.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contractStatus = $this->contractStatusRepository->find($id);

        if (empty($contractStatus)) {
            Flash::error('Contract Status not found');

            return redirect(route('contractStatuses.index'));
        }

        return view('contract_statuses.show')->with('contractStatus', $contractStatus);
    }

    /**
     * Show the form for editing the specified Contract_status.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contractStatus = $this->contractStatusRepository->find($id);

        if (empty($contractStatus)) {
            Flash::error('Contract Status not found');

            return redirect(route('contractStatuses.index'));
        }

        return view('contract_statuses.edit')->with('contractStatus', $contractStatus);
    }

    /**
     * Update the specified Contract_status in storage.
     *
     * @param  int              $id
     * @param UpdateContract_statusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContract_statusRequest $request)
    {
        $contractStatus = $this->contractStatusRepository->find($id);

        if (empty($contractStatus)) {
            Flash::error('Contract Status not found');

            return redirect(route('contractStatuses.index'));
        }

        $contractStatus = $this->contractStatusRepository->update($request->all(), $id);

        Flash::success('Contract Status updated successfully.');

        return redirect(route('contractStatuses.index'));
    }

    /**
     * Remove the specified Contract_status from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contractStatus = $this->contractStatusRepository->find($id);

        if (empty($contractStatus)) {
            Flash::error('Contract Status not found');

            return redirect(route('contractStatuses.index'));
        }

        $this->contractStatusRepository->delete($id);

        Flash::success('Contract Status deleted successfully.');

        return redirect(route('contractStatuses.index'));
    }
}
