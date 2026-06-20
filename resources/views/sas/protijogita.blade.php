<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
    data-theme="theme-default" data-assets-path="{{ asset('backend') }}/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Protijogita Application Form</title>


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

                        <div class="faq-header d-flex flex-column justify-content-center align-items-center rounded"
                            style="background: url('{{ asset('uploads') }}/pic/noor_bg.png'); background-repeat: no-repeat; background-size: cover; min-height: 300px !important;">

                            <h4 class="text-center  bn_font"> মহাসম্মানিত ও মহাপবিত্র সাইয়্যিদু সাইয়্যিদিল আ’দাদ
                                মহাপবিত্র ১২ই শরীফ <br>
                                এবং মহাসম্মানিত ও মহাপবিত্র সাইয়্যিদু সাইয়্যিদিশ শুহূরিল আ’যম রবীউল আঊওয়াল শরীফ উপলক্ষে
                            </h4>
                            <h2 class="text-center  bn_font m_0"> ৪০ দিনব্যাপী</h2>
                            <h1 class="text-center  bn_font"> বিশেষ প্রতিযোগিতা মাহফিল</h1>

                        </div>
                        <div class="mt-3">
                            <h4 class="text-center  bn_font"> প্রতিযোগিতায় অংশগ্রহণের আবেদন পত্র</h4>
                        </div>

                        <form action="{{ route('protijogita.store') }}" method="POST">
                            @csrf

                            <div class="row mt-4">
                                <!-- Navigation -->
                                <div class="col-lg-3 col-md-4 col-12 mb-md-0 mb-3 p-3 border rounded card">
                                    <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
                                        <h4 class="text-center  bn_font"> প্রতিযোগির তথ্য</h4>
                                        <div class="mt-2">
                                            <label for="nav-accordion" class="form-label">নাম <strong
                                                    class="text-danger">*</strong></label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="আপনার নাম লিখুন" value="{{ old('name') }}" required>
                                        </div>
                                        <div class="mt-2">
                                            <label for="nav-accordion" class="form-label">হাতিফ (মোবাইল) <small
                                                    class="text-muted">(ঐচ্ছিক)</small></label>
                                            <input type="text" name="phone" class="form-control"
                                                placeholder="আপনার মোবাইল নম্বর লিখুন" value="{{ old('phone') }}">
                                        </div>
                                        <div class="mt-2">
                                            <label for="nav-accordion" class="form-label">প্রফাইল আইডি <strong
                                                    class="text-danger">*</strong></label>
                                            <input type="text" name="profile_id" class="form-control"
                                                placeholder="আপনার প্রফাইল আইডি লিখুন" value="{{ old('profile_id') }}"
                                                required>

                                            @error('profile_id')
                                                <p class="text-danger text-center">এই প্রফাইল আইডি ইতিমধ্যে ব্যবহার করা
                                                    হয়েছে</p>
                                            @enderror
                                        </div>
                                        <div class="mt-2">
                                            <label for="nav-accordion" class="form-label">জন্ম তারিখ <strong
                                                    class="text-danger">*</strong></label>
                                            <div class="row">
                                                <div class="col-4">
                                                    <select name="month" class="form-select me-2" required>
                                                        <option value="">মাস</option>
                                                        @for ($i = 1; $i <= 12; $i++)
                                                            <option value="{{ $i }}"
                                                                {{ old('month') == $i ? 'selected' : '' }}>
                                                                {{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col-4 px-1">
                                                    <input type="number" name="day" min="1"
                                                        max="31" step="1" class="form-control"
                                                        placeholder="দিন" value="{{ old('day') }}" required>
                                                </div>
                                                <div class="col-4">
                                                    <input type="number" name="year" min="1900"
                                                        max="{{ date('Y') }}" step="1"
                                                        class="form-control" placeholder="বছর"
                                                        value="{{ old('year') }}" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mt-2">
                                            <label for="nav-accordion" class="form-label">ঠিকানা <small
                                                    class="text-muted">(ঐচ্ছিক)</small></label>
                                            <textarea type="text" name="address" class="form-control" placeholder="আপনার ঠিকানা লিখুন">{{ old('address') }}</textarea>
                                        </div>
                                        <div class="mt-4 border w-75 pt-3 pb-3 m-auto bg-success rounded">
                                            <h5 class="m-0 text-center text-white" id="feeBox">হাদিয়ার পরিমাণ: 0
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Navigation -->

                                <!-- FAQ's -->
                                <div class="col-lg-9 col-md-8 col-12">
                                    <div id="accordionPayment" class="accordion">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="text-center bn_font"> প্রতিযোগিতার বিষয়বস্তু</h4>
                                            </div>
                                            <div class="card-body">
                                                <h4 class=" bn_font"> আবশ্যিক বিষয়সমূহ</h4>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h5 class="card-title">
                                                            <input type="checkbox" disabled checked
                                                                class="form-check-input me-2">
                                                            ১. নূরে মুজাসসাম হাবীবুল্লাহ হুযূর পাক ছল্লাল্লাহু আলাইহি
                                                            ওয়া সাল্লাম উনার পবিত্র নসবনামা মুবারক
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" disabled checked
                                                                class="form-check-input me-2">
                                                            ২. পবিত্র তিলাওয়াতে কালামে পাক
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" disabled checked
                                                                class="form-check-input me-2">
                                                            ৩. পবিত্র মীলাদ শরীফ ও ক্বিয়াম শরীফ
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" disabled checked
                                                                class="form-check-input me-2">
                                                            ৪. পবিত্র শাজরা শরীফ
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" disabled checked
                                                                class="form-check-input me-2">
                                                            ৫. ১০০ খানা পরিভাষা মুবারক
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" disabled checked
                                                                class="form-check-input me-2">
                                                            ৬. জানাযার নামায উনার তারতীব
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" disabled checked
                                                                class="form-check-input me-2">
                                                            ৭. ইলমে তাছাওউফ উনার ১১টি বিষয়
                                                        </h5>







                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <h4 class=" bn_font"> ঐচ্ছিক বিষয় </h4>
                                                @error('topics')
                                                    <p class="text-danger"> প্রতিযোগিতার বিষয়বস্তু সিলেক্ট করুন </p>
                                                @enderror
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h5 class="card-title">
                                                            <input type="checkbox" class="form-check-input me-2"
                                                                id="one" name="topics[]" value="1">
                                                            <label for="one">১. হিফযুল কুরআন শরীফ</label>
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" class="form-check-input me-2"
                                                                id="two" name="topics[]" value="2">
                                                            <label for="two"> ২. হিফযুল হাদীছ শরীফ</label>
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" class="form-check-input me-2"
                                                                id="three" name="topics[]" value="3">
                                                            <label for="three"> ৩. হামদ শরীফ, না’ত শরীফ, ক্বাছীদাহ
                                                                শরীফ,
                                                                কবিতা আবৃতি</label>
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" class="form-check-input me-2"
                                                                id="four" name="topics[]" value="4">
                                                            <label for="four"> ৪. আযান ও ইক্বামত</label>
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" class="form-check-input me-2"
                                                                id="five" name="topics[]" value="5">
                                                            <label for="five"> ৫. জুমুয়া ও ঈদের খুতবা</label>
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" class="form-check-input me-2"
                                                                id="six" name="topics[]" value="6">
                                                            <label for="six"> ৬. মৌলিক আক্বীদাসমূহ</label>
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" class="form-check-input me-2"
                                                                id="seven" name="topics[]" value="7">
                                                            <label for="seven"> ৭. বিতির নামাযের তারতীব</label>
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" class="form-check-input me-2"
                                                                id="eight" name="topics[]" value="8">
                                                            <label for="eight"> ৮. মুনযিয়াত ও মুহলিকাতসমূহ</label>
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" class="form-check-input me-2"
                                                                id="nine" name="topics[]" value="9">
                                                            <label for="nine"> ৯. বিষয়ভিত্তিক ওয়াজ</label>
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" class="form-check-input me-2"
                                                                id="ten" name="topics[]" value="10">
                                                            <label for="ten"> ১০. উপস্থিত ওয়াজ</label>
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" class="form-check-input me-2"
                                                                id="eleven" name="topics[]" value="11">
                                                            <label for="eleven"> ১১. ভাষাভিত্তিক ওয়াজ (আরবী, উর্দু,
                                                                ফারসী ও ইংরেজি)</label>
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" class="form-check-input me-2"
                                                                id="twelve" name="topics[]" value="12">
                                                            <label for="twelve"> ১২. বিষয়ভিত্তিক রচনা</label>
                                                        </h5>
                                                        <h5 class="card-title">
                                                            <input type="checkbox" class="form-check-input me-2"
                                                                id="thirteen" name="topics[]" value="13">
                                                            <label for="thirteen"> ১৩. উপস্থিত রচনা</label>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card-body">
                                                <h4 class=" bn_font"> বিষয় ভিত্তিক ওয়াজ ও বিষয় ভিত্তিক রচনার বিষয়সমূহ
                                                </h4>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h5 class="card-title">

                                                            <div id="topicBox">
                                                                <label for="fourteen">অনুগ্রহ করে জন্ম তারিখ সিলেক্ট
                                                                    করুন</label>
                                                            </div>
                                                        </h5>

                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light btn-buy-now w-50 m-auto mb-4">আবেদন
                                                প্রদান করুন <i class="fa-regular fa-paper-plane mx-2"></i></button>

                                        </div>
                                    </div>
                                    <!-- /FAQ's -->


                                </div>


                        </form>


                        <!-- /Contact -->

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


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("[id^='copyButton']").forEach(button => {
                button.addEventListener("click", function() {
                    let buttonId = this.id.replace("copyButton",
                        "text"); // সংশ্লিষ্ট text ID বের করা
                    let textElement = document.getElementById(buttonId);

                    if (textElement) {
                        let range = document.createRange();
                        let selection = window.getSelection();

                        selection.removeAllRanges(); // আগের সিলেকশন মুছে ফেলা
                        range.selectNodeContents(textElement);
                        selection.addRange(range);

                        // কপি করা
                        try {
                            document.execCommand("copy");

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
                                title: "কপি হয়েছে!"
                            });

                        } catch (err) {
                            console.error("Copy failed!", err);
                        }
                    }
                });
            });
        });
    </script>


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


    {{-- <script>
        let timeout = null;

        document.querySelector('input[name="birth_date"]').addEventListener('input', function() {

            clearTimeout(timeout);

            let dob = this.value;

            timeout = setTimeout(() => {

                if (!dob) return;

                axios.post("{{ route('competition.calculate') }}", {
                        birth_date: dob,
                        _token: "{{ csrf_token() }}"
                    })
                    .then(res => {

                        // 🔥 always clear first (IMPORTANT)
                        document.getElementById('feeBox').innerHTML = "Fee: -";
                        document.getElementById('topicBox').innerHTML = "";

                        if (res.data.status) {

                            document.getElementById('feeBox').innerHTML =
                                "হাদিয়ার পরিমাণ: " + res.data.fee + " টাকা";

                            document.getElementById('topicBox').innerHTML =
                                ` <input type="checkbox" class="form-check-input me-2"
                                                                id="fourteen" name="fourteen">` +
                                `<label for="fourteen">${res.data.topic}</label>`;
                        }

                    });

            }, 500); // delay 0.5 sec

        });
    </script> --}}


    {{-- <script>
        let timeout = null;

        function calculateCompetition() {

            clearTimeout(timeout);

            let month = document.querySelector('[name="month"]').value;
            let day = document.querySelector('[name="day"]').value;
            let year = document.querySelector('[name="year"]').value;

            if (!month || !day || !year) {
                return;
            }

            timeout = setTimeout(() => {

                axios.post("{{ route('competition.calculate') }}", {
                        month: month,
                        day: day,
                        year: year,
                        _token: "{{ csrf_token() }}"
                    })
                    .then(res => {

                        document.getElementById('feeBox').innerHTML =
                            "হাদিয়ার পরিমাণ: -";

                        document.getElementById('topicBox').innerHTML =
                            'অনুগ্রহ করে জন্ম তারিখ সিলেক্ট করুন';

                        if (res.data.status) {

                            document.getElementById('feeBox').innerHTML =
                                "হাদিয়ার পরিমাণ: " + res.data.fee + " টাকা";

                            document.getElementById('topicBox').innerHTML =
                                `<input type="checkbox" class="form-check-input me-2"
                            id="fourteen" name="fourteen">
                        <label for="fourteen">${res.data.topic}</label>`;
                        }

                    });

            }, 500);
        }

        document.querySelector('[name="month"]').addEventListener('change', calculateCompetition);
        document.querySelector('[name="day"]').addEventListener('input', calculateCompetition);
        document.querySelector('[name="year"]').addEventListener('input', calculateCompetition);
    </script> --}}

    <script>
        let timeout = null;

        function calculateCompetition() {

            clearTimeout(timeout);

            let month = document.querySelector('[name="month"]').value;
            let day = document.querySelector('[name="day"]').value;
            let year = document.querySelector('[name="year"]').value;

            // সব ফিল্ড পূরণ না হলে reset করে দাও
            if (!month || !day || !year) {

                document.getElementById('feeBox').innerHTML =
                    "হাদিয়ার পরিমাণ: 0";

                document.getElementById('topicBox').innerHTML =
                    '<label>অনুগ্রহ করে জন্ম তারিখ সিলেক্ট করুন</label>';

                return;
            }

            timeout = setTimeout(() => {

                axios.post("{{ route('competition.calculate') }}", {
                        month: month,
                        day: day,
                        year: year,
                        _token: "{{ csrf_token() }}"
                    })
                    .then(res => {

                        // Reset
                        document.getElementById('feeBox').innerHTML =
                            "হাদিয়ার পরিমাণ: 0";

                        document.getElementById('topicBox').innerHTML =
                            '<label>অনুগ্রহ করে জন্ম তারিখ সিলেক্ট করুন</label>';

                        if (res.data.status) {

                            document.getElementById('feeBox').innerHTML =
                                "হাদিয়ার পরিমাণ: " + res.data.fee + " টাকা";

                            document.getElementById('topicBox').innerHTML = `
                            <input type="checkbox"
                                class="form-check-input me-2"
                                id="fourteen" name="topics[]" value="14">

                            <label for="fourteen">
                                ${res.data.topic}
                            </label>
                        `;
                        }

                    })
                    .catch(error => {
                        console.error(error);

                        document.getElementById('feeBox').innerHTML =
                            "হাদিয়ার পরিমাণ: 0";

                        document.getElementById('topicBox').innerHTML =
                            '<label>অনুগ্রহ করে জন্ম তারিখ সিলেক্ট করুন</label>';
                    });

            }, 500);
        }

        // Events
        document.querySelector('[name="month"]')
            .addEventListener('change', calculateCompetition);

        document.querySelector('[name="day"]')
            .addEventListener('input', calculateCompetition);

        document.querySelector('[name="year"]')
            .addEventListener('input', calculateCompetition);

        // Page reload/back/validation error হলে auto calculate
        document.addEventListener('DOMContentLoaded', function() {

            let month = document.querySelector('[name="month"]').value;
            let day = document.querySelector('[name="day"]').value;
            let year = document.querySelector('[name="year"]').value;

            if (month && day && year) {
                calculateCompetition();
            }
        });
    </script>




</body>

</html>

<!-- beautify ignore:end -->
