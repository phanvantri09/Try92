<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <!-- <div class="logo"> -->
                            <a href="{{ route('index') }}">
                                <!-- <img src="img/logo.png" alt=""> -->
                                <h1 class="text-white">Try92</h1>
                            </a>
                            <!-- </div> -->
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{ route('index') }}">Trang chủ</a></li>
                                        <li><a href="{{ route('contact') }}" target="_blank">Liên hệ</a></li>
                                        <li><a href="{{ route('tracks') }}" target="_blank">tracks</a></li>
                                        <li><a href="{{ route('blogs') }}" target="_blank">blogs</a>
                                        </li>
                                        @auth
                                        <li><a href="#">Admin <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        @endauth
                                        
                                        <!-- <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                 <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="social_icon text-right">
                                <ul>
                                    <li><a href="https://www.facebook.com/Try922000" target="_blank"> <i class="fa fa-facebook"></i> </a></li>
                                    <li><a href="https://www.youtube.com/@try92" target="_blank"> <i class="fa fa-youtube-play"></i> </a></li>
                                    <li><a href="https://www.tiktok.com/@try922k" target="_blank"> <i class="fa fa-instagram"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
