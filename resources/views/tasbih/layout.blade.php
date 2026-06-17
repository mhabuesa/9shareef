<!DOCTYPE html>

<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('backend') }}/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>@yield('title')</title>
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/logo/saab.jpg" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/rtl/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet"
        href="{{ asset('backend') }}/assets/vendor/libs/%40form-validation/umd/styles/index.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/pages/page-auth.css">

    <!-- Helpers -->
    <script src="{{ asset('backend') }}/assets/vendor/js/helpers.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/js/template-customizer.js"></script>
    <script src="{{ asset('backend') }}/assets/js/config.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">




    <style>
        @font-face {
            font-family: Sirajee_Humayra;
            src: url({{ asset('frontend') }}/assets/fonts/bangla/Li_Sirajee_Humayra_Unicode.ttf);
        }

        @font-face {
            font-family: LiMahfujAK;
            src: url({{ asset('frontend') }}/assets/fonts/bangla/LiMahfujAKUnicode.ttf);
        }

        @font-face {
            font-family: Alinur;
            src: url({{ asset('frontend') }}/assets/fonts/bangla/LiAlinurTarunyaUnicode-Regular.ttf);
        }

        @font-face {
            font-family: QyyumBook;
            src: url({{ asset('frontend') }}/assets/fonts/bangla/QyyumBook.ttf);
        }

        @font-face {
            font-family: Arabic;
            src: url({{ asset('frontend') }}/assets/fonts/arabic/LateefRegOT.ttf);
        }

        .ar_font {
            font-family: "Arabic";
            font-size: 25px;
        }

        .bn_font {
            font-family: "QyyumBook";
            width: 100%;
        }
    </style>

    @stack('style')

</head>

<body>


    @yield('content')



    <!-- Core JS -->
    <script src="{{ asset('backend') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('backend') }}/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('backend') }}/assets/js/main.js"></script>


    <!-- Page JS -->
    <script src="{{ asset('backend') }}/assets/js/pages-auth.js"></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                    from = '#00b09b';
                    to = '#96c93d';
                    break;
                default:
                    from = '#00b09b';
                    to = '#96c93d';
                    break;
            }
            console.log(type, bg);

            Toastify({
                text,
                duration: 5000,
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

    @if (session('success'))
        <script>
            showToast('{{ session('success') }}', 'success');
        </script>
    @endif

    @if (session('error'))
        <script>
            showToast('{{ session('error') }}', 'error');
        </script>
    @endif

    @stack('script')

</body>
</html>
