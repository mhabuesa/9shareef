<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
    data-theme="theme-default" data-assets-path="{{ asset('backend') }}/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Protijogita Application Form Submitted</title>


    <meta name="description" content="40 Days Protijogita Application Form" />
    <meta name="keywords"
        content="40 Days Protijogita Application Form, Protijogita Application Form, 40 Days Competition Application Form, Competition Application Form, 40 Days Protijogita, Protijogita, 40 Days Competition, Competition" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/logo/saab.jpg" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

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


    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/pages/page-faq.css" />

    <style>
        @font-face {
            font-family: QyyumBook;
            src: url({{ asset('frontend') }}/assets/fonts/bangla/QyyumBook.ttf);
        }

        .bn_font {
            font-family: "QyyumBook";
        }

        .m_0 {
            margin: 0px !important;
        }

        /* Chrome, Edge, Safari */
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>

    <style>
        body {
            background: #f4f7fb;
        }

        .info-box {
            background: #fff;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            padding: 20px;
            transition: .3s;
            height: 100%;
        }

        .info-box:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, .08);
        }

        .info-box span {
            color: #6c757d;
            display: block;
            margin-bottom: 8px;
        }

        .info-box h5 {
            margin: 0;
            font-weight: 700;
        }

        .card {
            border-radius: 20px;
        }

        .success-header {
            background: linear-gradient(135deg, #009c39, #00cf4c);
        }
    </style>

</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page" style="padding-left: 0px !important">
                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container">

                        <div class="container py-5">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">

                                    <div class="card border-0 shadow-lg overflow-hidden">

                                        <!-- Header -->
                                        <div class="text-white text-center p-5 success-header">
                                            <div class="mb-3">
                                                <i class="fas fa-circle-check" style="font-size:80px;"></i>
                                            </div>

                                            <h1 class="fw-bold mb-2 bn_font text-white">
                                                আলহামদুলিল্লাহ!
                                            </h1>

                                            <h3 class="bn_font text-white">
                                                আপনার আবেদন সফলভাবে জমা হয়েছে
                                            </h3>
                                        </div>

                                        <!-- Body -->
                                        <div class="card-body p-5">

                                            {{-- <div class="alert alert-success border-0 shadow-sm">
                                                <h5 class="mb-2">
                                                    🎉 স্বাগতম!
                                                </h5>

                                                <p class="mb-0 bn_font">
                                                    আপনার আবেদনপত্র সফলভাবে গ্রহণ করা হয়েছে। যাচাই শেষে
                                                    প্রয়োজনীয় তথ্য আপনাকে জানিয়ে দেওয়া হবে ইনশাআল্লাহ।
                                                </p>
                                            </div> --}}

                                            <!-- Applicant Info -->
                                            <h4 class="mb-4 text-center">
                                                আবেদনকারীর তথ্য
                                            </h4>

                                            <div class="row g-3">

                                                <div class="col-md-6">
                                                    <div class="info-box">
                                                        <span>নাম</span>
                                                        <h5>{{ $participant->name }}</h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="info-box">
                                                        <span>বয়স</span>
                                                        <h5>{{ $participant->age }}</h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="info-box">
                                                        <span>গ্রুপ</span>
                                                        <h5>{{ $participant->group }}</h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="info-box">
                                                        <span>মোবাইল</span>
                                                        <h5>{{ $participant->phone }}</h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="info-box">
                                                        <span>ঠিকানা</span>
                                                        <h5>{{ $participant->address }}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info-box">
                                                        <span>হাদিয়ার পরিমাণ</span>
                                                       <h5>{{ number_format($participant->fee, 0) }} টাকা</h5>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Mandatory Topics -->
                                            <div class="mt-5">
                                                <div class="card border-0 shadow-sm">
                                                    <div class="card-body">

                                                        <h4 class="text-center mb-4">
                                                            আবশ্যিক বিষয়সমূহ
                                                        </h4>

                                                        <div class="row">
                                                            <div class="topic-item">
                                                                <i class="fas fa-check-circle text-success"></i>
                                                                নূরে মুজাসসাম হাবীবুল্লাহ হুযূর পাক ছল্লাল্লাহু আলাইহি
                                                                ওয়া সাল্লাম উনার পবিত্র নসবনামা মুবারক
                                                            </div>
                                                            <div class="topic-item">
                                                                <i class="fas fa-check-circle text-success"></i>
                                                                পবিত্র তিলাওয়াতে কালামে পাক
                                                            </div>
                                                            <div class="topic-item">
                                                                <i class="fas fa-check-circle text-success"></i>
                                                                পবিত্র মীলাদ শরীফ ও ক্বিয়াম শরীফ
                                                            </div>
                                                            <div class="topic-item">
                                                                <i class="fas fa-check-circle text-success"></i>
                                                                পবিত্র শাজরা শরীফ
                                                            </div>
                                                            <div class="topic-item">
                                                                <i class="fas fa-check-circle text-success"></i>
                                                                ১০০ খানা পরিভাষা মুবারক
                                                            </div>
                                                            <div class="topic-item">
                                                                <i class="fas fa-check-circle text-success"></i>
                                                                জানাযার নামায উনার তারতীব
                                                            </div>
                                                            <div class="topic-item">
                                                                <i class="fas fa-check-circle text-success"></i>
                                                                ইলমে তাছাওউফ উনার ১১টি বিষয়
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Applied Topics -->
                                            <div class="mt-5">
                                                <div class="card border-0 shadow-sm">
                                                    <div class="card-body">

                                                        <h4 class="text-center mb-4">
                                                            অংশগ্রহণের বিষয়সমূহ
                                                        </h4>

                                                        <div class="row">

                                                            @foreach ($participant->topics as $topic)
                                                                <div class="topic-item">
                                                                    <i class="fas fa-check-circle text-success"></i>
                                                                    {{ $topic->topic }}
                                                                </div>
                                                            @endforeach

                                                            @if ($participant->topics->where('id', 14)->count())
                                                                <div class="topic-item mt-4">
                                                                    <span class="d-block fw-bold">বিষয় ভিত্তিক ওয়াজ ও রচনা</span>
                                                                    <i class="fas fa-check-circle text-success"></i>
                                                                    {{ $participant->waz_topic }}
                                                                </div>
                                                            @endif

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Notice -->
                                            <div class="mt-5">
                                                <div class="card bg-light border-0">
                                                    <div class="card-body">
                                                        <h5 class="mb-3">
                                                            📌 গুরুত্বপূর্ণ নির্দেশনা
                                                        </h5>

                                                        <ul class="mb-0">
                                                            <li>প্রতিযোগিতার সময়সূচী  সুমহান দরবার শরীফ উনার মুল ভবনের ৫ম তলা (মসজিদ) এর নোটিশবোর্ড থেকে দেখে নিবেন।</li>
                                                            <li>নির্ধারিত হাদিয়া প্রদান করুন ।</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- / Content -->
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

    </div>
    <!-- / Layout wrapper -->




    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

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



    <!-- Main JS -->
    <script src="{{ asset('backend') }}/assets/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Page JS -->


    @if (session('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "{{ session('success') }}"
            });
        </script>
    @endif


</body>

</html>

<!-- beautify ignore:end -->
