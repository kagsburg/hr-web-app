<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDisciplainary_statusRequest;
use App\Http\Requests\UpdateDisciplainary_statusRequest;
use App\Repositories\Disciplainary_statusRepository;
use App\Models\Disciplainary_status ;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use DataTables;
use Validator;

class Disciplainary_statusController extends AppBaseController
 {
    /** @var  Disciplainary_statusRepository */
    private $disciplainaryStatusRepository;

    public function __construct(Disciplainary_statusRepository $disciplainaryStatusRepo)
    {
        $this->Disciplainary_status  = new Disciplainary_status ;

        $this->disciplainaryStatusRepository = $disciplainaryStatusRepo;
    }

    /**
     * Display a listing of the Disciplainary_status.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $disciplainaryStatuses = $this->disciplainaryStatusRepository->all();

        return view('disciplainary_statuses.index')
            ->with('disciplainaryStatuses', $disciplainaryStatuses);
    }

    /**
     * Show the form for creating a new Disciplainary_status.
     *
     * @return Response
     */
    // public function create()
    // {
    //     return view('disciplainary_statuses.create');
    // }

    /**
     * Store a newly created Disciplainary_status in storage.
     *
     * @param CreateDisciplainary_statusRequest $request
     *
     * @return Response
     */
    // public function store(Request $request)

    // {


    //     Disciplainary_status::updateOrCreate(
    //         ['id' => $request->status_id],

    //         ['status' => $request->status, 'createdby' => $request->CreatedBy,'updatedby'=> $request->UpdatedBy]);        

    //             //Flash::success('Disciplainary Status saved successfully.');
    //         //
    //      return response()->json(['success'=>'Disciplainary status saved successfully.']);
    //      return redirect(route('disciplainaryStatuses.index'));

    // }
    public function store(CreateDisciplainary_statusRequest $request)
    {
        $input = $request->all();

        $disciplainaryStatus = $this->disciplainaryStatusRepository->create($input);

        Flash::success('Disciplainary Status saved successfully.');

        return redirect(route('disciplainaryStatuses.index'));
    }

    /**
     * Display the specified Disciplainary_status.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $disciplainaryStatus = $this->disciplainaryStatusRepository->find($id);

        if (empty($disciplainaryStatus)) {
            Flash::error('Disciplainary Status not found');

            return redirect(route('disciplainaryStatuses.index'));
        }

        return view('disciplainary_statuses.show')->with('disciplainaryStatus', $disciplainaryStatus);
    }

    /**
     * Show the form for editing the specified Disciplainary_status.
     *
     * @param int $id
     *
     * @return Response
     */
    
    public function edit($id)
    {
        // $disciplainaryStatus = $this->disciplainaryStatusRepository->find($id);

        // if (empty($disciplainaryStatus)) {
        //     Flash::error('Disciplainary Status not found');

        //     return redirect(route('disciplainaryStatuses.index'));
        // }

        // return view('disciplainary_statuses.edit')->with('disciplainaryStatus', $disciplainaryStatus);
        //$data = $this->disciplainaryStatusRepository->find($id);

       // return response()->json(['html'=>$html]);
        $status = Disciplainary_status::find($id);

        return response()->json($status);
    }

    /**
     * Update the specified Disciplainary_status in storage.
     *
     * @param int $id
     * @param UpdateDisciplainary_statusRequest $request
     *
     * @return Response
     */
    

    /**
     * Remove the specified Disciplainary_status from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        Disciplainary_status::find($id)->delete();
         
        return response()->json(['success'=>'Disciplainary Status deleted successfully']);
        // $disciplainaryStatus = $this->disciplainaryStatusRepository->find($id);

        // if (empty($disciplainaryStatus)) {
        //     Flash::error('Disciplainary Status not found');

        //     return redirect(route('disciplainaryStatuses.index'));
        // }

        // $this->disciplainaryStatusRepository->delete($id);

        // Flash::success('Disciplainary Status deleted successfully.');

        // return redirect(route('disciplainaryStatuses.index'));
    }

    public function disciplainaryStatuses(Request $request)
    {
        if ($request->ajax())
        {
            $users = DB::table('Disciplainarystatus')->whereNull('Disciplainarystatus.deleted_at')->select('*');
        return DataTables::of($users)
        ->addColumn('Action',function($data){
            $button = '<button type="button"  data-id="'.$data->id.'" data-toggle="tooltip"  class="btn btn-default btn-sm editProduct" id="getEditProductData" name="edit"><i class="glyphicon glyphicon-edit"></i></button>';
            $button .= '&nbsp;&nbsp;&nbsp';
            $button .= '<button type="button" data-id="'.$data->id.'" data-toggle="tooltip"  class="btn btn-danger btn-sm deleteProduct" id="getDelete" ><i class="glyphicon glyphicon-trash"></i></button>';
            return $button;
        })
        ->rawColumns(['Action'])
            ->make(true);
        }
        return view('disciplainary_statuses.table');
    }
}
