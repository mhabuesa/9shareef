<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
    data-theme="theme-default" data-assets-path="{{ asset('frontend') }}/result/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>9 Shareef Quiz Result</title>


    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/logo/saab.jpg" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/result/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/result/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/result/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/result/vendor/css/rtl/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/result/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/result/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/result/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/result/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/result/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/result/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet"
        href="{{ asset('frontend') }}/result/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet"
        href="{{ asset('frontend') }}/result/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/result/vendor/css/pages/page-profile.css" />

    <!-- Helpers -->
    <script src="{{ asset('frontend') }}/result/vendor/js/helpers.js"></script>
    <script src="{{ asset('frontend') }}/result/js/config.js"></script>
    <style>
        @font-face {
            font-family: QyyumBook;
            src: url({{ asset('frontend') }}/assets/fonts/bangla/QyyumBook.ttf);
        }

        body {
            font-family: QyyumBook;
        }
    </style>


</head>

<body>



    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  layout-without-menu">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">


                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">



                        <!-- Header -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="user-profile-header-banner">
                                        <img src="{{ asset($cover) }}" alt="Banner image" class="rounded-top">
                                    </div>
                                    <div
                                        class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                                        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                                            <img src="{{ asset('frontend') }}/result/img/avatars/1.png"
                                                alt="user image"
                                                class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                                        </div>
                                        <div class="flex-grow-1 mt-3 mt-sm-5">
                                            <div
                                                class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                                                <div class="user-profile-info">
                                                    <h4 class="fw-bold mb-1">SAAB</h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Header -->

                        <div class="row">
                            <div class="col-lg-6 m-auto">
                                <div class="card table-responsive">
                                    <div class="card-header">
                                        <h2 class="text-center">মুবারকবাদ জানাই আপনাদের</h2>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <tr style="font-weight: 650">
                                                <th>নং</th>
                                                <th>নাম</th>
                                                <th>মোবাইল</th>
                                                <th>ছবি মিলানোর সময়</th>
                                            </tr>
                                            @foreach ($winners as $winner)
                                                <tr style="font-weight: 500">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="text-capitalize">{{ $winner->name }}</td>
                                                    <td>
                                                        <span id="info">{{ $winner->phone }}</span>
                                                    </td>
                                                    <td>{{ $winner->solved_time }}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/ User Profile Content -->

                    </div>
                    <!-- / Content -->






                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>










        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->

        <script src="{{ asset('frontend') }}/result/vendor/libs/jquery/jquery.js"></script>
        <script src="{{ asset('frontend') }}/result/vendor/libs/popper/popper.js"></script>
        <script src="{{ asset('frontend') }}/result/vendor/js/bootstrap.js"></script>
        <script src="{{ asset('frontend') }}/result/vendor/libs/node-waves/node-waves.js"></script>
        <script src="{{ asset('frontend') }}/result/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="{{ asset('frontend') }}/result/vendor/libs/hammer/hammer.js"></script>
        <script src="{{ asset('frontend') }}/result/vendor/libs/i18n/i18n.js"></script>
        <script src="{{ asset('frontend') }}/result/vendor/libs/typeahead-js/typeahead.js"></script>


        <!-- endbuild -->

        <!-- Vendors JS -->



        <!-- Main JS -->
        <script src="{{ asset('frontend') }}/result/js/main.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {

                function convertBanglaToEnglishNumber(str) {
                    const bangla = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
                    const english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

                    for (let i = 0; i < bangla.length; i++) {
                        str = str.replaceAll(bangla[i], english[i]);
                    }
                    return str;
                }

                document.querySelectorAll("#info").forEach(function(el) {

                    let value = el.innerText.trim();

                    // Bangla → English number convert
                    value = convertBanglaToEnglishNumber(value);

                    // ✅ Email
                    if (value.includes("@")) {

                        let parts = value.split("@");
                        let username = parts[0];
                        let domain = parts[1];

                        if (domain === "gmail.com") {
                            let first = username.substring(0, 2);
                            let last = username.substring(username.length - 2);
                            el.innerText = first + "...." + last + "@gmail.com";
                        } else {
                            el.innerText = value;
                        }

                    }
                    // ✅ Phone
                    else if (/^\d+$/.test(value) && value.length >= 8) {

                        // middle 6 digits
                        let start = Math.floor((value.length - 0) / 2);
                        let middleSix = value.substring(start, start + 6);

                        el.innerText = "....." + middleSix ;
                    }

                });

            });
        </script>


        <!-- Page JS -->



</body>


</html>

<!-- beautify ignore:end -->
