@extends('layouts.frontend.master')

@section('content')
<link href="{{asset('frontend/css/account.css')}}" rel="stylesheet">
<main class="bg_gray">
		
	<div class="container margin_30">
        <div class="col-4">
            @if (Session::has('error_message'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 10px">
          {{Session::get('error_message')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
          </div>
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
		</div>
		<h1>Sign In or Create an Account</h1>
	</div>
	<!-- /page_header -->
			<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="client">Already Client</h3>
					<div class="form_container">
						<div class="row no-gutters">
							<div class="col-lg-6 pr-lg-1">
								
							</div>
							<div class="col-lg-6 pl-lg-1">
								
							</div>
						</div>
						<div class="divider"><span></span></div>
						<form action="{{route('login.submit')}}" method="POST"> 
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*" @error('email') is-invalid @enderror>
                                <span style="color: red" >{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password_in" value="" placeholder="Password*" @error('password') is-invalid @enderror>
                                <span style="color: red" >{{$errors->first('password')}}</span>
                            </div>
                            <div class="clearfix add_bottom_15">
                                <div class="checkboxes float-start">
                                    <label class="container_check">Remember me
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="float-end"><a id="forgot" href="javascript:void(0);">Lost Password?</a></div>
                            </div>
                            <div class="text-center"><input type="submit"  value="Log In" class="btn_1 full-width"></div>
                       
						<div id="forgot_pw">
							<div class="form-group">
								<input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Type your email">
							</div>
							<p>A new password will be sent shortly.</p>
							<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
						</div>
                    </form>
					</div>
					<!-- /form_container -->
				</div>
				
			</div>
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="new_client">New Client</h3> <small class="float-right pt-2">* Required Fields</small>
					<div class="form_container">
						
                            <form action="{{route('register.submit')}}" method="POST">
                           {{-- {{ csrf_field()}} --}}
                           @csrf
                         
                            <div class="form-group">
                                
                                <input type="email" class="form-control" name="email" id="Email" placeholder="Email*" value="{{old('email')}}"  @error('email') is-invalid @enderror required>
                                <span style="color: red" >{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group">
                           
                                <input type="password" class="form-control" name="password" id="password"  placeholder="Password*" @error('password') is-invalid @enderror required> 
                                <span style="color: red" >{{$errors->first('password')}}</span>
                            </div>
   
                            <hr>
                            <div class="row no-gutters">
                                    <div class="col-6 pr-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name*" name="full_name" @error('full_name') is-invalid @enderror value="{{old('full_name')}}">
                                            <span style="color: red" >{{$errors->first('full_name')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name*" name="username" @error('username') is-invalid @enderror value="{{old('username')}}" required>
                                            <span style="color: red" >{{$errors->first('username')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address" placeholder="Full Address*" @error('address') is-invalid @enderror value="{{old('address')}}">
                                            <span style="color: red" >{{$errors->first('address')}}</span>
                                        </div>
                                    </div>
                                </div>
                              
                                <!-- /row -->
                                
                                <div class="row no-gutters">
                                    <div class="col-6 pr-1">
                                        <div class="form-group">
                                            <div class="custom-select-form">
                                                <select class="wide add_bottom_10" name="country" id="country" @error('country') is-invalid @enderror >
                                                        <option value="" selected disabled>Country*</option>
                                                        <option value="Europe">Europe</option>
                                                        <option value="United states">United states</option>
                                                        <option value="Asia">Asia</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Telephone *" @error('phone') is-invalid @enderror vlalue="{{old('phone')}}">
                                            <span style="color: red" >{{$errors->first('phone')}}</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                            <hr>
                            {{-- <div class="form-group">
                                <label class="container_check">Accept <a href="#0">Terms and conditions</a>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div> --}}
                            <div class="text-center"><input type="submit" value="Register" class="btn_1 full-width"></div>

                        </form>
					</div>
					<!-- /form_container -->
				</div>
				<!-- /box_account -->
			</div>
		</div>
		<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->
@endsection


