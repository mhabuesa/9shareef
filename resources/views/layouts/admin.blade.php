<!DOCTYPE html>


<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
    data-theme="theme-default" data-assets-path="{{asset('backend')}}/assets/" data-template="vertical-menu-template">


<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Love9 </title>

    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend')}}/assets/img/logo/saab.jpg" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/css/rtl/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet"
        href="{{asset('backend')}}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet"
        href="{{asset('backend')}}/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/css/pages/cards-advance.css" />

    <!-- Helpers -->
    <script src="{{asset('backend')}}/assets/vendor/js/helpers.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('backend')}}/assets/js/config.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
    @yield('style')

</head>

<body>


    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


                <div class="app-brand demo ">
                    <a href="{{route('dashboard')}}" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-bold">Love9</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">



                    <li class="menu-item {{ Route::is('dashboard') ? 'active' : '' }}">
                        <a href="{{route('dashboard')}}" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                          <div data-i18n="Dashboards">Dashboards</div>
                        </a>
                    </li>


                    <li class="menu-item {{ Route::is('date') ? 'active' : '' }}">
                        <a href="{{route('date')}}" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-id"></i>
                          <div data-i18n="Date & Time">Date & Time</div>
                        </a>
                    </li>


                    <!-- Dashboards -->
                    <li class="menu-item {{ Route::is('quiz.*') ? 'open' : '' }}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                            <div data-i18n="Quiz">Quiz</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{ Route::is('quiz.list') ? 'active' : '' }}">
                                <a href="{{route('quiz.list')}}" class="menu-link">
                                    <div data-i18n="Quiz List">Quiz List</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Route::is('quiz.time') ? 'active' : '' }}">
                                <a href="{{route('quiz.time')}}" class="menu-link">
                                    <div data-i18n="Quiz Date Time">Quiz Date Time</div>
                                </a>
                            </li>


                        </ul>
                    </li>




                    <li class="menu-item {{ Route::is('user') ? 'active' : '' }}">
                        <a href="{{route('user')}}" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-user"></i>
                          <div data-i18n="User">User</div>
                        </a>
                    </li>

                    <li class="menu-item {{ Route::is('meeladShareef.list') ? 'active' : '' }}">
                        <a href="{{route('meeladShareef.list')}}" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-user"></i>
                          <div data-i18n="Meelad Shareef">Meelad Shareef</div>
                        </a>
                    </li>

                    <li class="menu-item {{ Route::is('onlinePostReportlist') ? 'active' : '' }}">
                        <a href="{{route('onlinePostReportlist')}}" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-user"></i>
                          <div data-i18n="Online Post Report">Online Post Report</div>
                        </a>
                    </li>

                    {{-- <li class="menu-item {{ Route::is('tasbih.list') ? 'active' : '' }}">
                        <a href="{{route('tasbih.list')}}" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-user"></i>
                          <div data-i18n="Tasbih">Tasbih</div>
                        </a>
                    </li> --}}



                    {{-- <li class="menu-item">
                        <a href="app-email.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-mail"></i>
                          <div data-i18n="Email">Email</div>
                        </a>
                    </li> --}}
                </ul>



            </aside>
            <!-- / Menu -->



            <!-- Layout container -->
            <div class="layout-page">





                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">


                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="ti ti-menu-2 ti-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{asset('backend')}}/assets/img/avatars/1.png" alt
                                            class="h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="{{route('profile.edit')}}">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{asset('backend')}}/assets/img/avatars/1.png" alt
                                                            class="h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block mt-2">{{Auth::user()->name}}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="{{route('profile.edit')}}">
                                            <i class="ti ti-settings me-2 ti-sm"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>




                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>



                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}" target="_blank"
                                                onclick="event.preventDefault();
                this.closest('form').submit();">
                                                <i class="ti ti-logout me-2 ti-sm"></i>
                                                <span class="align-middle">Log Out</span>
                                            </a>
                                        </li>
                                    </form>


                                </ul>
                            </li>
                            <!--/ User -->



                        </ul>
                    </div>


                </nav>

                <!-- / Navbar -->



                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">



                        <div class="row">


                            @yield('content')

                        </div>


                    </div>
                    <!-- / Content -->







                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>



        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>

    </div>
    <!-- / Layout wrapper -->







    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{asset('backend')}}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .swal2-popup.swal2-toast{
            margin-top: 80px
        }
    </style>

    <!-- endbuild -->





    <!-- Main JS -->
    <script src="{{asset('backend')}}/assets/js/main.js"></script>


    <!-- Page JS -->


    {{-- External Js --}}
    @yield('script')

</body>

</html>

<!-- beautify ignore:end -->
