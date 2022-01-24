

<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from via-theme.com/24hNews/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Dec 2021 06:32:11 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="24h News - Broadcast News TV Channel & News Magazine Template">
    <meta name="author" content="Via-Theme">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Title  -->
    <title>Home | 24h News</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('front/img/favicon.png')}}" type="image/x-icon" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed%7CRoboto+Slab:300,400,700%7CRoboto:300,400,500,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/colors.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/weather-icons.min.css')}}">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<div id="pageloader">
    <div class="loader-item"> <img src="{{asset('front/img/load.gif')}}" alt='loader' /> </div>
</div>
<!--========== BEGIN #WRAPPER ==========-->
<div id="wrapper" data-color="red">
    <!--========== BEGIN #HEADER ==========-->
    <header id="header">
        <!-- Begin .top-menu -->
        <div class="top-menu">
            <!-- Begin .container -->
            <div class="container">
                <!-- Begin .left-top-menu -->
                <ul class="left-top-menu">
                    <li> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> </li>
                    <li> <a href="#" class="youtube"> <i class="fa fa-youtube"></i></a> </li>
                    <li> <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> </li>
                    <li> <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> </li>
                    <li> <a href="#" class="instagram"> <i class="fa fa-instagram"></i></a> </li>
                    <li class="address"><a href="#"><i class="fa fa-phone"></i> +00 (123) 456 7890</a></li>
                    <li class="address"><a href="#"><i class="fa fa-envelope-o"></i> info@domain.com</a></li>
                </ul>
                <!-- End .left-top-menu -->
                <!-- Begin .right-top-menu -->
                <ul class="right-top-menu pull-right">
                    <li class="contact"><a href="contact.html"><i class="fa fa-map-marker fa-i"></i></a></li>
                    <li class="about"><a href="about-us.html"><i class="fa fa-user fa-i"></i></a> </li>
                    <li>
                        <div class="search-container">
                            <div class="search-icon-btn"> <span style="cursor:pointer"><i class="fa fa-search"></i></span> </div>
                            <div class="search-input">
                                <input type="search" class="search-bar" placeholder="Search..." title="Search"/>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- End .right-top-menu -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End .top-menu -->
        <!-- Begin .container -->
        <div class="container">
            <!-- Begin .header-logo -->
            <div class="header-logo"><a href="index.html"><img src="{{asset('front/img/logo.png')}}" alt="Site Logo" />
                    <h1>24h <span>News</span></h1>
                    <h4>Your 24h News Source</h4>
                </a></div>
            <!-- End .header-logo -->
            <!-- Begin .header-add-place -->
            <div class="header-add-place">
                <div class="desktop-add"><a href="https://themeforest.net/item/24h-news-broadcast-news-tv-channel-news-magazine-template/18614179" target="_blank"><img src="img/banner_728x90.jpg" alt=""></a></div>
            </div>
            <!-- End .header-add-place -->
            <!--========== BEGIN .NAVBAR #MOBILE-NAV ==========-->
            <nav class="navbar navbar-default" id="mobile-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" id="sidenav-toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <div class="sidenav-header-logo"><a href="index.html"><img src="{{asset('front/img/logo.png')}}" alt="Site Logo" />
                            <h2>24h <span>News</span></h2>
                            <h5>Your 24h News Source</h5>
                        </a></div>
                </div>
                <div class="sidenav" data-sidenav data-sidenav-toggle="#sidenav-toggle">
                    <button type="button" class="navbar-toggle active" data-toggle="collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <div class="sidenav-brand">
                        <div class="sidenav-header-logo"><a href="index.html"><img src="{{asset('front/img/logo.png')}}" alt="Site Logo" />
                                <h2>24h <span>News</span></h2>
                                <h5>Your 24h News Source</h5>
                            </a></div>
                    </div>
                    <ul class="sidenav-menu">
                        <li><a href="#">More</a>
                            <div class="icon-sub-menu" data-sidenav-dropdown-toggle><span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span><span class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span></div>
                            <ul class="sidenav-dropdown" data-sidenav-dropdown>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="autos.html">Autos</a></li>
                                <li><a href="deals.html">Deals</a></li>
                                <li><a href="environment.html">Environment</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <div class="icon-sub-menu" data-sidenav-dropdown-toggle><span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span><span class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span></div>
                            <ul class="sidenav-dropdown" data-sidenav-dropdown>
                                <li><a href="single-post.html">Single Post</a></li>
                                <li><a href="404.html">Error 404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                                <li><a href="video.html">Video</a></li>
                                <li><a href="video-full.html">Video Full Width</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a>
                            <div class="icon-sub-menu" data-sidenav-dropdown-toggle><span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span><span class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span></div>
                            <ul class="sidenav-dropdown" data-sidenav-dropdown>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="contact-1.html">Contact 1</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--========== END .NAVBAR #MOBILE-NAV ==========-->
        </div>
        <!-- End .container -->
        <!--========== BEGIN .NAVBAR #FIXED-NAVBAR ==========-->
        <div class="navbar" id="fixed-navbar">
            <!--========== BEGIN MAIN-MENU .NAVBAR-COLLAPSE COLLAPSE #FIXED-NAVBAR-TOOGLE ==========-->
            <div class="main-menu nav navbar-collapse collapse" id="fixed-navbar-toggle">
                <!--========== BEGIN .CONTAINER ==========-->
                <div class="container">
                    <!-- Begin .nav navbar-nav -->
{{--                    {{getData()}}--}}
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <!--========== BEGIN .DROPDOWN ==========-->
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category</a>

                            <ul class="dropdown-menu">
                                @foreach(getData() as $menu)
                                <li><a href="{{url('category/'.$menu->id)}}">{{$menu->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <!--========== END .DROPDOWN ==========-->
                     <li class="float-lg-left" style="margin-left: 800px">
                         @if (Route::has('login'))

                                 @auth



                            @else
                                <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline float-end">Log in</a></li>

                            @if (Route::has('register'))
                                    <li>    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                    @endif
                                 @endauth

                         @endif
                     </li>
                    </ul>
                    <!--========== END .NAV NAVBAR-NAV ==========-->
                </div>
                <!--========== END .CONTAINER ==========-->
            </div>
            <!--========== END MAIN-MENU .NAVBAR-COLLAPSE COLLAPSE #FIXED-NAVBAR-TOOGLE ==========-->
            <!--========== BEGIN .SECOND-MENU NAVBAR #NAV-BELOW-MAIN ==========-->
            <div class="second-menu navbar" id="nav-below-main">
                <!-- Begin .container -->
                <div class="container">
                    <!-- Begin .collapse navbar-collapse -->
                    <div class="collapse navbar-collapse nav-below-main">
                        <!-- Begin .nav navbar-nav -->
                        <ul class="nav navbar-nav">
                            <li><a href="watch-live.html">Watch Live 24/7</a></li>
                            <li><a href="24-tv-radio.html">24 TV & Radio</a></li>
                            <li><a href="web-shows.html">Web Shows</a></li>
                            <li><a href="24-news-store.html">24 News Store</a></li>
                        </ul>
                        <!-- End .nav navbar-nav -->
                    </div>
                    <!-- End .collapse navbar-collapse -->
                    <!-- Begin .clock -->
                    <div class="clock">
                        <div id="time"></div>
                        <div id="date"></div>
                    </div>
                    <!-- End .clock -->
                </div>
                <!-- End .container -->
            </div>
            <!--========== END .SECOND-MENU NAVBAR #NAV-BELOW-MAIN ==========-->
        </div>
    </header>
    <!--========== END #HEADER ==========-->
    <!--========== BEGIN #MAIN-SECTION ==========-->
    @yield('mainContent')
    <!--========== END #MAIN-SECTION ==========-->
    <!--========== BEGIN #FOOTER==========-->
    <footer id="footer">
        <!-- Begin .parallax -->
        <div id="parallax-section2">
            <div class="bg parallax2 overlay img-overlay2">
                <div class="container">
                    <div class="row no-gutter">
                        <div class="col-sm-6 col-md-3">
                            <h3 class="title-left title-style03 underline03">About Us</h3>
                            <p class="about-us">When you’re building a website, it’s tempting to get distracted by all the bells and whistles of the design process and forget all about creating compelling content.<br>
                                But having awesome content on your website is crucial to making inbound marketing
                                work for your business.<br>
                                We know ... easier said than done. </p>
                            <div class="site-logo"><a href="index.html"><img src="img/logo.png" alt="Side Logo" />
                                    <h3>24h <span>News</span></h3>
                                    <p>Your 24h News Source</p>
                                </a></div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h3 class="title-left title-style03 underline03">News</h3>
                            <div class="footer-post">
                                <ul>
                                    <li>
                                        <div class="item">
                                            <div class="item-image"><a class="img-link" href="deals.html"><img class="img-responsive img-full" src="img/index_370x185-image01.jpg" alt=""></a></div>
                                            <div class="item-content">
                                                <p class="ellipsis"><a href="#">Deals do not have a trajectory like most other human interactions.</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <div class="item-image"><a class="img-link" href="deals.html"><img class="img-responsive img-full" src="img/index_370x185-image14.jpg" alt=""></a></div>
                                            <div class="item-content">
                                                <p class="ellipsis"><a href="#">Harold E.says it proves the value of the kind of investigative journalism.</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <div class="item-image"><a class="img-link" href="deals.html"><img class="img-responsive img-full" src="img/food_370x185-image05.jpg" alt=""></a></div>
                                            <div class="item-content">
                                                <p class="ellipsis"><a href="#">The consumer can be influenced by marketing before purchase.</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <div class="item-image"><a class="img-link" href="deals.html"><img class="img-responsive img-full" src="img/index_370x185-image03.jpg" alt=""></a></div>
                                            <div class="item-content">
                                                <p class="ellipsis"><a href="#">Entertainment can aspire to be art, and can become art, but give pleasure.</a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h3 class="title-left title-style03 underline03">Watch+Listen</h3>
                            <div class="footer-post">
                                <ul>
                                    <li>
                                        <div class="item">
                                            <div class="item-image"><a class="img-link" href="deals.html"><img class="img-responsive img-full" src="img/art-entertainment_370x185-image04.jpg" alt=""></a></div>
                                            <div class="item-content">
                                                <p class="ellipsis"><a href="#">Music may help you think better, analyze matters faster, and work more efficiently.</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <div class="item-image"><a class="img-link" href="deals.html"><img class="img-responsive img-full" src="img/index_370x185-image15.jpg" alt=""></a></div>
                                            <div class="item-content">
                                                <p class="ellipsis"><a href="#">Video on Demand can be used for entertainment and videoconferencing.</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <div class="item-image"><a class="img-link" href="deals.html"><img class="img-responsive img-full" src="img/index_370x185-image08.jpg" alt=""></a></div>
                                            <div class="item-content">
                                                <p class="ellipsis"><a href="#">Podcast is a program made available in digital format for download.</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <div class="item-image"><a class="img-link" href="deals.html"><img class="img-responsive img-full" src="img/index_370x185-image16.jpg" alt=""></a></div>
                                            <div class="item-content">
                                                <p class="ellipsis"><a href="#">Watch live TV news and your favorite shows on demand. At home or on the go!</a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h3 class="title-left title-style03 underline03">Tags</h3>
                            <div class="tagcloud"><a href="#">News</a><a href="#">Sports</a><a href="#">Schedule</a><a href="#">Health</a><a href="#">Business</a><a href="#">Travel</a><a href="#">Autos</a><a href="#">Deals</a><a href="#">Corporate</a><a href="#">Markets</a><a href="#">Design</a><a href="#">Food</a><a href="#">Broadcast News</a><a href="#">Politics</a><a href="#">Promo</a><a href="#">Entertainment</a><a href="#">Primetime News</a><a href="#">Advertising</a><a href="#">Android</a><a href="#">Live Feed</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .parallax -->
    </footer>
    <!--========== END #FOOTER==========-->
    <!--========== BEGIN #COPYRIGHTS==========-->
    <div id="copyrights">
        <!-- Begin .container -->
        <div class="container">
            <!-- Begin .copyright -->
            <div class="copyright"> &copy; 2016, Copyrights 24hNews Theme. All Rights Reserved </div>
            <!-- End .copyright -->
            <!--  Begin .footer-social-icons -->
            <div class="footer-social-icons">
                <ul>
                    <li> <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> </li>
                    <li> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> </li>
                    <li> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> </li>
                    <li> <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> </li>
                </ul>
            </div>
            <!--  End .footer-social-icons -->
        </div>
        <!-- End .container -->
    </div>
    <!--========== END #COPYRIGHTS==========-->
</div>

<!--========== END #WRAPPER ==========-->

<!-- External JavaScripts -->
<script src="{{asset('front/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('front/js/plugins.js')}}"></script>
<!-- JavaScripts -->
<script src="{{asset('front/js/functions.js')}}"></script>
{{--<script src="{{asset('front/js/custom.js')}}"></script>--}}
</body>

<!-- Mirrored from via-theme.com/24hNews/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Dec 2021 06:44:12 GMT -->
</html>

