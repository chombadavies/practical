<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Appointment;
use DB;
use Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image;
Use Session;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='Services';
       return view('backend.services.index',$data); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']='Services';
       return view('backend.services.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  Service $service)
    {


        $data=$request->all();

        $service=Service::create($data);

        if($service){
            Session::flash('success_message', 'service added successfully');
            return redirect()->route('services.index');
        }else {
            return back()->with('error','failed please try again');
        }
       
    
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['page_title']='Services';
        $service=Service::findOrFail($id);
         return view('backend.services.show',$data)->with(compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['page_title']='Services';
        $service=Service::findOrFail($id);
        
        return view('backend.services.edit',$data)->with(compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service=Service::findOrFail($id);
        $service->title=$request->title;
        $service->description=$request->description;
        $service->status=$request->status;
        $service->save();
            Session::flash('success_message', 'service updated successfully');
            return redirect()->route('services.index');      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function fetchServices()
    {
       
        $models = DB::select('SELECT * FROM `services`');
        
        
        // $models = Service::whereNotNull('parent_id')->orderBy('id','asc')->get();
      
        return Datatables::of($models)
           ->rawColumns(['action','photo'])
        
            ->addColumn('action', function ($model) {
                $edit_url = route('services.edit',$model->id);
               return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" data-title="View" href="' . $edit_url . '">Edit Service</a></li>
        </ul>
        </div> ';

            })
            ->make(true);
    }

    public function approval(Request $request ,$id)
    {
        $appointment = Appointment::findOrFail($id);
$data=$request->all();

           $approveVal = $request->approve;

            if ($approveVal == 'on') {
                $approveVal = 'approved';
            } else {
                $approveVal = null;
            }
           $appointment->condition = $approveVal;
            $appointment->save();

            return redirect()->route('appointments.index');
       
        }
        public function delete(Request $request,$id)
        {
            $appointment = Appointment::findOrFail($id);
          
            $appointment->delete();
            return redirect()->route('appointments.index');
           
        }
        public function RejectionReason(){
            $orderdetails = DB::table('order_details')
                ->join('products', 'order_details.product_id', '=', 'products.id')
                ->join('items', 'order_details.item_id', '=', 'items.id')
                ->join('users', 'order_details.user_id', '=', 'users.id')
                ->select('order_details.id', 'items.itemName', 'order_details.quantity', 'order_details.approve', 'order_details.reject', 'users.name', 'products.productName')
                ->where(['order_details.issue' => 0, 'order_details.approve' => 0, 'order_details.reject' => 0, 'order_details.centre_id' => Auth::User()->centre_id, 'order_details.dpt_id' => Auth::User()->dpt_id])
                ->get();
            return view('store.rejectionReason',compact('orderdetails'));
        }

    

}
