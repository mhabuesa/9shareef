<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>

    <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('quiz') }}/fonts/font.css">

    <!-- fontawesome 5 -->
    <link rel="stylesheet" href="{{ asset('quiz') }}/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('quiz') }}/css/Bootstrap/bootstrap.min.css">

    <!-- Custom Css Files -->
    <link rel="stylesheet" href="{{ asset('quiz') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('quiz') }}/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('quiz') }}/css/animation.css">

    <!-- result css -->
    <link rel="stylesheet" href="{{ asset('quiz') }}/css/custom.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"
        integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        @font-face {
            font-family: QyyumBook;
            src: url({{ asset('frontend') }}/assets/fonts/bangla/QyyumBook.ttf);
        }
        .selectize-input {
            height: 200px !important;
        }
    </style>
</head>

<body>

    <main class="overflow-hidden">
        <div class="container">
            <form action="{{ route('quiz.store') }}" method="POST">
                @csrf
                <div class="show-section wrapper bn_font">

                    <!-- step 0 -->
                    <section class="steps">

                        <!-- header -->
                        <header>
                            অনুগ্রহ করে আপনার তথ্য দিন!
                            <p class="fs-4 m-0 p-0 text-warning">
                                <span class="countdown-timer"></span>
                            </p>
                            <div class="h-border"></div>
                        </header>

                        <!-- form area -->
                        <div class="quiz-inner">
                            <div class="row flex-1">

                                <div class="tab-100 col-md-6 m-auto">
                                    <!-- form 1 -->
                                    <fieldset id="step0" method="post" novalidate="">
                                        <div class="form-inner">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="bounce-left">
                                                        <label>নাম</label>
                                                        <input class="form-control" type="text" name="name"
                                                            placeholder="নাম" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="bounce-left mt-3">
                                                        <label>ঠিকানা</label>
                                                        <input class="form-control" type="address" name="address"
                                                            placeholder="ঠিকানা" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next-prev">
                                            <button id="step0btn" class="next mt-5" type="button">
                                                এগিয়ে যান <i class="fa-solid fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <!-- footer -->
                        <footer class="mt-2">
                            <div class="step-number">
                                Question <span>0</span> / 4
                            </div>
                        </footer>
                    </section>


                    <!-- step 1 -->
                    <section class="steps">

                        <!-- header -->
                        <header>
                            প্রশ্নের উত্তর দিন
                            <p class="fs-4 m-0 p-0 text-warning">
                                <span class="countdown-timer">সমাপ্ত</span>
                            </p>
                            <div class="h-border"></div>
                        </header>

                        <!-- form area -->
                        <div class="quiz-inner">
                            <div class="row flex-1">
                                <div class="tab-100 col-md-12 m-auto">
                                    <!-- form 1 -->
                                    <fieldset id="step1" method="post" novalidate="">
                                        <div class="form-inner">
                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="bounce-left radio-field mt-3">
                                                        <label class="fs-6">আল মানছূর লক্বব মুবারকের অর্থ কি?</label>
                                                        <div class="col-lg-12">
                                                            <input class="radio1 checkmark mx-2" type="radio"
                                                                name="qs1" id="opt1_1" value="সাহায্যকারী">
                                                            <label class="fs-6" for="opt1_1">সাহায্যকারী</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio1 checkmark mx-2" type="radio"
                                                                name="qs1" id="opt1_2" value="সাহায্যপ্রাপ্ত">
                                                            <label class="fs-6" for="opt1_2">সাহায্যপ্রাপ্ত</label>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <input class="radio1 checkmark mx-2" type="radio"
                                                                name="qs1" id="opt1_3" value="উত্তম সাহায্য">
                                                            <label class="fs-6" for="opt1_3">উত্তম সাহায্য</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio1 checkmark mx-2" type="radio"
                                                                name="qs1" id="opt1_4" value="সাহায্যবান">
                                                            <label class="fs-6" for="opt1_4">সাহায্যবান</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 ">
                                                    <div class="bounce-left radio-field mt-3">
                                                        <label class="fs-5">লাইলাতুল এ’লান কি?</label>
                                                        <div class="col-lg-12">
                                                            <input class="radio2 checkmark mx-2" type="radio"
                                                                name="qs2" id="opt2_1" value="খিলাফতের ঘোষনা">
                                                            <label class="fs-6" for="opt2_1">খিলাফতের ঘোষনা</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio2 checkmark mx-2" type="radio"
                                                                name="qs2" id="opt2_2" value="বিলাদত শরীফ উনার রাত">
                                                            <label class="fs-6" for="opt2_2">নিসবাতুল আযীম উনার রাত</label>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <input class="radio2 checkmark mx-2" type="radio"
                                                                name="qs2" id="opt2_3" value="নিসবাতুল আযীম তারিখ ঘোষনার দিন">
                                                            <label class="fs-6" for="opt2_3">নিসবাতুল আযীম তারিখ ঘোষনার দিন</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio2 checkmark mx-2" type="radio"
                                                                name="qs2" id="opt2_4" value="নিসবাতুল আযীম তারিখ ঘোষনার রাত">
                                                            <label class="fs-6" for="opt2_4">নিসবাতুল আযীম তারিখ ঘোষনার রাত</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="bounce-left radio-field mt-3">
                                                        <label class="fs-5">লাইলাতুল এ’লান কবে?</label>
                                                        <div class="col-lg-12">
                                                            <input class="radio3 checkmark mx-2" type="radio"
                                                                name="qs3" id="opt3_1" value="২২ শে জুমাদাল উলা">
                                                            <label class="fs-6" for="opt3_1">২২ শে জুমাদাল উলা</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio3 checkmark mx-2" type="radio"
                                                                name="qs3" id="opt3_2" value="২১ শে জুমাদাল উলা">
                                                            <label class="fs-6" for="opt3_2">২১ শে জুমাদাল উলা</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio3 checkmark mx-2" type="radio"
                                                                name="qs3" id="opt3_3" value="২৭ শে রজব">
                                                            <label class="fs-6" for="opt3_3">২৭ শে রজব</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio3 checkmark mx-2" type="radio"
                                                                name="qs3" id="opt3_4" value="১৫ ই শা’বান">
                                                            <label class="fs-6" for="opt3_4">১৫ ই শা’বান</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="bounce-left radio-field mt-3">
                                                        <label class="fs-5">কুরআন শরীফ খতম কবে ও কত মিনিটে হবে?</label>
                                                        <div class="col-lg-12">
                                                            <input class="radio4 checkmark mx-2" type="radio"
                                                                name="qs4" id="opt4_1" value="৬ষ্ঠ রমাদ্বান ৯ মিনিট">
                                                            <label class="fs-6" for="opt4_1">৬ষ্ঠ রমাদ্বান ৯ মিনিট</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio4 checkmark mx-2" type="radio"
                                                                name="qs4" id="opt4_2" value="৬ষ্ঠ রমাদ্বান ৯০ মিনিট">
                                                            <label class="fs-6" for="opt4_2">৬ষ্ঠ রমাদ্বান ৯০ মিনিট</label>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <input class="radio4 checkmark mx-2" type="radio"
                                                                name="qs4" id="opt4_3" value="৭ম রমাদ্বান ২৭ মিনিট">
                                                            <label class="fs-6" for="opt4_3">৭ম রমাদ্বান ২৭ মিনিট</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio4 checkmark mx-2" type="radio"
                                                                name="qs4" id="opt4_4" value="৫ম রমাদ্বান ১৮ মিনিট">
                                                            <label class="fs-6" for="opt4_4">৫ম রমাদ্বান ১৮ মিনিট</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="bounce-left radio-field mt-3">
                                                        <label class="fs-5">আইয়্যামে নূর অর্থ কি?</label>
                                                        <div class="col-lg-12">
                                                            <input class="radio5 checkmark mx-2" type="radio"
                                                                name="qs5" id="opt5_1" value="নূরের দিনগুলো">
                                                            <label class="fs-6" for="opt5_1">নূরের দিনগুলো</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio5 checkmark mx-2" type="radio"
                                                                name="qs5" id="opt5_2" value="আলোকিত রাত">
                                                            <label class="fs-6" for="opt5_2">আলোকিত রাত</label>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <input class="radio5 checkmark mx-2" type="radio"
                                                                name="qs5" id="opt5_3" value="বরকতময় দিন">
                                                            <label class="fs-6" for="opt5_3">বরকতময় দিন</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio5 checkmark mx-2" type="radio"
                                                                name="qs5" id="opt5_4" value="বরকতময় মুহুর্ত">
                                                            <label class="fs-6" for="opt5_4">বরকতময় মুহুর্ত</label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="bounce-left radio-field mt-3">
                                                        <label class="fs-5">আইয়্যামে নূর উনার আগামী কালের কার্যক্রম কি?</label>

                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs6" id="opt6_1" value="মীলাদ শরীফ">
                                                            <label class="fs-6" for="opt6_1">মীলাদ শরীফ</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs6" id="opt6_2" value="কুরআন শরীফ খতম">
                                                            <label class="fs-6" for="opt6_2">কুরআন শরীফ খতম</label>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs6" id="opt6_3" value="অনলাইনে ৯০০০ লিখা ছড়ানো">
                                                            <label class="fs-6" for="opt6_3">অনলাইনে ৯০০০ লিখা ছড়ানো</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs6" id="opt6_4" value="সামা শরীফ">
                                                            <label class="fs-6" for="opt6_4">সামা শরীফ</label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-5">
                                                    <div class="bounce-left radio-field mt-3">
                                                        <label class="fs-5">নিসবাতুল আযীমে খলীফাতুল উমাম আলাইহিস সালাম কখন অনুষ্ঠিত হয়?</label>

                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs7" id="opt7_1" value="২২ শে শাওওয়াল বাদ মাগরীব">
                                                            <label class="fs-6" for="opt7_1">২২ শে শাওওয়াল বাদ মাগরীব</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs7" id="opt7_2" value="২২ শে শাওওয়াল বাদ ইশা">
                                                            <label class="fs-6" for="opt7_2">২২ শে শাওওয়াল বাদ ইশা</label>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs7" id="opt7_3" value="১৯ শে শাওওয়াল বাদ ইশা">
                                                            <label class="fs-6" for="opt7_3">১৯ শে শাওওয়াল বাদ ইশা</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs7" id="opt7_4" value="২০ শে শাওওয়াল বাদ মাগরীব">
                                                            <label class="fs-6" for="opt7_4">২০ শে শাওওয়াল বাদ মাগরীব</label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-5">
                                                    <div class="bounce-left radio-field mt-3">
                                                        <label class="fs-5">আইয়্যামে নূর উনার ৯০ মিনিটে ৯০০ বার মীলাদ শরীফ কখন অনুষ্ঠিত হবে?</label>

                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs8" id="opt8_1" value="৬ই রমাদ্বান শরীফ">
                                                            <label class="fs-6" for="opt8_1">৬ই রমাদ্বান শরীফ</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs8" id="opt8_2" value="৭ই রমাদ্বান শরীফ">
                                                            <label class="fs-6" for="opt8_2">৭ই রমাদ্বান শরীফ</label>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs8" id="opt8_3" value="৮ই রমাদ্বান শরীফ">
                                                            <label class="fs-6" for="opt8_3">৮ই রমাদ্বান শরীফ</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs8" id="opt8_4" value="৯ই রমাদ্বান শরীফ">
                                                            <label class="fs-6" for="opt8_4">৯ই রমাদ্বান শরীফ</label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-5">
                                                    <div class="bounce-left radio-field mt-3">
                                                        <label class="fs-5">'খ্বলীফাতুল উমাম' লক্বব মুবারকের অর্থ কি?</label>

                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs9" id="opt9_1" value="সবার খলীফা">
                                                            <label class="fs-6" for="opt9_1">সবার খলীফা</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs9" id="opt9_2" value="উম্মতের খলীফা">
                                                            <label class="fs-6" for="opt9_2">উম্মতের খলীফা</label>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs9" id="opt9_3" value="উম্মতসমূহের খলীফা">
                                                            <label class="fs-6" for="opt9_3">উম্মতসমূহের খলীফা</label>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="radio6 checkmark mx-2" type="radio"
                                                                name="qs9" id="opt9_4" value="আখেরী উম্মতের খলীফা">
                                                            <label class="fs-6" for="opt9_4">আখেরী উম্মতের খলীফা</label>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="next-prev">
                                            <button class="prev" type="button">
                                                <i class="fa-solid fa-arrow-left"></i>তথ্য ‍দিন
                                            </button>
                                            <button id="step1btn" class="next" type="button">
                                                পরবর্তী প্রশ্ন<i class="fa-solid fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <!-- footer -->
                        <footer class="mt-2">
                            <div class="step-number">
                                Question <span>1</span> / 4
                            </div>
                        </footer>
                    </section>

                    <!-- step 2 -->
                    <section class="steps">

                        <!-- header -->
                        <header>
                            'খলীফাতুল উমাম আলাইহিস সালাম উনার লকব মুবারক লিখুন।
                            <p class="fs-4 m-0 p-0 text-warning">
                                <span class="countdown-timer">সমাপ্ত</span>
                            </p>
                            <div class="h-border"></div>
                        </header>

                        <!-- form area -->
                        <div class="quiz-inner">
                            <div class="row flex-1">
                                <div class="tab-100 col-md-10 m-auto">
                                    <!-- form 2 -->
                                    <form id="step2" method="post" novalidate="">
                                        <div class="form-inner">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="bounce-left">
                                                        <label>এখানে লিখুন</label> <br>
                                                        <small class="text-danger">(বানান শুদ্ধ করে লিখতে হবে। একটি লকব
                                                            লিখে ,(কমা) ব্যবহার করুন।)</small>
                                                        <input type="text" id="input-tags" name="lokob" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next-prev">
                                            <button class="prev" type="button">
                                                <i class="fa-solid fa-arrow-left"></i>পূর্ববর্তী প্রশ্ন
                                            </button>
                                            <button id="step2btn" class="next" type="button">
                                                পরবর্তী প্রশ্ন<i class="fa-solid fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- footer -->
                        <footer class="mt-2">
                            <div class="step-number">
                                Question <span>2</span> / 4
                            </div>
                        </footer>
                    </section>

                    <!-- step 3 -->
                    <section class="steps">

                        <!-- header -->
                        <header>
                            নিম্নে লিখিত অগুছালো শব্দ দ্বারা বাক্য সাজান।
                            <p class="fs-4 m-0 p-0 text-warning">
                                <span class="countdown-timer">সমাপ্ত</span>
                            </p>
                            <div class="h-border"></div>
                        </header>

                        <!-- form area -->
                        <div class="quiz-inner">
                            <div class="row flex-1">
                                <div class="tab-100 col-md-10 m-auto">
                                    <!-- form 2 -->
                                    <fieldset id="step3" method="post" novalidate="">
                                        <div class="form-inner">
                                            <div class="row">

                                                <div class="col-md-12 mb-5">
                                                    <div class="delay-300 bounce-left">
                                                        <div class="container">
                                                            <h3 class="mb-3">প্রথম ‍<span class="text-danger">*
                                                                </span></h3>
                                                            <textarea id="sentenceInput1" class="form-control mb-3" name="sentence1" placeholder="শব্দ সিলেক্ট করুন" readonly
                                                                rows="2"></textarea>
                                                            <div id="wordButtons1" class="d-flex flex-wrap">
                                                                <!-- Words will be generated here -->
                                                            </div>
                                                            <button class="btn btn-danger mt-3" type="button"
                                                                onclick="clearSentence1()">Clear</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mt-4 mb-5">
                                                    <div class="delay-300 bounce-left">
                                                        <div class="container">
                                                            <h3 class="mb-2">দ্বিতীয় <span class="text-danger">*
                                                                </span></h3>
                                                            <textarea id="sentenceInput2" class="form-control mb-3" name="sentence2" placeholder="শব্দ সিলেক্ট করুন" readonly
                                                                rows="2"></textarea>
                                                            <div id="wordButtons2" class="d-flex flex-wrap">
                                                                <!-- Words will be generated here -->
                                                            </div>
                                                            <button class="btn btn-danger mt-3" type="button"
                                                                onclick="clearSentence2()">Clear</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mt-4 mb-5">
                                                    <div class="delay-300 bounce-left">
                                                        <div class="container">
                                                            <h3 class="mb-2">তৃতীয় <span class="text-danger">*
                                                                </span></h3>
                                                            <textarea id="sentenceInput3" class="form-control mb-3" name="sentence3" placeholder="শব্দ সিলেক্ট করুন" readonly
                                                                rows="2"></textarea>
                                                            <div id="wordButtons3" class="d-flex flex-wrap">
                                                                <!-- Words will be generated here -->
                                                            </div>
                                                            <button class="btn btn-danger mt-3" type="button"
                                                                onclick="clearSentence3()">Clear</button>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="next-prev">
                                            <button class="prev" type="button">
                                                <i class="fa-solid fa-arrow-left"></i>পূর্ববর্তী প্রশ্ন
                                            </button>
                                            <button id="step3btn" class="next" type="button">
                                                পরবর্তী প্রশ্ন<i class="fa-solid fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <!-- footer -->
                        <footer class="mt-2">
                            <div class="step-number">
                                Question <span>3</span> / 5
                            </div>
                        </footer>
                    </section>


                    <!-- step 4 -->
                    <section class="steps">

                        <!-- header -->
                        <header class="p-2">
                            <p class="fs-6">উল্লেখিত অক্ষর গুলো দিয়ে যেকোন ক্বাছীদাহ শরীফ উনার প্রথম লাইন লিখুন।</p>
                            <p class="fs-4 m-0 p-0 text-warning">
                                <span class="countdown-timer">সমাপ্ত</span>
                            </p>
                            <div class="h-border"></div>
                        </header>

                        <!-- form area -->
                        <div class="quiz-inner">
                            <div class="row flex-1">
                                <div class="tab-100 col-md-10 m-auto">
                                    <!-- form 2 -->
                                    <fieldset id="step4" method="post" novalidate="">
                                        <div class="form-inner">
                                            <div class="row">

                                                <div class="col-md-12 mb-4">
                                                    <div class="delay-100 bounce-left">
                                                        <label class="fs-5">“ম” দিয়ে একটি লাইন লিখুন।</label>
                                                        <textarea class="form-control" name="qaseedah1" id="" rows="1"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <div class="delay-100 bounce-left">
                                                        <label class="fs-5">“ম” দিয়ে একটি লাইন লিখুন।</label>
                                                        <textarea class="form-control" name="qaseedah2" id="" rows="1"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <div class="delay-100 bounce-left">
                                                        <label class="fs-5">“দ” দিয়ে একটি লাইন লিখুন।</label>
                                                        <textarea class="form-control" name="qaseedah3" id="" rows="1"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <div class="delay-100 bounce-left">
                                                        <label class="fs-5">“হ” দিয়ে একটি লাইন লিখুন।</label>
                                                        <textarea class="form-control" name="qaseedah4" id="" rows="1"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next-prev mt-5" style="margin-top: 150px !important">
                                            <button class="prev" type="button">
                                                <i class="fa-solid fa-arrow-left"></i>পূর্ববর্তী প্রশ্ন
                                            </button>
                                            <button id="sub" class="apply" type="submit">
                                                জমা করুন
                                            </button>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <!-- footer -->
                        <footer class="mt-2">
                            <div class="step-number">
                                Question <span>4</span> / 4
                            </div>
                        </footer>
                    </section>


                    <!-- step 5 -->
                    {{-- <section class="steps">

                        <!-- header -->
                        <header>
                            <p class="fs-3">প্রদত্ত ছবি অনুযায়ী খন্ড ছবি গুলো মিলিয়ে একটি পূর্ণ ছবি তৈরী করুন।</p>
                            <p class="fs-4 m-0 p-0 text-warning">
                                <span class="countdown-timer">সমাপ্ত</span>
                            </p>
                            <div class="h-border"></div>
                        </header>

                        <!-- form area -->
                        <div class="quiz-inner">
                            <div class="row flex-1">
                                <div class="tab-100 col-md-10 m-auto">
                                    <!-- form 1 -->
                                    <fieldset id="step5" method="post" novalidate="">
                                        <div class="form-inner mb-5">
                                            <div class="row mb-5">
                                                <div class="col-md-6">
                                                    <div class="bounce-left text-center mb-3">
                                                        <label class="form-label fs-5">ছবিটি অনুসরণ করুন</label> <br>
                                                        <img width="70%"
                                                            src="{{ asset('uploads') }}/pic/9_Shareef_Profile_photo.jpg"
                                                            alt="side-image">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-5">
                                                    <g id="puzzle-container"
                                                        style="--i:url({{ asset('uploads') }}/pic/9_Shareef_Profile_photo.jpg)">
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                        <z><a></a><b draggable="true"></b></z>
                                                    </g>

                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="puzzle" id="puzzle-value" value="0">
                                        <div class="next-prev mt-5" style="margin-top: 150px !important">
                                            <button class="prev" type="button">
                                                <i class="fa-solid fa-arrow-left"></i>পূর্ববর্তী প্রশ্ন
                                            </button>
                                            <button id="sub" class="apply" type="submit">
                                                জমা করুন
                                            </button>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <!-- footer -->
                        <footer class="mt-2">
                            <div class="step-number">
                                Question <span>5</span> / 5
                            </div>
                        </footer>
                    </section> --}}


                </div>
            </form>

            <p class="d-none" id="date">{{ $dateTime->end_date }} {{ $dateTime->end_time }} </p>
        </div>

    </main>


    <div id="error">

    </div>


    <!-- bootstrap 5 -->
    <script src="{{ asset('quiz') }}/js/Bootstrap/bootstrap.min.js"></script>

    <!-- jQuery -->
    <script src="{{ asset('quiz') }}/js/jQuery/jquery-3.6.3.min.js"></script>

    <!-- result js -->
    <script src="{{ asset('quiz') }}/js/result.js"></script>

    <!-- Custom js -->
    <script src="{{ asset('quiz') }}/js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
        integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        $("#input-tags").selectize({
            delimiter: ",",
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input,
                };
            },
        });

        const inputField = document.getElementById("input-tags");

        // 1️⃣ Right Click Paste Block
        inputField.onpaste = function(event) {
            event.preventDefault();
        };

        // 2️⃣ Ctrl + V, Shift + Insert, Meta + V (Mac) Paste Block
        inputField.addEventListener("keydown", function(event) {
            if ((event.ctrlKey || event.metaKey) && event.key.toLowerCase() === "v") {
                event.preventDefault();
            }
        });

        // 3️⃣ Drag & Drop Paste Block
        inputField.addEventListener("drop", function(event) {
            event.preventDefault();
        });

        // 4️⃣ Context Menu (Right Click) Disable (Optional)
        inputField.addEventListener("contextmenu", function(event) {
            event.preventDefault();
        });

        // 5️⃣ Browser Insert Paste Block (Modern Browsers)
        inputField.addEventListener("beforeinput", function(event) {
            if (event.inputType === "insertFromPaste") {
                event.preventDefault();
            }
        });
    </script>


    <script>
        const wordSets = [
            ["দুনিয়াতে", "ইয়া", "মারহাবা", "আনেন", "শাহযাদা", "তাশরীফ"],
            ["অংশগ্রহন ", "আমিও", "করবো", "কবুলের", "কার্যক্রমে", "কথা", "দোয়া "],
            ["আক্বা", "কুরবান", "ইশকে", "চাই", "আপনার", "হতে"]
        ];

        wordSets.forEach((words, index) => {
            const wordButtons = document.getElementById(`wordButtons${index + 1}`);
            const sentenceInput = document.getElementById(`sentenceInput${index + 1}`);

            words.forEach(word => {
                const button = document.createElement("button");
                button.textContent = word;
                button.classList.add("btn", "btn-primary", "word-btn");
                button.type = "button";
                button.onclick = function() {
                    sentenceInput.value += (sentenceInput.value ? " " : "") + word;
                };
                wordButtons.appendChild(button);
            });

            window[`clearSentence${index + 1}`] = function() {
                sentenceInput.value = "";
            };
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const puzzlePieces = document.querySelectorAll("z b");
            const puzzleInput = document.getElementById("puzzle-value");
            let correctPieces = 0;

            // Check if all puzzle pieces are in correct positions
            function checkPuzzle() {
                correctPieces = 0;
                puzzlePieces.forEach(piece => {
                    const transform = window.getComputedStyle(piece).transform;
                    if (transform ===
                        'matrix(1, 0, 0, 1, 0, 0)') { // You can check for the specific "correct" transform values
                        correctPieces++;
                    }
                });

                // Display success or failure message
                if (correctPieces === puzzlePieces.length) {
                    puzzleInput.value = 1;
                }
            }

            // Listen for when the puzzle piece is moved or released
            puzzlePieces.forEach(piece => {
                piece.addEventListener("dragend", checkPuzzle);
            });
        });
    </script>




</body>

</html>
