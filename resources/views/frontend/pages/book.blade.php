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
					
				</ul>
		</div>
		<h1>Book For service</h1>
	</div>
	<!-- /page_header -->
			<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					
					<div class="form_container">
						<div class="row no-gutters">
							<div class="col-lg-6 pr-lg-1">
								
							</div>
							<div class="col-lg-6 pl-lg-1">
								
							</div>
						</div>
						<div class="divider"><span></span></div>
						<form action="{{route('booking.submit')}}" method="POST"> 
                            @csrf
                            <div class="row">
                                <input type="hidden" name="service_id" value="{{$service->id}}">
                            <div class="form-group col-md-6">
                                <label for="">Service Title</label>
                                <input type="email" class="form-control" name="title" value="{{$service->title}}" readonly>
                               
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Service description</label>
                                <input type="text" class="form-control" name="description" id="description" value="{{$service->description}}" readonly >
                               
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="">Appointemnt Date</label>
                                <input type="date" class="form-control" name="appointment_date" >
                               
                            </div>
                            
    
                            <div class="text-center"><input type="submit"  value="Book Service" class="btn_1 full-width btn-success"></div>
                       
						
                    </form>
					</div>
					<!-- /form_container -->
				</div>
				
			</div>
			
		</div>
		<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->
@endsection


