


<header class="version_1">
    <div class="layer"></div><!-- Mobile menu overlay mask -->
    <div class="main_header" style="background-color:#72A0C1">
        <div class="container">
            <div class="row small-gutters">
                <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                    <div id="logo">
                        <a href="{{route('home')}}"><img src="" alt="Logo" width="100" height="35"></a>
                    </div>
                </div>
                <nav class="col-xl-6 col-lg-7">
                    <a class="open_close" href="javascript:void(0);">
                        <div class="hamburger hamburger--spin">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </a>
                    <!-- Mobile menu button -->
                    <div class="main-menu">
                        <div id="header_menu">
                            <a href="index.html"><img src="img/logo_black.svg" alt="" width="100" height="35"></a>
                            <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                        </div>
                        <ul>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Services</a>
                                <ul>
                                    <li><a href="index.html">Slider</a></li>
                                    <li><a href="index-2.html">Video Background</a></li>
                                    <li><a href="index-3.html">Vertical Slider</a></li>
                                    <li><a href="index-4.html">GDPR Cookie Bar</a></li>
                                </ul>
                            </li>
                          
                            <li>
                                <a href="blog.html">About Us</a>
                            </li>
                            <li>
                                <a href="#0">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <!--/main-menu -->
                </nav>
                <div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-end">
                    <div class="dropdown dropdown-access">
                        <a href="account.html" class="access_link"><span>Account</span></a>
                        <div class="dropdown-menu">
                         
                            <ul>
                                @auth
                               
                               <li>
                                    <form action="{{route('user.logout')}}" method="POST">@csrf 
                                    <button class="btn btn-main btn-block btn-info form-control">Logout</button>
                                </form>
                                </li>
                           
                                @else
                                <a href="{{route('user.auth')}}" class="btn_1">Sign In or Sign Up</a>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- /main_header -->
    <!-- /main_nav -->
</header>