<!DOCTYPE html>

<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('backend') }}/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Verify | Love9</title>
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

        .bn_font {
            font-family: "QyyumBook";
            width: 100%;
        }
    </style>

</head>

<body>


    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Login -->
                <div class="card ">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <a href="{{ route('tasbih.verify', $phone) }}" class="app-brand-link">
                                <img class="rounded-circle" src="{{asset('frontend')}}/assets/img/logo/love9.png" alt="">
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-1 pt-1 text-center bn_font">মাশুকী দুনিয়ায় <br> আপনার OTP নিশ্চিত করুন</h4>
                        <p class="mb-1 pt-1 text-center bn_font">
                            {{ substr($phone, 0, 5) . '****' . substr($phone, -2) }}
                        </p>



                        <form id="formAuthentication" class="mb-3 bn_font" action="{{ route('tasbih.verified', $phone) }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="otp" class="form-label">OTP <small class="text-danger">*</small> </label>
                                <input type="text" class="form-control" id="otp" name="otp"
                                    placeholder="আপনার OTP দিন" autofocus required value="{{ old('otp') }}">
                                @error('otp')
                                    <small class="text-danger">অনুগ্রহ করে আপনার OTP দিন</small>
                                @enderror
                                @if (session('error'))
                                    <small class="text-danger">{{ session('error') }}</small>
                                @endif
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">নিশ্চিত করুন</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- / Content -->






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

</body>


</html>
