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
					<li><a href="{{route('home')}}">Home</a></li>
					<li><a href="#">Account</a></li>
				
				</ul>
		</div>
		<?=$page_title?>
	</div>
	<!-- /page_header -->
			<div class="row justify-content-center">
			<div class=" col-md-4" style="background-color: info">
				<div class="box_account">
					<h3 class=""></h3>
					<div class="form_container">
					
                      @include('frontend.pages.sidebar')
					
					</div>
					<!-- /form_container -->
				</div>
				<!-- /box_account -->
				
				<!-- /row -->
			</div>
			<div class="col-md-8">
				<div class="box_account">
					<h3 class=""></h3> <small class="float-right pt-2"></small>
					<div class="form_container">
						<div>
                            <p>Hello <strong>{{$user->full_name}}</strong></p>
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">apointment Name</th>
                                    <th scope="col">apointment Date</th>
                                    <th scope="col">condition</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{$appointment->title}}</td>
                                        <td>{{$appointment->appointment_date}}</td>
                                        <td>@if ($appointment->condition=='approved')
                                            <a class="updateApproval;badge badge-success"
                                                href="javascript:void(0)">Approved</a>
                                   @else
                                                    <a class="updateApproval;badge badge-warning"
                                                      href="javascript:void(0)">Pending</a>
                                               
                                            @endif
                                        </td>
                                      </tr> 
                                    @endforeach
                                 
                                 
                                </tbody>
                              </table>
                        </div>
                            
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


