<!doctype html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="{{ asset('frontend') }}/assets/img/favicon.png">

    <!-- Title -->
    <title>@yield('title', 'App') | {{ config('app.name', '9 Shareef') }}</title>

    <!--Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/swiper-bundle.min.css">

    <!-- Font Awesome Free CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/custom.css">

    <!-- Toastify -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    @stack('header_scripts')
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
                        <p class="footer__copyright-text">© Copyright {{ date('Y') }}
                            <a href="{{ route('index') }}" class="footer__copyright-link">SAAB</a>, All rights reserved.
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

    @include('frontend.layouts.partials.countdown')

    <!--plugins -->
    <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/masonry.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/theia-sticky-sidebar.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/switch.js"></script>

    <!-- JS main  -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/custom.js"></script>

    <!-- Toastify -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- Toastify -->
    <script>
        // Ajax setup
        const csrf = $('meta[name="csrf-token"]').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrf
            }
        });


        // Toast
        function showToast(text, type = 'success') {
            let bg;
            switch (type) {
                case 'error':
                    from = '#ff5b5c';
                    to = '#ff5b5c';
                    break;
                case 'success':
                    from = '#f67280';
                    to = '#f88a9a';
                    break;
                default:
                    from = '#00b09b';
                    to = '#96c93d';
                    break;
            }
            console.log(type, bg);

            Toastify({
                text,
                duration: 3000,
                gravity: "top",
                position: "right",
                close: true,
                stopOnFocus: true,
                style: {
                    background: `linear-gradient(to right, ${from}, ${to})`
                },
                onClick: function() {}
            }).showToast();
        }
    </script>

    @session('success')
    <script>
        showToast('{{ session('success') }}', 'success');
    </script>
    @endif

    @if (session('error'))
        <script>
            showToast('{{ session('error') }}', 'error');
        </script>
    @endif

    @stack('footer_scripts')

</body>

</html>
