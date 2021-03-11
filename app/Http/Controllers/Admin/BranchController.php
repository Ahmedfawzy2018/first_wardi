<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Branches;

use Datatables;
use Illuminate\Support\Facades\Input;
use Validator;


class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //*** JSON Request
    public function datatables()
    {
         $datas = Branches::orderBy('id','desc')->get();
         //--- Integrating This Collection Into Datatables
         return Datatables::of($datas)
                            ->addColumn('action', function(Branches $data) {
                                return '<div class="action-list"><a data-href="' . route('admin-branches-edit',$data->id) . '" class="edit" data-toggle="modal" data-target="#modal1"> <i class="fas fa-edit"></i>Edit</a><a href="javascript:;" data-href="' . route('admin-branches-delete',$data->id) . '" data-toggle="modal" data-target="#confirm-delete" class="delete"><i class="fas fa-trash-alt"></i></a></div>';
                            }) 
                            ->rawColumns(['action'])
                            ->toJson(); //--- Returning Json Data To Client Side
    }

    public function index()
    {
        return view('admin.branches.index');
    }

    //*** GET Request
    public function create()
    {
        return view('admin.branches.create');
    }


    //*** POST Request
    public function store(Request $request)
    {
        //--- Validation Section
        $rules = [
            'name_en' => 'string',
            'name_ar' => 'string',
                 ];
        $customs = [
            'name_en.required' => 'Name EN is Invalid.',
            'name_ar.required' => 'Name AR is Invalid.',
                   ];
        $validator = Validator::make(Input::all(), $rules, $customs);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends

        //--- Logic Section
        $data = new Branches();
        $input = $request->all();
      
        $data->fill($input)->save();
        //--- Logic Section Ends

        //--- Redirect Section
        $msg = 'New Data Added Successfully.';
        return response()->json($msg);
        //--- Redirect Section Ends
    }


    public function edit($id)
    {
        $data = Branches::findOrFail($id);
        return view('admin.branches.edit',compact('data'));
    }

    //*** POST Request
    public function update(Request $request, $id)
    {
        $rules = [
            'name_en' => 'string',
            'name_ar' => 'string',
                 ];
        $customs = [
            'name_en.required' => 'Name EN is Invalid.',
            'name_ar.required' => 'Name AR is Invalid.',
                   ];
        $validator = Validator::make(Input::all(), $rules, $customs);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        //--- Logic Section
        $data = Branches::findOrFail($id);
        $input = $request->all();
            

            
        $data->update($input);
        //--- Logic Section Ends

        //--- Redirect Section
        $msg = 'Data Updated Successfully.';
        return response()->json($msg);
        //--- Redirect Section Ends
    }

 

    //*** GET Request Delete
    public function destroy($id)
    {
        $data = Branches::findOrFail($id);

        $data->delete();
        //--- Redirect Section
        $msg = 'Data Deleted Successfully.';
        return response()->json($msg);
        //--- Redirect Section Ends
    }


}
