<!Doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LOVE 9 - SAAB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/assets/img/logo/saab.jpg">
    <!-- Place favicon.ico in the root directory -->

    {{-- Meta --}}
    <meta name="description" content="Khwalifatul Umam Alaihis Salam">
    <meta name="keywords" content="love9, saab, Chatro Anjuman, Rajarbag, Dorbar Shareef, Kholifatul Umam, 9th romadan, 9 rwamadan, love"/>
    <meta name="author" content="SAAB"/>
    <meta property="og:site_name" content="Love 9"/>
    <meta property="og:url" content="https://9shareef.com"/>
    <meta property="og:title" content="Love 9 - Saab"/>
    <meta property="og:description" content="Khwalifatul Umam Alaihis Salam"/>
    <meta property="og:image" content="{{asset('frontend')}}/assets/img/logo/umam.png"/>
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/odometer.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/meanmenu.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/swipper.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/main.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css">

    <!-- Fonts -->
    <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/charu-chandan-3d/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/charu-chandan-hard-stroke/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/ekushey-lohit/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/bensen/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/bensen/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/charukola-ultra-light/font.css" rel="stylesheet">
    <style>
         @font-face {
            font-family: Sirajee_Humayra ;
            src: url({{asset('frontend')}}/assets/fonts/bangla/Li_Sirajee_Humayra_Unicode.ttf);
        }
         @font-face {
            font-family: LiMahfujAK ;
            src: url({{asset('frontend')}}/assets/fonts/bangla/LiMahfujAKUnicode.ttf);
        }
         @font-face {
            font-family: Alinur ;
            src: url({{asset('frontend')}}/assets/fonts/bangla/LiAlinurTarunyaUnicode-Regular.ttf);
        }

    </style>





</head>

<body class="dark-theme">


    <div class="page-wrapper page-wrapper-2" data-background="{{asset('frontend')}}/assets/img/bg/black.jpg">

        <!-- PRELOADER -->
        <div id="preloader">
            <div class="loader_line"></div>
        </div>
        <!-- /PRELOADER -->

        <!-- header-start -->
        <div class="bostami-header-area mb-30 z-index-5">
            <div class="container">
                <div class="bostami-header-wrap main-style-2">
                    <div class="row">

                        <!-- logo -->
                        <div class="col-lg-2 col-md-6 col-sm-4 col-4 d-flex align-items-center">
                            <div class="bostami-header-logo">
                                <a class="site-logo" href="{{route('index')}}">
                                    <img class="rounded-circle" src="{{asset('frontend')}}/assets/img/logo/love9.png" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- menu btn -->
                        <div class="col-lg-10 col-md-6 col-sm-8 col-8">
                            <div class="header-right-flex">
                                <div class="bostami-main-menu-wrap ">
                                    <nav class="bastami-main-menu main_menu_2">
                                        <ul>
                                            {{-- <li class="{{ $_SERVER['REQUEST_URI'] == '/' ? 'active' : '' }}">
                                                <a href="{{route('index')}}">
                                                    <span>

                                                        <i class="fa-light fa-house"></i>
                                                    </span>
                                                    home
                                                </a>
                                            </li> --}}

                                            {{-- <li class="{{ $_SERVER['REQUEST_URI'] == '/works' ? 'active' : '' }}">
                                                <a href="{{route('works')}}">
                                                    <span>
                                                        <i class="fa-light fa-briefcase"></i>
                                                    </span>
                                                    Works
                                                </a>
                                            </li> --}}
                                            <!-- <li>
                                                <a href="blog-2.html">
                                                    <span>
                                                        <i class="fa-light fa-newspaper"></i>
                                                    </span>
                                                    Blogs
                                                </a>
                                            </li> -->

                                            <li class="{{ $_SERVER['REQUEST_URI'] == '/' ? 'active' : '' }}">
                                                <a href="{{route('quiz')}}">
                                                    <span>
                                                        <i class="fa-solid fa-q"></i>
                                                    </span>
                                                    Quiz
                                                </a>
                                            </li>


                                        </ul>
                                    </nav>
                                </div>
                                <div class="bostami-header-menu-btn text-right ml-30">
                                    @if ($_SERVER['REQUEST_URI'] != '/')
                                    <div class="dark-btn dark-btn-2">
                                        <i class="fa-light fa-moon dark-btn-icon"></i>
                                        <i class="fa-light fa-sun dark-btn-icon"></i>
                                    </div>
                                    @endif

                                    <div class="menu-btn-wrap d-lg-none">
                                        <div class="menu-btn menu-btn-2 toggle_menu">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- mobile menu -->
                <div class="mobile-menu-wrap">
                    <div class="mobile-menu mobile_menu_2">
                    </div>
                </div>

            </div>
        </div>
        <!-- header-end -->



        @yield('content')





        <div class="text-center pt-25 pb-25 bg-light-white-2 border-redius-20">
            <span>&#169; 2024 All Rights Reserved by <a class="text-light fw-5" href="https://www.facebook.com/9SAAB" target="_blank" rel="noopener noreferrer">SAAB</a>.</span>
        </div>

    </div>

    <!-- JS here -->
    <script src="{{asset('frontend')}}/assets/js/jquery.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/swipper-bundle.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/jquery.meanmenu.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/wow.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/isotope.pkgd.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/odometer.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/appear.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/main.js"></script>

    @yield('script')



</body>



</html>
