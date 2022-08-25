<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\User;
use App\Models\Appointment;
use Auth;
use Hash;
use URL;
use Session;

class IndexController extends Controller
{
    public function home(){
      
     $services=Service::where('status','active')->limit(6)->get();
     
             return view('frontend.index',compact('services'));
    }

    public function bookAppointment($id, Appointment $appointment,request $request){
       

        $service=Service::findOrFail($id);
        return view('frontend.pages.book',compact('service'));
    }
    public function bookingSubmit( Appointment $appointment,request $request){  
        
        $data=$request->all();
     
 $appointment->service_id=$request->service_id;
 $appointment->user_id=Auth()->user()->id;
 $appointment->appointment_number='AP'.rand(111, 99999);
 $appointment->appointment_date=$request->appointment_date;
 $appointment->save();
 Session::flash('success_message','booking success');

 return redirect()->route('user.appointments');

    }

public function  Apointments(){
    $appointments = DB::table('appointments')
    ->join('services', 'appointments.service_id', '=', 'services.id')
    ->join('users', 'appointments.user_id', '=', 'users.id')
    ->select('appointments.id', 'services.title', 'appointments.appointment_date','appointments.appointment_number', 'appointments.condition', 'users.full_name', 'services.description')
    ->get();
   return view('backend.appointments.index',compact('appointments'));
}

    public function userAuth(){
         
        Session::put('url.intended',URL::previous());
        //    return  $data=session()->all();
       return view('frontend.auth.login');
    }

    public function loginSubmit(Request $request){
        // dd($request->all());
                    $this->validate($request,[
                        'email'=>'required|email',
                       'password'=>'required|min:4'
                    ]);
        
                    if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
                        
                        Session::put('user',$request->email);
        
                        //  return  $data=session()->all();
                        if(Session::get('url.intended')){
                            // return redirect::to(Session::get('url.intended'))->with('success','Login Successful');
                            return redirect()->route('home')->with('success','Login Successful');
                             }else{
                              return redirect()->route('home')->with('success','Login Successful');
                             }
        
                    }else{
                   return back()->with('error','invalid email or password');
                    }
                }
    
                public function registerSubmit(Request $request){ 
           
                    // $this->validate($request,[
                    //     'Email'=>'required|email|unique:users',
                    //    'Password'=>'required|min:4',
                    //    'full_name'=>'required|string',
                    //    'user_name'=>'string|required',
                    //    'address'=>'string',
                    //    'phone'=>'required'
                      
                    // ]);
                
                    $data=$request->all();
  
                    $check=$this->create($data);
                    Session::put('user',$data['email']);
                    Auth::login($check);
                    if($check){
                      Session::flash('success_message','user Registered Successfully');
                        return redirect()->route('home');
                    }else{
                        Session::flash('error_message','Registration failed, Try Again');
                        return back();
                    }
                  
                }
    
                private function create(array $data){
                    return User::create([
                        'full_name'=>$data['full_name'],
                        'username'=>$data['username'],
                        'email'=>$data['email'],
                        'address'=>$data['address'],
                        'phone'=>$data['phone'],
                        'password'=>Hash::make($data['password'])
                    ]);
                    }
                    
                    public function userLogout(){
                        
                        Session::forget('user');
                        Auth::logout();
                        
                        return redirect()->route('home')->with('success','user logout Successfull');
                    }

                    public function userAppointments(){

                        $user = Auth::user();

                        $appointments = DB::table('appointments')
                        ->join('services', 'appointments.service_id', '=', 'services.id')
                        ->select('appointments.id', 'services.title','appointments.appointment_date','appointments.condition' )
                        ->where('user_id',Auth::user()->id)
                        ->get();
                      
                     
                       $data['page_title']='User Appointments';
                        return view('frontend.pages.appointments',$data)->with(compact('user','appointments'));
                    }
    
   
}
