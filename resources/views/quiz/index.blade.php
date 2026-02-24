<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz & Puzzle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Toastify -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/quiz/css/style.css">

    <!-- Font Awesome Free CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"
        integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <form action="{{ route('quiz.store') }}" method="POST">
        @csrf
        <div class="quiz-container">
            <div class="card shadow-lg">
                <div class="timer text-end fw-bold fs-5">
                    <i class="fas fa-stopwatch"></i>
                    <span class="countdown">00:00</span>
                    <div class="set_timer d-none">2026:02:24 10:55 PM</div>
                </div>
                <img class="img-fluid" src="{{ asset('frontend') }}/image/noor.png" alt="">
                <h2 class="text-center fw-bold" id="welcome">আহলান ওয়া সাহলান</h2>
                <h3 class="text-center fw-bold">প্রশ্নোত্তর প্রতিযোগিতা - ১৪৪৭ হিজরী</h3>
                <div class="progress">
                    <div class="progress-bar" id="progressBar" style="width: 23%;"></div>
                </div>

                <!-- Step 0 -->
                <div class="quiz-step active">
                    <h4 class="text-center">প্রশ্নোত্তর প্রতিযোগিতায় আপনাকে স্বাগতম</h4>
                    <h5 class="text-center">মুহতারাম, আপনার পরিচয় দিয়ে এগিয়ে যান</h5>
                    <div class="mt-2">
                        <label for="name" class="form-label">নাম </label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="আপনার নাম লিখুন" required>
                    </div>
                    <div class="mt-2">
                        <label for="phone" class="form-label">ফোন নম্বর বা ইমেইল <small class="mx-2"> (ঐচ্ছিক)</small></label>
                        <input type="phone" class="form-control" id="phone" name="phone"
                            placeholder="ফোন নম্বর বা ইমেইল">
                    </div>
                    <div class="mt-2">
                        <label for="address" class="form-label">ঠিকানা</label>
                        <input type="address" class="form-control" id="address" name="address"
                            placeholder="ঠিকানা লিখুন" required>
                    </div>
                </div>

                <!-- Step 1 -->
                <div class="quiz-step">
                    <h5 class="mb-3">১। আইয়্যামে নূর শরীফে আমাদের আগামীকালের কার্যক্রম কি?</h5>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question1" value="খলীফাজী উনার মুবারক দিদার">
                        <label class="form-check-label">খলীফাজী উনার মুবারক দিদার।</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question1" value="মুবারক দিদারই দাওয়্যাত ছড়ানো।">
                        <label class="form-check-label">মুবারক দিদারই দাওয়্যাত ছড়ানো।</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question1" value="মুবারক স্মৃতিচারণ বিষয়ক পডকাষ্ট।">
                        <label class="form-check-label">মুবারক স্মৃতিচারণ বিষয়ক পডকাষ্ট।</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question1" value="অনলাইন সামা।">
                        <label class="form-check-label">অনলাইন সামা।<label>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="quiz-step">
                    <h5 class="mb-3">২। সাইয়্যিদুনা খলীফাতুল উমাম আলাইহিস সালাম উনার <span class="fw-bold fs-5" style="text-decoration: underline">উমাম</span> শব্দ যুক্ত লকব মুবারক লিখুন</h5>
                    <div class="form-check option-box">
                        <input type="text" id="lakab" name="question2" value=""
                            placeholder="এখানে লক্বব মুবারক লিখুন এবং ট্যাপ করুন" />
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="quiz-step">
                    <h5 class="mb-3">৩। আইয়্যামে নূর উনার নামকরণ কে করেছেন? </h5>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question3"
                            value="সাইয়্যিদুনা ইমামুল উমাম আলাইহিস সালাম">
                        <label class="form-check-label">সাইয়্যিদুনা ইমামুল উমাম আলাইহিস সালাম</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question3"
                            value="সাইয়্যিদাতুনা উম্মুল উমাম আলাইহাস সালাম">
                        <label class="form-check-label">সাইয়্যিদাতুনা উম্মুল উমাম আলাইহাস সালাম</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question3"
                            value="সাইয়্যিদুনা শাফিউল উমাম আলাইহিস সালাম">
                        <label class="form-check-label">সাইয়্যিদুনা শাফিউল উমাম আলাইহিস সালাম</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question3"
                            value="সাইয়্যিদুনা হাদিউল উমাম আলাইহিস সালাম">
                        <label class="form-check-label">সাইয়্যিদুনা হাদিউল উমাম আলাইহিস সালাম</label>
                    </div>
                </div>

                <!-- Step 4 -->
                 <div class="quiz-step">
                    <h5 class="mb-3">৪। গতবছর ৯ই রমাদ্বান শরীফ উনার থিম ক্বাছীদাহ শরীফ কি ছিলেন? </h5>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question4"
                            value="শানে বিলাদত শাহযাদা জানের">
                        <label class="form-check-label">শানে বিলাদত শাহযাদা জানের</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question4"
                            value="খলীফাতুল উমাম আস সালাম">
                        <label class="form-check-label">খলীফাতুল উমাম আস সালাম</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question4"
                            value="লাব্বাইক শাহযাদা ক্বিবলা">
                        <label class="form-check-label">লাব্বাইক শাহযাদা ক্বিবলা </label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question4"
                            value="শাহযাদাজী আছ ছলাতু আস সালাম">
                        <label class="form-check-label">শাহযাদাজী আছ ছলাতু আস সালাম</label>
                    </div>
                </div>

                <!-- Step 5  -->
                <div class="quiz-step">
                    <h5 class="mb-3"> ৫। নিচের লাইন গুলো থেকে শব্দ গুছিয়ে একটি বাক্য সাজান। শব্দে ক্লিক করলে উপরের
                        লাইনে বসবে।</h5>
                    <div class="mb-5 word_box">
                        <input type="text" name="question5_1" id="" value="" class="form-control">
                        <div class="mt-3">
                            <span class="shuffleWord">শাহযাদা</span>
                            <span class="shuffleWord">বিলাদত</span>
                            <span class="shuffleWord">তুলনা যে</span>
                            <span class="shuffleWord">নেইকো</span>
                            <span class="shuffleWord">জানের</span>
                            <span class="shuffleWord">শানে</span>
                        </div>
                    </div>
                    <div class="mb-5 word_box">
                        <input type="text" name="question5_2" id="" value="" class="form-control">
                        <div class="mt-3">
                             <span class="shuffleWord">শাহযাদা ক্বিবলা</span>
                             <span class="shuffleWord">চড়ে</span>
                             <span class="shuffleWord">ঘোড়ায়</span>
                             <span class="shuffleWord">আজ</span>
                             <span class="shuffleWord">আসবেন</span>
                        </div>
                    </div>
                    <div class="mb-1 word_box">
                        <input type="text" name="question5_3" id="" value="" class="form-control">
                        <div class="mt-3">
                            <span class="shuffleWord">আজ</span>
                           <span class="shuffleWord">দেখ</span>
                           <span class="shuffleWord">চাঁদ ঐ</span>
                           <span class="shuffleWord">হেসেছেন</span>
                             <span class="shuffleWord">নবমী</span>
                             <span class="shuffleWord">মুচকি</span>
                        </div>
                    </div>
                </div>

                <!-- Step 6 -->
                <div class="quiz-step">
                    <h5 class="mb-3">৬। সাইয়্যিদুনা খলীফাতুল উমাম আলাইহিস সালাম উনার এখন পর্যন্ত সর্বশেষ লিখিত কিতাব
                        কোনটি?</h5>
                    <textarea class="form-control rounded-3 mb-3" name="question6" rows="5" placeholder="Write something here..."></textarea>
                </div>

                <!-- Step 7 -->
                <div class="quiz-step">
                    <h5 class="mb-3">৭। শাহ নাওয়াদী আলাইহাস সালাম উনার সুমহান বিলাদত শরীফ কত তারিখ ও কি বার?</h5>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question7"
                            value="শানে বিলাদত শাহযাদা আক্বার">
                        <label class="form-check-label">১৯ শে শাওওয়াল শরীফ - ইছনাইনিল আযীম শরীফ।</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question7"
                            value="খলীফাতুল উমাম আস সালাম">
                        <label class="form-check-label">২২ শে শাওওয়াল শরীফ - খ্বমীস</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question7"
                            value="লাব্বাইক শাহযাদা ক্বিবলা">
                        <label class="form-check-label">১৯ শে যিলহজ্জ শরীফ - ইছনাইনিল আযীম শরীফ।</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question7"
                            value="শাহযাদাজী আছ ছলাতু আস সালাম">
                        <label class="form-check-label">২০ শে যিলহজ্জ শরীফ - ছুলাছা</label>
                    </div>
                </div>


                <!-- Step 8 -->
                <div class="quiz-step">
                    <h5 class="mb-3">৮। এবছর ৯ই রমাদ্বান শরীফ উনার থিম ক্বাছীদাহ শরীফ কোনটি? </h5>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question8"
                            value="শাহযাদা আক্বা কে দেখ নববী নূর চমকে রূপে">
                        <label class="form-check-label">শাহযাদা আক্বা কে দেখ নববী নূর চমকে রূপে।</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question8"
                            value="শাহযাদা শাহযাদা বল আশিক শাহযাদা বল">
                        <label class="form-check-label">শাহযাদা শাহযাদা বল আশিক শাহযাদা বল।</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question8"
                            value="চন্দ্র সূর্যযে ইশারা দিয়ে ডাকি">
                        <label class="form-check-label">চন্দ্র সূর্যযে ইশারা দিয়ে ডাকি।</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="question8"
                            value="খলীফাতুল উমাম আস সালাম">
                        <label class="form-check-label">খলীফাতুল উমাম আস সালাম।</label>
                    </div>
                </div>

                <div class="quiz-step">
                    <h5 class="mb-3">৯। পাজলটি সমাধান করুন।</h5>
                    <div id="container">
                        <div class="mb-4">
                            <a href="javascript:void(0)" class="btn-custom start">শুরু করুন</a>
                        </div>

                        <div class="box">
                            <div class="me full"></div>
                        </div>

                        <ul class="pre_img">
                            <li data-bid="0"><img src="{{ asset('frontend') }}/image/cycle.jpg" alt=""></li>
                            <input type="hidden" id="puzzle_result" name="puzzle_result" value="incomplete">
                            <input type="hidden" id="solved_time" name="solved_time">
                        </ul>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-5">
                    <button type="button" class="btn btn-link text-white text-decoration-none h5" id="prevBtn">←
                        পূর্ববর্তী প্রশ্ন</button>
                    <button type="button" class="btn-custom" id="nextBtn">পরবর্তী প্রশ্ন →</button>
                </div>
            </div>
        </div>
    </form>

    <div class="cover">
        <div class="score">
            <h2 class="fw-bold text-success">মাশাআল্লাহ!</h2>
            <p class="mb-1">আপনি পাজলটি সমাধান করেছেন।</p>
            <hr>
            <p>সময়: <span id="min">00</span> মিনিট <span id="sec">00</span> সেকেন্ড</p>
            <p>মোট চাল: <span id="moves">0</span></p>
            <button class="btn btn-dark w-100 py-2 OK mt-3">ঠিক আছে</button>
        </div>
    </div>


    {{-- js --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/quiz/js/quiz.js"></script>
    <script src="{{ asset('frontend') }}/quiz/js/puzzle.js"></script>

    <!-- Toastify -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    {{-- Selectize --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
        integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script></script>

    <script>
        // Selectize
        $("#lakab").selectize({
            delimiter: ",",
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input,
                };
            },
        });
        // Toast
        function showToast(text) {
            Toastify({
                text,
                duration: 300000,
                gravity: "top",
                position: "right",
                close: true,
                stopOnFocus: true,
                style: {
                    background: `linear-gradient(to right, ${'#ff5b5c'}, ${'#ff5b5c'})`
                },
                onClick: function() {}
            }).showToast();
        }
    </script>
</body>

</html>
