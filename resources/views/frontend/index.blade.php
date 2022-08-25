@extends('layouts.frontend.master')

@section('content')
<main>
   
  <div class="container margin_60_35">
        <div class="main_title mb-4">
            {{-- <h2>New Arrival</h2>
            <span>Products</span> --}}
            <h1>Our Services <br> </h1>
        </div>
       
  
        <div class="isotope-wrapper" style="background-color:#f8f8f8" >
            <div class="row small-gutters">
                
             @foreach ($services as $service)
          
             <div class="col-md-4  isotope-item sale">
              <div class="grid_item">
                  <div class="card" style="width: 22rem;">
                          <div class="card-body">
                              <img src="" alt="" max-width="100%" height="auto"><br>
                            <h5 class="card-title">{{$service->title}}</h5> <br>
                            <p class="card-text" style="font-size:18px;line-height:30px">{{$service->description}}</p>
                            <a href="{{route('book.appointment',$service->id)}}" class="btn btn-orange c-btn non-cta" >Book Appointemnt</a>
                          
                            
                          </div>
                        </div>  
              </div>
              <!-- /grid_item -->
          </div>
          
             @endforeach
            
             @include('layouts.frontend.modal')
             
            
            </div>
            <!-- /row -->
        </div>
        <!-- /isotope-wrapper -->
    </div>

    
</main>
@endsection