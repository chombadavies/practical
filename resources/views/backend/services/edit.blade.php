@extends('layouts.backend.main')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$page_title?></h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Services</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <a href="<?=route('services.index')?>" class="btn btn-sm btn-success"><span class="fa fa-bars"><span> View List</a>
            </span>
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form role="form" action="{{route('services.update',$service->id)}}" method="POST" enctype="multipart/form-data">@csrf
                @method('PUT')
                <div class="card-body">

                  <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Service Title</label>
                    <input type="text" class="form-control" name="title" value="{{$service->title}}" placeholder="Enter service name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Service Status</label>
                   <select name="status" class="form-control">
                    <option selected disabled>Status</option>
                    <option value="booked" {{$service->status=='booked'? 'selected':''}}>Booked</option>
                    <option value="unbooked" {{$service->status=='unbooked'?'selected':''}}>Un booked</option>
                   </select>
                  </div>
                </div>
                  <div class="form-group">
                    <label>Service Description</label>
                    <textarea class="form-control" rows="3" name="description" placeholder="Enter service description">{{$service->description}}</textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection