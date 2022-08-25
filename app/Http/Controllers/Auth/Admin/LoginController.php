<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function adminLogin(){
       
        return view('auth.login');
    }
    public function Login(Request $request){
     
if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
     
    session::flash('success_message','admin login Susscessful');
   return redirect()->intended(route('admin'));

}else{
    // return redirect()->route('admin.login.form'); 
    return back()->withInput($request->only('email'));
}
        
    }
}
