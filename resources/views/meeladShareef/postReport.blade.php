<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
    data-theme="theme-default" data-assets-path="{{ asset('backend') }}/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Online Post Report | Love9</title>


    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
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

                            <h1 class="text-center  bn_font"> আইয়্যামে নূর উপলক্ষে ৯টি পোস্ট ও রিপোর্ট
                                প্রদান</h1>

                        </div>

                        <div class="row mt-4">
                            <!-- Navigation -->
                            <div class="col-lg-3 col-md-4 col-12 mb-md-0 mb-3">
                                <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
                                    <ul class="nav nav-align-left nav-pills flex-column">
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab"
                                                data-bs-target="#first">
                                                <i class="fa-solid fa-1 me-2"></i>
                                                <span class="align-middle fw-medium">তিনি কে ?</span>
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#second">
                                                <i class="fa-solid fa-2 me-2"></i>
                                                <span class="align-middle fw-medium">তিনি কেমন ?</span>
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#thired">
                                                <i class="fa-solid fa-3 me-2"></i>
                                                <span class="align-middle fw-medium">কোথায় কিভাবে কাটে উনার শিশুকাল
                                                    ?</span>
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fourth">
                                                <i class="fa-solid fa-4 me-2"></i>
                                                <span class="align-middle fw-medium">কিভাবে অতিবাহিত হয় উনার কৈশোর
                                                    ?</span>
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fiveth">
                                                <i class="fa-solid fa-5 me-2"></i>
                                                <span class="align-middle fw-medium">কোথায় উনার বিচরণ ?</span>
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sixth">
                                                <i class="fa-solid fa-6 me-2"></i>
                                                <span class="align-middle fw-medium">উম্মাহর কল্যাণে উনার অবদান কতটুকু
                                                    ?</span>
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#seventh">
                                                <i class="fa-solid fa-7 me-2"></i>
                                                <span class="align-middle fw-medium">উনার হাক্বীক্বত কি ?</span>
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#eighth">
                                                <i class="fa-solid fa-8 me-2"></i>
                                                <span class="align-middle fw-medium">কিভাবে কাটে উনার প্রতিটি দিন
                                                    ?</span>
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#ninth">
                                                <i class="fa-solid fa-9 me-2"></i>
                                                <span class="align-middle fw-medium">উনার শুকরিয়া আদায়ে আমি বাধ্য কেন
                                                    ?</span>
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="d-none d-md-block">
                                        <div class="mt-4">
                                            <img src="{{ asset('uploads') }}/pic/aiyam-e-noor.png" class="img-fluid"
                                                width="270" alt="FAQ Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Navigation -->

                            <!-- FAQ's -->
                            <div class="col-lg-9 col-md-8 col-12">
                                <div class="tab-content py-0">
                                    <div class="tab-pane fade show active" id="first" role="tabpanel">
                                        <div class="d-flex mb-3 justify-content-between">
                                            <div>
                                                <h3 class="mb-0">
                                                    <p class="align-middle">তিনি কে ?</p>
                                                </h3>
                                            </div>
                                            <div>
                                                <h3 class="mb-0 ">
                                                    <button class="btn btn-primary btn-sm"
                                                        id="copyButton1">Copy</button>
                                                </h3>
                                            </div>
                                        </div>
                                        <div id="accordionPayment" class="accordion">
                                            <div class="card">

                                                <div id="text1" class="accordion-collapse collapse show">
                                                    <div class="accordion-body">
                                                        <p>তিনি কে ? <br>
                                                            সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম তিনি কে? <br>
                                                            সারা বিশ্বে মশহূর ঢাকা রাজারবাগ দরবার শরীফের মহান মুরশিদ
                                                            ক্বিবলা সাইয়্যিদুনা হযরত সুলত্বানুন নাছীর আলাইহিস সালাম উনার
                                                            এবং ঢাকা রাজারবাগ দরবার শরীফের মহান আম্মাজী সাইয়্যিদাতুনা
                                                            হযরত উম্মুল উমাম আলাইহাস সালাম উনার ছাহেবযাদা একমাত্র ছেলে
                                                            সন্তান হলেন সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম
                                                            তিনি। <br>
                                                            তিনি পিতৃ-মাতৃ উভয়কুলে আখেরী রসূল ছল্লাল্লাহু আলাইহি ওয়া
                                                            সাল্লাম উনার আওলাদ বা বংশধর। <br>
                                                            তিনি মুফাসসিরে কুরআন, তিনি হাকিমে হাদীছ, তিনি সর্বোচ্চ
                                                            মাক্বামের ফক্বীহ, তিনি জাহিরী-বাতিনী সর্বপ্রকার ইলমে অভিজ্ঞ।
                                                            <br>
                                                            চলবে....🌹 <br>
                                                            #love9 <br>
                                                            #SAAB_Activities
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="tab-pane" id="second" role="tabpanel">
                                        <div class="d-flex mb-3 justify-content-between">
                                            <div>
                                                <h3 class="mb-0">
                                                    <p class="align-middle">তিনি কেমন ?</p>
                                                </h3>
                                            </div>
                                            <div>
                                                <h3 class="mb-0 ">
                                                    <button class="btn btn-primary btn-sm"
                                                        id="copyButton2">Copy</button>
                                                </h3>
                                            </div>
                                        </div>
                                        <div id="accordionPayment" class="accordion">
                                            <div class="card">

                                                <div id="text2" class="accordion-collapse collapse show">
                                                    <div class="accordion-body">
                                                        <p>তিনি কেমন ? <br>
                                                            সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম তিনি কেমন?
                                                            <br>
                                                            তিনি সবদিক হতে মানানসই। <br>
                                                            উনাকে দেখলে শামায়েলে তিরমিযীতে বর্ণিত আখেরী রসূল ছল্লাল্লাহু
                                                            আলাইহি ওয়া সাল্লাম উনার হুলিয়া বা অবয়ব মুবারক চিত্রিত হয়।
                                                            <br>
                                                            স্বাভাবিক উচ্চতায় উনার শরীর মুবারক মহান আল্লাহ পাক উনার
                                                            বিশেষ সৃষ্টি।
                                                            উনার জিসিম মুবারক অতীব নূরানী অত্যাধিক উজ্জ্বল গন্দম রঙ্গের।
                                                            উনার চুল মুবারক কোকড়ানো নয় আবার পুরো সোজাও নয়। <br>
                                                            কুচকুচে কালো উনার চাপ দাড়ি মুবারক, উনার হাসোজ্জল চেহারা
                                                            মুবারক, টোলপড়া উনার গাল মুবারক, উনার গাড়ো কালো চক্ষু মুবারক,
                                                            উনার দীর্ঘ নাসিকা মুবারক, উনার কর্ণ মুবারক সবই সাক্ষাতে ধন্য
                                                            প্রত্যেককে বিমোহিত করে। <br>
                                                            অতীব কোমল উনার হাত মুবারক ও পা মুবারক কদমবুছীকারীকে আবেগে
                                                            আপ্লুত করে। <br>
                                                            উনার গাম্ভীর্যতা ইমামুছ ছানী হযরত হাসান আলাইহিস সালাম উনার
                                                            স্মরণ করিয়ে দেয়। <br>
                                                            উনার দৃঢ়চিত্ততায় ইমামুছ ছালিছ হযরত হুসাইন আলাইহিস সালাম উনার
                                                            জালালিয়ত ফুটে উঠে। <br>
                                                            মূলত, সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম তিনি
                                                            কেমন তা এক কথায় বলতে হলে তিনি আখেরী রসূল ছল্লাল্লাহু আলাইহি
                                                            ওয়া সাল্লাম উনার পরিপূর্ণ নকশা মুবারক। উনার মেছাল তিনি
                                                            নিজেই। <br>
                                                            চলবে....🌹 <br>
                                                            #love9 <br>
                                                            #SAAB_Activities
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="thired" role="tabpanel">
                                        <div class="d-flex mb-3 justify-content-between">
                                            <div>
                                                <h3 class="mb-0">
                                                    <p class="align-middle">কোথায় কিভাবে কাটে উনার শিশুকাল ?</p>
                                                </h3>
                                            </div>
                                            <div>
                                                <h3 class="mb-0 ">
                                                    <button class="btn btn-primary btn-sm"
                                                        id="copyButton3">Copy</button>
                                                </h3>
                                            </div>
                                        </div>
                                        <div id="accordionPayment" class="accordion">
                                            <div class="card">

                                                <div id="text3" class="accordion-collapse collapse show">
                                                    <div class="accordion-body">
                                                        <p>কোথায় কিভাবে কাটে উনার শিশুকাল ? <br>
                                                            সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম উনার শিশুকাল
                                                            কোথায় কাটে? <br>
                                                            বাংলাদেশের রাজধানী ঢাকার প্রাণকেন্দ্র ছাহাবী রঙ্গের মারকাজ
                                                            রাজারবাগ শরীফে বিলাদত শরীফ গ্রহণ করে রাজারবাগ শরীফেই উনার
                                                            অবস্থান। <br>
                                                            তবে বিষয়টি অন্যান্যদের মত নয়। <br>
                                                            মুজাদ্দিদ পিতাজান আর উম্মুল উমাম আম্মাজান উনাদের একান্ত
                                                            পৃষ্ঠপোষকতায় তিনি লালিত পালিত। বিলাদত শরীফ গ্রহণ হতে অদ্যবধি
                                                            সুন্নতে নববীতে চলছে উনার প্রতিটি ক্ষণ। <br>
                                                            হারাম, নাজায়েজ, বিদয়াত, বেশরা এমনকি দৃষ্টিকটু কাজ হতেও তিনি
                                                            সংরক্ষিত। <br>
                                                            তা'যীন, তাহনীক, আক্বীক্বাহ হতে শুরু করে সবই সুন্নতী নিয়ম
                                                            মাফিক সম্পাদিত হয়। <br>
                                                            রাজারবাগ শরীফ সুন্নতী জামে মসজিদ ঘেসে উনার হুজরা শরীফ।
                                                            হাটা-চলা শুরু করার পর হতে জুমুয়া ও ঈদে প্রায়ই মহান পিতাজান
                                                            উনার সাথে মসজিদে গমন করতেন। <br>
                                                            সাধারণ শিশুরা যখন খেল তামাশায় মশগুল হতে চায়, তখন তিনি কুরআন
                                                            শরীফের সবক নেন। অযথা সময় ক্ষেপন না করে করতেন জিহাদের
                                                            অনুশীলন। তিলাওয়াত মশক, দৌড় প্রতিযোগিতা, নিশানা ঠিককরণ, দ্রুত
                                                            হস্ত লিখন এগুলো উনার দৈনিক কাজ। আর সুন্নতী তারতীবে খাদিমদের
                                                            পাগড়ী বেঁধে দেয়া ও দ্রুত পাগড়ী বাঁধার প্রতিযোগিতা উনার
                                                            অত্যাধিক পছন্দ। <br>
                                                            পবিত্র ৯ই রমাদ্বান শরীফ রাত ৯টায় লাইলাতুল ইছনাইনিল আযীম শরীফ
                                                            উনার বিলাদত শরীফ। সাইয়্যিদী নসবে আগমনকারী এ মহান মেহমান
                                                            সাইয়্যিদী শানে সর্বদা প্রস্ফুটিত হতেন। <br>
                                                            শৈশবকালেই মুহম্মদিয়া জামিয়া শরীফ মাদরাসায় যাতায়াত করে এ
                                                            মাদরাসাকে ধন্য করেন। মুবারক পদচারণায় উত্তরোত্তর বৃদ্ধি হয় এ
                                                            মাদরাসার মান। <br>
                                                            কবুতর আর খোরগোশ পালন ছিল উনার প্রশান্তির কারণ। উনার জন্য
                                                            সংরক্ষিত এলাকায় খাদিমদের নিয়ে দল বেঁধে সাইকেল চালিয়ে পরিবেশ
                                                            করতেন মুখরিত। <br>
                                                            শিশু বয়সেই মহান পিতাজান আর উম্মুল উমাম আম্মাজান উনাদের সাথে
                                                            দ্বীনি সফরে তিনি যে দেশের অধিকাংশ জেলায় গমন করেছেন, তা বলাই
                                                            বাহুল্য। যা দীর্ঘ আলোচনার অবকাশ রাখে। <br>
                                                            তবে হ্যাঁ, পরিচ্ছন্ন ও গুছানো ভাব আর লাজুকতা উনার আভিজাত্যকে
                                                            বারবার প্রকাশ করতো। <br>
                                                            এ কথা দিবালোকের চেয়েও সুস্পষ্ট যে, কেউ কখনোই উনার শিশু সুলভ
                                                            আচরণ দেখেনি। <br>
                                                            চলবে.........🌹 <br>
                                                            (ছবি: সাইয়্যিদুনা হযরত খলীফাতুল উমাম আলাইহিস সালাম উনার
                                                            সুন্নতি পাগড়ি মুবারক।) <br>
                                                            #love9 <br>
                                                            #SAAB_Activities</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="fourth" role="tabpanel">
                                        <div class="d-flex mb-3 justify-content-between">
                                            <div>
                                                <h3 class="mb-0">
                                                    <p class="align-middle">কিভাবে অতিবাহিত হয় উনার কৈশোর ?</p>
                                                </h3>
                                            </div>
                                            <div>
                                                <h3 class="mb-0 ">
                                                    <button class="btn btn-primary btn-sm"
                                                        id="copyButton4">Copy</button>
                                                </h3>
                                            </div>
                                        </div>
                                        <div id="accordionPayment" class="accordion">
                                            <div class="card">

                                                <div id="text4" class="accordion-collapse collapse show">
                                                    <div class="accordion-body">
                                                        <p>কিভাবে অতিবাহিত হয় উনার কৈশোর ? <br>
                                                            সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম উনার কৈশোর
                                                            কিভাবে অতিবাহিত হয়? <br>
                                                            উনার কৈশোর কেটেছে ইলম, তা'লীম, রিয়াদ্বত-মাশাক্কাত আর দ্বীনি
                                                            সফরে। <br>
                                                            বর্তমান সময়ে আমাদের সমাজে খেল-তামাশা করে, উড়নচণ্ডী হয়ে
                                                            বেপরোয়া ভাবে কিশোরদের সময় কাটে। জীবনের এ গুরুত্বপূর্ণ সময়টির
                                                            যথাযথ ব্যবহার তারা করেনা। কিন্তু এ সময়ে যে কত কাজ করা যায়,
                                                            তার বাস্তব প্রমাণ হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম তিনি।
                                                            <br>
                                                            বাজামায়াত তাকবীরে উলার সাথে নামাজ আদায় করার ব্যাপারে তিনি
                                                            ছিলেন অত্যাধিক সচেতন। এক্ষেত্রে বৃষ্টি বাদল, ঝড় তুফান,
                                                            বিদ্যুৎ বিভ্রাট কোন কিছুতেই তিনি হাল ছেড়ে দেননি। <br>
                                                            ইলমে তাছাউফের নির্ধারিত সবক্ব ও যিকির-ফিকির যথাসময়ে
                                                            যথাযথভাবে যথেষ্ট পরিমাণে সম্পন্ন করা দৈনিক উনার অপরিহার্য
                                                            কাজ। এতে কোন ব্যস্ততা ও অজুহাত বাঁধা হতে পারেনি। এমনকি
                                                            শারীরিক অসুস্থতাও নয়।
                                                            রুটিন করে বিষয় ভিত্তিক দরস তাদরীস ও ইলম অনুশীলনে তিনি ব্যস্ত
                                                            থাকতেন। এ ক্ষেত্রে কখনো কিতাব, কখনো খাতা আবার কখনো
                                                            লাইব্রেরীতে সময় অতিবাহিত করতেন। মহান পিতাজান উনার বিশাল
                                                            লাইব্রেরীর কত কিতাব যে উনার রপ্ত, তার হিসাব অজানা। আবার
                                                            কিতাবের গুরুত্বের বিবেচনায় তিনি নিজস্ব আলাদা লাইব্রেরীও গড়ে
                                                            তুলেন। জাহেরী ইলমের কোন কিছুই উনার অজানা নয়। <br>
                                                            উনার হায়াতে ত্বইয়্যিবায় দ্বীনি সফর গুরুত্বপূর্ণ বিষয়। ঈসায়ী
                                                            হিসাবে দুই হাজার সালে তিনি প্রথম সফরে বের হন। উনার সফরনামা
                                                            লিখতে শুরু করলে মোটা মোট কিতাব রচিত হবে। <br>
                                                            দ্বীনি সফরে প্রথম গমন করেন চট্টগ্রামে। উনার কদম মুবারক
                                                            ধুলিতে ধন্য সেখানের বন্দর, নৌ খাটি, নোঙরকৃত জাহাজ, সমুদ্র
                                                            সৈকত, চিড়িয়াখানা, লেক, পাহাড়। সেখানে ক্ষণে ক্ষণে উনার মুবারক
                                                            কারামত দেখে অভিভূত অনেকেই। <br>
                                                            কক্সবাজার, খাগড়াছড়ি, রাঙ্গামাটি, বান্দরবান, কুমিল্লা, ফেনী,
                                                            নূরপুর, আমানবাড়িয়া, চাঁদপুর এ সব জেলায় দ্বীনি সফরে তিনি
                                                            অনেকবার গমন করেছেন। <br>
                                                            তৎকালীন রাজশাহী বিভাগের বগুড়া, জয়পুরহাট, নওগাঁ, নাটোর,
                                                            চাঁপাইনবাবগঞ্জ, পাবনা, রাজশাহী, সিরাজগঞ্জ, দিনাজপুর,
                                                            গাইবান্ধা, কুড়িগ্রাম, লালমনিরহাট, নীলফামারী, পঞ্চগড়, রংপুর ও
                                                            ঠাকুরগাও এ জেলাগুলোতে টানা কয়েক বছর মহান পিতাজান ও আম্মাজান
                                                            উনাদের সাথে তিনি দ্বীনি সফরে গমন করেছেন।
                                                            উনার দ্বীনি সফরের তালিকায় ঢাকা বিভাগের কিশোরগঞ্জ, মাদারীপুর,
                                                            মানিকগঞ্জ, মুন্সিগঞ্জ, নূরানীবাদ জেলা, খুলনা বিভাগের যশোর,
                                                            ঝিনাইদহ, খুলনা, কুষ্টিয়া, মেহেরপুর, চুয়াডাঙ্গা জেলাও আছে। এ
                                                            ছাড়াও সিলেট বিভাগের সিলেট, হবিগঞ্জ, মৌলভীবাজার, সুনামগঞ্জ
                                                            জেলা আর বরিশাল বিভাগের ঝালকাঠি ও বরিশাল জেলাতেও তিনি সফর
                                                            করেছেন। <br>
                                                            এখানে একটা বিষয় উল্লেখ যে, উনার দ্বীনি সফরের উদ্বোধনী হয়েছে
                                                            উনার শিশুকালেই। কিন্তু শিশু কিশোর কোন বয়সের কোন ছাপ উনার
                                                            মাঝে প্রতিফলিত হয়নি। <br>
                                                            তাহাজ্জুদ নামাজের ব্যাপারে উনার যে একাগ্রতা তা বলার অপেক্ষা
                                                            রাখেনা। মুকীম অবস্থায় তো অবশ্যই এমনকি সফরের সময়েও এ বিষয়
                                                            তিনি ছিলেন সচেতন। <br>
                                                            শৈশবকাল থেকে সফরকালীন সময়ে তিনি খাছ সুন্নতী তারতীবে লাঠি
                                                            ব্যবহার করে খুতবা মুবারক দিয়ে নিজে ইমামতি করে খাদিমদেরকে
                                                            নিয়ে জুমুয়ার নামাজ আদায় করতেন। <br>
                                                            তখন দুনিয়াবি হায়াত মুবারক উনার যদিও কম কিন্তু প্রতিটি কথা
                                                            বলতেন ও কাজ করতেন বয়োজ্যেষ্ঠ বিজ্ঞ ও অভিজ্ঞ আলিমদের ন্যায়।
                                                            <br>
                                                            চলবে.........🌹 <br>
                                                            (ছবি: সমস্ত সময়ের মাঝেই শাহযাদা কিবলা উনার বিলাদত দিবস
                                                            পবিত্র ৯ই রমাদ্বান শরীফ উনার স্মরণ।) <br>
                                                            #love9 <br>
                                                            #SAAB_Activities
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="fiveth" role="tabpanel">
                                        <div class="d-flex mb-3 justify-content-between">
                                            <div>
                                                <h3 class="mb-0">
                                                    <p class="align-middle">কোথায় উনার বিচরণ ?</p>
                                                </h3>
                                            </div>
                                            <div>
                                                <h3 class="mb-0 ">
                                                    <button class="btn btn-primary btn-sm"
                                                        id="copyButton5">Copy</button>
                                                </h3>
                                            </div>
                                        </div>
                                        <div id="accordionPayment" class="accordion">
                                            <div class="card">

                                                <div id="text5" class="accordion-collapse collapse show">
                                                    <div class="accordion-body">
                                                        <p>কোথায় উনার বিচরণ ? <br>
                                                            সাইয়্যিদুনা হযরত খলীফাতুল উমাম আলাইহিস সালাম উনার বিচরণ
                                                            কোথায়? <br>
                                                            উনার জাহেরী বিচরণ যদিও রাজারবাগ শরীফে কিন্তু বাতেনী বিচরণ যে
                                                            কোথায়, তা চিন্তার উর্ধ্বে। তবে বাতেনীভাবে তিনি যে মহান
                                                            আল্লাহ পাক ও হুযূর পাক ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম উনাদের
                                                            সাথেই মিশে আছেন, তা বলার অপেক্ষাই রাখেনা। <br>
                                                            শিশুকাল ও কৈশোরকালে সাদা কাপড়ের কোর্তা ও সেলোয়ার ব্যবহার
                                                            করার পাশাপাশি শরীয়ত সম্মত দৃষ্টি নন্দন বিভিন্ন রঙিন কাপড়ের
                                                            কোর্তা ও সেলোয়ার তিনি পরিধান করতেন। এরপর একটা সময় আসলো তিনি
                                                            রঙ্গিন পোশাক পরিধান করেননা। সাদাতেই তিনি সুশোভিত। <br>
                                                            তিনি রঙ্গিন কোর্তা পরিধান করেননা, বাবরী চুল মুবারক রেখেছেন,
                                                            তাহলে এখনো কি তিনি শুধু সাদা পাগড়ীই পরিধান করবেন! <br>
                                                            নাকি মহান পিতাজান উনার সাথে মিল রেখে কালো-সবুজ পাগড়ীও পরিধান
                                                            করবেন, এমনি বহু কল্পনার অবসান ঘটিয়ে ১৪৩৯ হিজরীর পবিত্র ৯ই
                                                            রমাদ্বান শরীফ তিনি কালো রঙের পাগড়ী পরিধান করেন। 🖤 <br>
                                                            একটা সময়ে যদিও দ্বীনি সফরে বছরের অনেক দিন অতিবাহিত করতেন
                                                            কিন্তু প্রেক্ষাপটের ভিন্নতায় দরবার শরীফেই অবস্থান করতে
                                                            থাকেন। সংযুক্ত হয় নতুন ব্যস্ততা। <br>
                                                            কিতাবাদী পাঠ, ইলমী অনুশীলন আর দারস-তাদরীসের সাথে সাথে গবেষণা
                                                            ও তাজদীদী কাজেও তিনি ব্যাপক ভূমিকা রাখেন। <br>
                                                            সংশোধন বা শুদ্ধকরণে উনার অভিযানে যেমন আছে দ্বীনি বিষয় তেমনি
                                                            আছে দুনিয়াবী বিষয়। আছে যুগ যুগ ধরে চলে আসা অমিমাংসিত
                                                            বিষয়গুলোর ফায়সালা। <br>
                                                            ঈসায়ী ২০০৮ সালে 'গণিত পরিক্রমা' নামক প্রকাশনায় 'সমকোণ না
                                                            লম্বকোণ' শিরোনামের প্রবন্ধে তিনি গণিতবিদদের মস্তিষ্কের জট
                                                            খুলে দেন। জ্যামিতির বিষয়ে উনার এত সূক্ষ্ম ব্যাখ্যা পড়ে শুধু
                                                            আশ্চর্যই নয় বরং নতুন সূত্র পায় গণিতে অত্যাধিক অভিজ্ঞ ও
                                                            প্রসিদ্ধ গণিতবিদরা। <br>
                                                            তিনি থাকেন দরবার শরীফে কিন্তু আন্তর্জাতিক অনেক বিষয় এমনভাবে
                                                            আলোচনা করেন, যেন তিনি প্রত্যেকটি বিষয়ের প্রত্যক্ষদর্শী। <br>
                                                            ঢাকা বিশ্ববিদ্যালয়ের জীববিজ্ঞানের প্রফেসর মুবারক খিদমতে
                                                            মাত্র ৫ মিনিট অবস্থান করে জীববিজ্ঞান বিষয়ে উনার তাত্ত্বিক
                                                            পর্যালোচনা শুনে বলেন, আমি উনার ছাত্র হওয়ারও যোগ্য নই। তিনি
                                                            আমার চোখ কান খুলে দিলেন। <br>
                                                            নিউইয়র্কে হাসপাতালের আইসিইউ এর বেডে লাইফ সাপোর্টে থাকা রাশেদ
                                                            ছাহেব উনাকে স্মরণ করেন। পরক্ষণেই উনাকে চিকিৎসকের পোশাকে
                                                            দেখতে পান। স্বপ্ন নয়, বাস্তবেই তিনি রাশেদ ছাহেবের অপারেশন
                                                            সম্পন্ন করেন, অল্প সময়েই রাশেদ ছাহেবকে সুস্থ করে দেন। <br>
                                                            মূলত, উনার বিচরণ যে কোথায় কোথায়, তা এ লেখকের বোধগম্য নয়।
                                                            <br>
                                                            চলবে.........🌹 <br>
                                                            (ছবি: গণিত পরিক্রমা - ২০০৮ এ প্রকাশিত মুবারক তাজদীদী বাণী
                                                            মুবারক।) <br>
                                                            #love9 <br>
                                                            #SAAB_Activities
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="sixth" role="tabpanel">
                                        <div class="d-flex mb-3 justify-content-between">
                                            <div>
                                                <h3 class="mb-0">
                                                    <p class="align-middle">উম্মাহর কল্যাণে উনার অবদান কতটুকু ?</p>
                                                </h3>
                                            </div>
                                            <div>
                                                <h3 class="mb-0 ">
                                                    <button class="btn btn-primary btn-sm"
                                                        id="copyButton6">Copy</button>
                                                </h3>
                                            </div>
                                        </div>
                                        <div id="accordionPayment" class="accordion">
                                            <div class="card">

                                                <div id="text6" class="accordion-collapse collapse show">
                                                    <div class="accordion-body">
                                                        <p>উম্মাহর কল্যাণে উনার অবদান কতটুকু ? <br>
                                                            সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম উনার অবদান এই
                                                            উম্মাহর জন্য কতটুকু?
                                                            উম্মাহর কল্যানে উনার অবদান গাণিতিক হারে নয়, জ্যামিতিক হারেও
                                                            নয়, কোনভাবেই তা হিসেবে আনা সম্ভব নয়। তা অতলনীয় মহাসমুদ্র।
                                                            <br>
                                                            শত শত বছর যাবত মুসাফিরের যাওয়ার দুরত্ব ৪৮ মাইল ধরে হিসাব করা
                                                            হতো, তিনি এ ক্ষেত্রে বিশুদ্ধ হিসাব বের করেন। তিনি বলেন, ৪৮
                                                            মাইল নয় বরং ৫৪ মাইল হবে। এতে মুসলিম উম্মাহর নামাজের বিষয়টি
                                                            সংরক্ষিত হয়। মনে রাখতে হবে, নামাজ কিন্তু দ্বীন ইসলাম উনার
                                                            ভিত্তি। <br>
                                                            ছদক্বাতুল ফিতর আদায় না করলে রোযা আসমান ও যমীনের মাঝে ঝুলে
                                                            থাকে। মানুষ ফিতরা নির্ধারণ করে ১৬৫০ গ্রাম আটার দামে। এখানেও
                                                            হিসাবের গলদ তিনি ঠিক করেন। ১৬৫০ গ্রাম নয় বরং ১৬৫৭ গ্রাম আটার
                                                            দামে তিনি ফিতরার বিশুদ্ধ হিসাব প্রকাশ করেন। এতে দ্বীন ইসলাম
                                                            উনার আরেকটা ভিত্তি রোযা কবুলেরও নিশ্চয়তা আসে।
                                                            কাফিরদের গ্রেগরিয়ান ক্যালেন্ডার ব্যবহার করে মুসলমানরা
                                                            নিজেদের ঈমানকে নড়বড়ে করছিল। আখেরী রসূল হুযূর পাক ছল্লাল্লাহু
                                                            আলাইহি ওয়া সাল্লাম তিনি দুনিয়া হতে পর্দা মুবারক করার মাসের
                                                            সাথে নিসবত করে হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম তিনি
                                                            তাক্বউইমুশ শামসী বা মুসলমানদের জন্য সৌর পঞ্জিকা প্রণয়ন ও
                                                            প্রচলন করেন। এতে মুসলমানদের ঈমান, আমল, আক্বীদা, স্বকীয়তা,
                                                            তাহযীব-তামাদ্দুন সুরক্ষিত হয়। মুসলিম উম্মাহর জন্য এটা যে কত
                                                            মহান উনার অবদান তা বলার অপেক্ষাই রাখেন। <br>
                                                            'বিজ্ঞানে মুসলমানদের অবদান' এ কথাকে 'বিজ্ঞানই মুসলমানদের
                                                            অবদান' বাক্যে রুপান্তর করেন। এ রুপান্তরে মুসলমানদের আত্মিক
                                                            অবস্থা যে কতটুকু রুপান্তরিত হয়েছে, তা হিসেবের উর্ধ্বে
                                                            উনার অবদান লিপিবদ্ধ করা এ যেন মহাসমুদ্র হতে বিন্দু বিন্দু
                                                            পরিমাণ পানি তুলে আনার প্রচেষ্টা। <br>তারপরও চালাতে হবে এ
                                                            ক্ষুদ্র প্রয়াস। <br>
                                                            চলবে.........🌹 <br>
                                                            (ছবির ক্যাপশন নিষ্প্রয়োজন। আপনাকেই অর্থটা খুজে বের করতে
                                                            হবে।) <br>
                                                            #love9 <br>
                                                            #SAAB_Activities
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="seventh" role="tabpanel">
                                        <div class="d-flex mb-3 justify-content-between">
                                            <div>
                                                <h3 class="mb-0">
                                                    <p class="align-middle">উনার হাক্বীক্বত কি ?</p>
                                                </h3>
                                            </div>
                                            <div>
                                                <h3 class="mb-0 ">
                                                    <button class="btn btn-primary btn-sm"
                                                        id="copyButton7">Copy</button>
                                                </h3>
                                            </div>
                                        </div>
                                        <div id="accordionPayment" class="accordion">
                                            <div class="card">

                                                <div id="text7" class="accordion-collapse collapse show">
                                                    <div class="accordion-body">
                                                        <p>উনার হাক্বীক্বত কি ? <br>
                                                            সাইয়্যিদুনা হযরত খলীফাতুল উমাম আলাইহিস সালাম উনার হাক্বীক্বত
                                                            কত? <br>
                                                            উনার হাক্বীক্বত বুঝা কি কারো পক্ষে সম্ভব? সূর্য পশ্চিমে উদিত
                                                            হতে পারে কিন্তু উনার হাক্বীক্বত অনুধাবন করা অসম্ভব। <br>
                                                            প্রাথমিক অবস্থায় উনাকে 'ভাইয়া হুযূর' হিসেবে সম্বোধন করা হতো।
                                                            একটা সময় আসলো 'শাহজাদা হুযূর' নামে তিনি পরিচিত হন। সময়ের
                                                            আবর্তনে সারা বিশ্বব্যাপী 'খলীফাতুল উমাম' লক্বব মুবারকে তিনি
                                                            প্রসিদ্ধ ও পরিচিত হন। <br>
                                                            হযরত সুলত্বানুন নাছীর আলাইহিস সালাম তিনি নূরে মুজাসসাম
                                                            হাবীবুল্লাহ হুযূর পাক ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম উনার
                                                            সাথে হযরত আহলু বাইত শরীফ আলাইহিমুস সালাম উনাদের বিশেষ দীদার
                                                            মুবারকের ঘোষণা যতবার দিয়েছেন, প্রত্যেকবারই হযরত খলীফাতুল
                                                            উমাম আলাইহিস সালাম তিনিও ছিলেন। <br>
                                                            চার মাজহাবের চার ইমামকে ফায়িজ দিয়ে সতেজ ও সচল করার যে বিশেষ
                                                            ঘটনা, সেখানেও তিনি আছেন।
                                                            হুযূর পাক ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম উনাকে উনার কিশোর
                                                            বয়সী ছুরত মুবারকে দেখার রাশেদ ছাহেবের যে স্বপ্ন, সেখানেও
                                                            তিনি আছেন। <br>
                                                            আলমগীর ছাহেবের দেখা স্বপ্নে ইমামুছ ছালিছ হযরত হুসাইন আলাইহিস
                                                            সালাম হতে তিনিই জাহির হন।
                                                            উনারই বিলাদত শরীফ উপলক্ষে আয়োজিত মাহফিলে আসার জন্য স্বয়ং
                                                            হুযূর পাক ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম তিনি ইমদাদুল হক্ব
                                                            ছাহেবকে স্বপ্নে নির্দেশ মুবারক দেন। <br>
                                                            উনারই বিলাদত শরীফ উপলক্ষে আয়োজিত মাহফিলে হুযূর পাক
                                                            ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম উনাকে ছাহাবায়ে কিরাম
                                                            রদ্বিয়াল্লাহু তায়ালা আনহুম ও আম্বিয়া কিরাম আলাইহিমুস সালাম
                                                            উনাদেরসহ জাহির ও তদারকি করতে দেখেছেন উম্মু জাহিদুল্লাহ। <br>
                                                            এখন হযরত খলীফাতুল উমাম আলাইহিস সালাম উনার হাক্বীক্বত চিন্তা
                                                            করার দায়িত্ব আপনি পাঠকের। চিন্তা করুন, চিন্তিত হন, চিন্তার
                                                            বহিঃপ্রকাশ ঘটান। <br>
                                                            চলবে.........🌹 <br>
                                                            (ছবি: মুবারক লকবে পরিপূর্ণ আশিকের হৃদয়।) <br>
                                                            #love9 <br>
                                                            #SAAB_Activities
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="eighth" role="tabpanel">
                                        <div class="d-flex mb-3 justify-content-between">
                                            <div>
                                                <h3 class="mb-0">
                                                    <p class="align-middle">কিভাবে কাটে উনার প্রতিটি দিন ?</p>
                                                </h3>
                                            </div>
                                            <div>
                                                <h3 class="mb-0 ">
                                                    <button class="btn btn-primary btn-sm"
                                                        id="copyButton8">Copy</button>
                                                </h3>
                                            </div>
                                        </div>
                                        <div id="accordionPayment" class="accordion">
                                            <div class="card">

                                                <div id="text8" class="accordion-collapse collapse show">
                                                    <div class="accordion-body">
                                                        <p>কিভাবে কাটে উনার প্রতিটি দিন ? <br>
                                                            সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম উনার প্রতিটি
                                                            দিন কিভাবে কাটে? <br>
                                                            মহান আল্লাহ পাক উনার এবং আখেরী রসূল হুযূর পাক ছল্লাল্লাহু
                                                            আলাইহি ওয়া সাল্লাম উনার দায়েমী নিসবত বা সম্পর্কযুক্ত হয়ে,
                                                            কুরবত বা নৈকট্যপ্রাপ্ত হয়ে সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম
                                                            আলাইহিস সালাম উনার প্রতিটি ক্ষণ যে অতিবাহিত হয়, তা কি আলাদা
                                                            করে লেখার প্রয়োজন আছে?
                                                            হ্যাঁ, আছে। বাতিনী বিষয় তো সাধারণ মানুষের দৃষ্টির আড়ালে।
                                                            জাহিরী অনেক বিষয় আছে যেগুলো অনেকেরই অজানা। <br>
                                                            ১৪৪২ হিজরীতে হাবীবুল্লাহ হুযূর পাক ছল্লাল্লাহু আলাইহি ওয়া
                                                            সাল্লাম উনার মানহানী করার অপরাধে ফ্রান্স বিরোধী হয়ে পুরো
                                                            বাংলাদেশ ফুসে উঠে। এই ফুসে উঠার নেপথ্যে ছাত্র আনজুমানে আল
                                                            বাইয়্যিনাত মূল ভূমিকা রাখে। কিন্তু তখন ছাত্র আনজুমানের
                                                            কার্যক্রমগুলো যে উনারই মুবারক পৃষ্ঠপোষকতায় সম্পন্ন হয়, তা
                                                            সবারই অজানা। <br>
                                                            বাংলা ভাষা যে মুসলমানদেরই অবদান, এ বিষয়টি উম্মাহর মাঝে তিনিই
                                                            সর্বপ্রথম দিবালোকের চেয়েও সুস্পষ্ট করেন। <br>
                                                            নাস্তিকদের আস্ফালন রোধে রাজারবাগ শরীফ হতে পরিচালিত আইন বিষয়ক
                                                            বহুমুখী কার্যক্রমে তিনিই রাহবার।
                                                            মাজলিসু রুইয়াতিল হিলাল কর্তৃক চাঁদ দেখা ও মাস শুরুর ঘোষণার
                                                            ক্ষেত্রে উনার মুবারক নির্দেশনা সর্বাধিক গুরুত্বপূর্ণ বিষয়।
                                                            <br>
                                                            যুব আনজুমানে আল বাইয়্যিনাতের মূল চালিকা শক্তি উনারই নছীহত
                                                            মুবারক। <br>
                                                            সর্বোপরি ঢাকা শহর হতে শুরু করে দেশের ঘরে ঘরে, থানায় থানায়,
                                                            আর জেলা, বিভাগ পর্যন্ত এমনকি আন্তর্জাতিক মহলেও ব্যাপকভাবে
                                                            সাইয়্যিদু সাইয়্যিদিল আ'দাদ শরীফ পবিত্র ১২ই শরীফ পালনের যে
                                                            তারতীব পরিকল্পনা মাফিক কার্যক্রম, তা যে সাইয়্যিদুনা হযরত
                                                            খ্বলীফাতুল উমাম আলাইহিস সালাম উনারই মুবারক স্বপ্ন, উনারই
                                                            মুবারক ইরাদা এবং উনারই মুবারক নির্দেশনার প্রতিফলন তা বলার
                                                            অপেক্ষাই রাখেনা। <br>
                                                            উনার খানকা শরীফে তিনি তা'লীম তালক্বীনে হিসাববিহীন সময় দেন।
                                                            বাদ ফজর, বাদ যুহর, বাদ আছর, বাদ মাগরিব, বাদ ইশা, কোন ওয়াক্তই
                                                            বাদ থাকেনা। এমনকি কখনো কখনো সুবহে সাদিকের আগ পর্যন্ত চলে
                                                            উনার তা'লীমি ব্যস্ততা। তিনি কখনোই কাউকে নিরাশ করেননা। <br>
                                                            এভাবে বিরতিহীন লিখতে থাকলেও উনার ব্যস্ততার ক্ষেত্র লেখা শেষ
                                                            হবেনা। <br>
                                                            তবে, হ্যাঁ। যত রকম ব্যস্ততাই হোকনা কেন, বাজামায়াত নামাজ
                                                            আদায়, তাহাজ্জুদ নামাজ, সবক্ব আদায় করেন গুরুত্বের সাথে। একটা
                                                            মূহুর্তের জন্যও তিনি মুহব্বত, মারিফাত এবং সুন্নত হতে তিনি
                                                            জুদা হননা।
                                                            চলবে.........🌹 <br>
                                                            (ছবি: পবিত্র ৯ই রমাদ্বান শরীফ উপলক্ষে সজ্জিত রাজারবাগ শরীফ।)
                                                            <br>
                                                            #love9 <br>
                                                            #SAAB_Activities
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="ninth" role="tabpanel">
                                        <div class="d-flex mb-3 justify-content-between">
                                            <div>
                                                <h3 class="mb-0">
                                                    <p class="align-middle">উনার শুকরিয়া আদায়ে আমি বাধ্য কেন ?</p>
                                                </h3>
                                            </div>
                                            <div>
                                                <h3 class="mb-0 ">
                                                    <button class="btn btn-primary btn-sm"
                                                        id="copyButton9">Copy</button>
                                                </h3>
                                            </div>
                                        </div>
                                        <div id="accordionPayment" class="accordion">
                                            <div class="card">

                                                <div id="text9" class="accordion-collapse collapse show">
                                                    <div class="accordion-body">
                                                        <p>উনার শুকরিয়া আদায়ে আমি বাধ্য কেন ? <br>
                                                            সাইয়্যিদুনা হযরত খ্বলীফাতুল উমাম আলাইহিস সালাম উনার শুকরিয়া
                                                            আদায়ে আমি বাধ্য কেন? <br>
                                                            মহান আল্লাহ পাক এবং হুযূর পাক ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম
                                                            উনাদের নির্দেশ মুবারক অনুযায়ী সাইয়্যিদুনা হযরত খ্বলীফাতুল
                                                            উমাম আলাইহিস সালাম উনার শুকরিয়া আদায়ে আমি-আপনি-আমরা অবশ্যই
                                                            বাধ্য।
                                                            পিতৃকুল ও মাতৃকুল উভয় দিক হতে তিনি আল হাসানী-আল হুসাইনী,
                                                            তিনি সাইয়্যিদ, তিনি আওলাদে রসূল, অর্থাৎ আখেরী রসূল হুযূর পাক
                                                            ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম উনার বংশধর। আওলাদে রসূল
                                                            উনাদেরকে মুহব্বত করতে এবং উনাদের বিদ্বেষ হতে পরহেজ থাকতে
                                                            হাদীছ শরীফে আদেশ করা হয়েছে। <br>
                                                            বিশেষ বিশেষ ঘটনার মাধ্যমে অনেকবার সাইয়্যিদুনা হযরত
                                                            খ্বলীফাতুল উমাম আলাইহিস সালাম উনাকে আহলে বাইতে রসূল বা আখেরী
                                                            রসূল হুযূর পাক ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম উনার পরিবারের
                                                            অন্তর্ভুক্ত হিসেবে ঘোষণা করা হয়েছে। পবিত্র কুরআন শরীফে ও
                                                            হাদীছ শরীফে আহলে বাইতে রসূল উনাদের মুহব্বত ও খিদমতের আনজাম
                                                            মাখলুকাতের জন্য আবশ্যক করা হয়েছে।<br>
                                                            তিনি আমার মহান শায়েখ আলাইহিস সালাম উনার জাত পাকের অংশ।
                                                            শায়েখী পরিবার উনাদের মুহব্বত ও গোলামীর আনজাম দেয়া আমি
                                                            সালিকের জন্য অত্যাবশকীয়। তিনি আমার জন্য মহান উছীলা। তিনি
                                                            বিহীন শায়েখী রেযার প্রত্যাশা দুঃস্বপ্ন স্বরূপ। <br>
                                                            তিনি এই উম্মাহর বেমেছাল রাহবার। উম্মাহর হিদায়েত, নাজাত ও
                                                            অধিকার নিশ্চিতে তিনি যে ছায়াবৃক্ষ রোপন করেছেন, সে ছায়ার শীতল
                                                            বাতাস পাচ্ছে প্রত্যেক মুসলমান। তাই, শুধু আমি নই প্রত্যেক
                                                            মুসলমানই উনার শুকরিয়া আদায়ে বাধ্য। <br>
                                                            (সমাপ্ত) <br>
                                                            #love9 <br>
                                                            #SAAB_Activities
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /FAQ's -->
                        </div>


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


    <div class="buy-now">
        <a href="https://1.envato.market/vuexy_admin" target="_blank"
            class="btn btn-primary waves-effect waves-light btn-buy-now" data-bs-toggle="modal"
            data-bs-target="#enableOTP">রিপোর্ট প্রদান করুন</a>
    </div>

    <div class="modal fade" id="enableOTP" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-2">মুহতারাম</h3>
                        <p>পোষ্ট ছড়ানোর রিপোর্ট প্রদান করুন</p>
                    </div>
                    <form class="mb-3 bn_font" action="{{ route('postReport.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">নাম <small class="text-danger">*</small>
                            </label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="আপনার নাম দিন" autofocus required value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger">অনুগ্রহ করে আপনার নাম দিন</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">মোবাইল নাম্বার <small
                                    class="text-danger">*</small></label>
                            <input type="phone" class="form-control" id="phone" name="phone"
                                placeholder="আপনার মোবাইল নাম্বার দিন" required value="{{ old('phone') }}">
                            @error('phone')
                                <small class="text-danger">অনুগ্রহ করে আপনার মোবাইল নাম্বার দিন</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="count" class="form-label">পোষ্টের সংখ্যা <small
                                    class="text-danger">*</small></label>
                            <input type="text" class="form-control" id="count" name="count"
                                placeholder="পোষ্টের সংখ্যা" value="{{ old('count') }}" required>
                            @error('count')
                                <small class="text-danger">অনুগ্রহ করে পোষ্টের সংখ্যা দিন</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="count" class="form-label">আপনার মন্তব্য লিখুন।<small
                                    class="text-danger">(ঐচ্ছিক)</small></label>
                            <textarea type="text" class="form-control" id="comment" name="comment" placeholder="আপনার মন্তব্য লিখুন"
                                value="{{ old('comment') }}"></textarea>
                        </div>

                        <div class="mb-3 d-flex justify-content-center">
                            <button class="btn btn-primary d-grid w-50 me-4" type="submit">প্রেরণ করুন</button>
                            <button type="reset" class="btn btn-label-secondary waves-effect"
                                data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

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





</body>

</html>

<!-- beautify ignore:end -->
