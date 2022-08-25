@extends('layouts.frontend.master')

@section('content')
<main>
    <div id="carousel-home">
        <div class="owl-carousel owl-theme">
            <div class="owl-slide cover" style="background-image: url(frontend/img/slides/home.jpeg);">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-end">
                            <div class="col-lg-6 static">
                                <div class="slide-text text-end white">
                                    {{-- <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Max 720 Sage Low</h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                        Limited items available at this price
                                    </p> --}}
                                    <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Show More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="icon_drag_mobile"></div>
    </div>
    <!-- /header-video -->

    <div class="feat">
        <div class="container">
            <span style="margin-left: 35%" >Our clients include 150 Global Brands, Silicon Valley Founders</span>
            <br> <br>
            <ul>
                <li>
                    <div class="box">
                        <img src="{{asset('frontend/img/brands/omra-stroked.png')}}" alt="" width="50">
                        <div class="justify-content-center">
                            <h3>Omra slaughter</h3>
                            {{-- <p>For all oders over $99</p> --}}
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <img src="{{asset('frontend/img/brands/somal.png')}}" alt="" width="50">
                        <div class="justify-content-center">
                            <h3>Somali Signal</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <i class="ti-headphone-alt"></i>
                        <div class="justify-content-center">
                            <h3>24/7 Support</h3>
                            <p>Online top support</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--/feat-->


    <hr class="mb-0">
    
    <div class="container margin_60_35">
        <div class="main_title mb-4">
            {{-- <h2>New Arrival</h2>
            <span>Products</span> --}}
            <h1>Our Software Development & Digital <br> Transformation Services</h1>
        </div>
  
        <div class="isotope-wrapper" style="background-color:#f8f8f8" >
            <div class="row small-gutters">
                
                <div class="col-md-4  isotope-item sale">
                    <div class="grid_item">
                        
                           
                           
                              <div class="card" style="width: 22rem;">
                                <div class="card-body">
                                    <img src="{{asset('frontend/img/brands/devs.svg')}}" alt="" max-width="100%" height="auto"><br>
                                  <h5 class="card-title">Hire Dedicated Developers</h5> <br>
                                  <p class="card-text" style="font-size:18px;line-height:30px">Hire dedicated offshore developers with expertise in Frontend, 
                                    Backend, UI/UX, QA, Testing, DevOps, Digital Marketing, etc. Our experts will work
                                     exclusively on your project, with undivided attention, 
                                    to manage the entire development lifecycle as per your needs.</p>
                                  <a href="#" class="btn btn-orange c-btn non-cta">Learn More</a>
                                </div>
                              </div>
                           
                          
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-md-4 isotope-item sale">
                    <div class="grid_item">
                        <div class="card"  style="width: 22rem;">
                            <div class="card-body">
                                <img src="{{asset('frontend/img/brands/cs-icon6.webp')}}" alt="" max-width="100%" height="auto"><br>
                              <h5 class="card-title">Hire Dedicated Developers</h5> <br>
                              <p class="card-text" style="font-size:18px;line-height:30px">Hire dedicated offshore developers with expertise in Frontend, 
                                Backend, UI/UX, QA, Testing, DevOps, Digital Marketing, etc. Our experts will work
                                 exclusively on your project, with undivided attention, 
                                to manage the entire development lifecycle as per your needs.</p>
                              <a href="#" class="btn btn-orange c-btn non-cta">Learn More</a>
                            </div>
                          </div>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-md-4 isotope-item sale">
                    <div class="grid_item">
                        <div class="card" style="width: 22rem;">
                            <div class="card-body">
                                <img src="{{asset('frontend/img/brands/cs-icon5.webp')}}" alt="" max-width="100%" height="auto"><br>
                              <h5 class="card-title">Hire Dedicated Developers</h5> <br>
                              <p class="card-text" style="font-size:18px;line-height:30px">Hire dedicated offshore developers with expertise in Frontend, 
                                Backend, UI/UX, QA, Testing, DevOps, Digital Marketing, etc. Our experts will work
                                 exclusively on your project, with undivided attention, 
                                to manage the entire development lifecycle as per your needs.</p>
                              <a href="#" class="btn btn-orange c-btn non-cta">Learn More</a>
                            </div>
                          </div>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-md-4 isotope-item popular">
                    <div class="grid_item">
                        <div class="card" style="width: 22rem;">
                            <div class="card-body">
                                <img src="{{asset('frontend/img/brands/cs-icon5.webp')}}" alt="" max-width="100%" height="auto"><br>
                              <h5 class="card-title">Hire Dedicated Developers</h5> <br>
                              <p class="card-text" style="font-size:18px;line-height:30px">Hire dedicated offshore developers with expertise in Frontend, 
                                Backend, UI/UX, QA, Testing, DevOps, Digital Marketing, etc. Our experts will work
                                 exclusively on your project, with undivided attention, 
                                to manage the entire development lifecycle as per your needs.</p>
                              <a href="#" class="btn btn-orange c-btn non-cta">Learn More</a>
                            </div>
                          </div>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class=" col-md-4 isotope-item popular">
                    <div class="grid_item">
                        <div class="card" style="width: 22rem;">
                            <div class="card-body">
                                <img src="{{asset('frontend/img/brands/cs-icon5.webp')}}" alt="" max-width="100%" height="auto"><br>
                              <h5 class="card-title">Hire Dedicated Developers</h5> <br>
                              <p class="card-text" style="font-size:18px;line-height:30px">Hire dedicated offshore developers with expertise in Frontend, 
                                Backend, UI/UX, QA, Testing, DevOps, Digital Marketing, etc. Our experts will work
                                 exclusively on your project, with undivided attention, 
                                to manage the entire development lifecycle as per your needs.</p>
                              <a href="#" class="btn btn-orange c-btn non-cta">Learn More</a>
                            </div>
                          </div>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-md-4 isotope-item popular">
                    <div class="grid_item">
                        <div class="card" style="width: 22rem;">
                            <div class="card-body">
                                <img src="{{asset('frontend/img/brands/cs-icon5.webp')}}" alt="" max-width="100%" height="auto"><br>
                              <h5 class="card-title">Hire Dedicated Developers</h5> <br>
                              <p class="card-text" style="font-size:18px;line-height:30px">Hire dedicated offshore developers with expertise in Frontend, 
                                Backend, UI/UX, QA, Testing, DevOps, Digital Marketing, etc. Our experts will work
                                 exclusively on your project, with undivided attention, 
                                to manage the entire development lifecycle as per your needs.</p>
                              <a href="#" class="btn btn-orange c-btn non-cta">Learn More</a>
                            </div>
                          </div>
                    </div>
                    <!-- /grid_item -->
                </div>
             
            
            </div>
            <!-- /row -->
        </div>
        <!-- /isotope-wrapper -->
    </div>
    <!-- /container -->
    
 
    
    <div class="bg_gray">
        <div class="container margin_30">
            <div id="brands" class="owl-carousel">
                <div class="item">
                    <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_1.png" alt="" class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_2.png" alt="" class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_3.png" alt="" class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_4.png" alt="" class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_5.png" alt="" class="owl-lazy"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_6.png" alt="" class="owl-lazy"></a>
                </div><!-- /item --> 
            </div><!-- /carousel -->
        </div><!-- /container -->
    </div>
    <!-- /bg_gray -->
    
    <div class="container margin_60_35">
        <div class="main_title">
            <h2>Latest News</h2>
            <span>Blog</span>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-1.jpg" alt="" width="400" height="266" class="lazy">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>by Mark Twain</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Pri oportere scribentur eu</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-2.jpg" alt="" width="400" height="266" class="lazy">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>By Jhon Doe</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Duo eius postea suscipit ad</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-3.jpg" alt="" width="400" height="266" class="lazy">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>By Luca Robinson</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Elitr mandamus cu has</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-4.jpg" alt="" width="400" height="266" class="lazy">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>By Paula Rodrigez</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Id est adhuc ignota delenit</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    
</main>
@endsection