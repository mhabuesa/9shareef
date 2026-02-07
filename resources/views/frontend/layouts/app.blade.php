<!doctype html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="{{asset('frontend')}}/assets/img/favicon.png">

    <!-- Title -->
    <title>@yield('title', 'App') | {{ config('app.name', '9 Shareef') }}</title>

    <!--Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/swiper-bundle.min.css">

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/custom.css">
</head>

<body>
    <!--loading -->
    <div class="loading">
        <div class="loading__circle"></div>
    </div>
    <!--/-->

    <!-- Header -->
    @include('frontend.layouts.partials.header')
    <!--Header End-->

    <!--main-->
    <main class="main">
        @yield('content')

        <!--newslettre-->
        @include('frontend.layouts.partials.newslettre')
        <!--newslettre end-->
    </main>

    <!--footer-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <p class="footer__copyright-text">© Copyright 2024
                            <a href="#" class="footer__copyright-link">AssiaGroupe</a>, All rights reserved.
                        </p>
                    </div>
                    <div class="btn-back-top">
                        <a href="#" class="btn-back-top__link">
                            <i class="bi bi-arrow-up btn-back-top__icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Search-form-->
    @include('frontend.layouts.partials.search')
    <!--Search-form end-->

    <!--plugins -->
    <script src="{{asset('frontend')}}/assets/js/jquery.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/swiper-bundle.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/masonry.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/theia-sticky-sidebar.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/ajax-contact.js"></script>
    <script src="{{asset('frontend')}}/assets/js/switch.js"></script>

    <!-- JS main  -->
    <script src="{{asset('frontend')}}/assets/js/main.js"></script>

    @stack('footer_scripts')

</body>

</html>
