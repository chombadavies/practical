@extends('layouts.backend.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>appointments Approval</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
             
            </ol>
          </div>
        </div>
        <div class="line">
          <hr style="border: 4px solid green">
          </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div></div>
          <div class="col-12">
               
            @if (Session::has('success_message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 10px">
          {{Session::get('success_message')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            <div class="card">
          </div>
            <!-- /.card -->

            <div class="card card-success card-outline">
              <div class="card-header">
                <h3 class="card-title">Orders</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                  <thead class="table bg-success" >
                  <tr>
                    
                    <th>Serive title</th>
                    <th>S/N</th>
                    <th>Client Name</th>
                    <th>Appointment Date</th>
                    <th>Appproval</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($appointments as $appointment)          
                  <tr>
                     
                    <td>{{$appointment->title }}</td> 
                    <td>{{$appointment->appointment_number}}</td>  
                    <td>{{$appointment->full_name}}</td>
                    <td>{{$appointment->appointment_date}}</td> 
                    <td>@if ($appointment->condition=='approved')
                      <a class="updateApproval;badge badge-success"
                          href="javascript:void(0)">Approved</a>
              @elseif ($appointment->condition=='deleted')
                          <a class="updateApproval;badge badge-danger" 
                              href="javascript:void(0)">Rejected</a>
                              
                              @else
                              <a class="updateApproval;badge badge-warning"
                                href="javascript:void(0)">Pending</a>
                         
                      @endif
                  </td>

                  <td class="text-centre">
                    
            <form action="{{route('approval', $appointment->id)}}" method="POST" class="d-inline">@csrf
              
               <input <?php if($appointment->condition=='approved'){echo 'checked';}?> type="checkbox" name="approve" required >
               
                <input type="submit" class="btn btn-outline-success btn-sm" value="Approve">
              </form> 

 
              <form action="{{route('app.delete', $appointment->id)}}" method="POST" class="d-inline">@csrf
                @method('DELETE')
              
                <input  type="checkbox" name="delete" required >
                
                 <input type="submit" class="btn btn-outline-danger btn-sm" value="delete">
               </form>
           
        
       </td>

                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<style>
   .modal-title{
         font-family: Verdana, Geneva, Tahoma, sans-serif;
         font-size: 20px;
         font-weight: bolder;
         text-transform: uppercase;
     }
     .card{
  box-shadow: 
   5px 5px 10px 5px rgba(56, 230, 12, 0.2),
   -5px -5px 10px 5px rgba(56, 230, 12, 0.2);
      transition: 0.3s;
      border-radius: 5px; 
     }
   
     
     .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #BFDFB1;
}
</style>
@endsection