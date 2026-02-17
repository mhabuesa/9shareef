<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz & Puzzle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap");

        body {
            font-family: "Montserrat", "Segoe UI", sans-serif;
        }

        /* ====== BACKGROUND ====== */
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2, #6b73ff);
            background-size: 300% 300%;
            animation: gradientMove 12s ease infinite;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @keyframes gradientMove {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* ====== CONTAINER ====== */
        .quiz-container {
            width: 100%;
            max-width: 600px;
            padding: 0;
        }

        /* ====== GLASS CARD ====== */
        .card {
            background: rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-radius: 32px;
            border: 1.5px solid rgba(255, 255, 255, 0.25);
            box-shadow:
                0 12px 48px 0 rgba(80, 80, 180, 0.18),
                0 2px 8px 0 rgba(0, 0, 0, 0.08);
            color: #fff;
            padding: 40px 36px 32px 36px;
            position: relative;
            overflow: hidden;
        }

        .img-fluid {
            width: 100px;
            text-align: center;
            margin: 0 auto 30px;

        }

        .card::before {
            content: "";
            position: absolute;
            top: -60px;
            right: -60px;
            width: 180px;
            height: 180px;
            background: linear-gradient(135deg, #fff6, #6b73ff44 80%);
            border-radius: 50%;
            z-index: 0;
            filter: blur(8px);
        }

        /* ====== QUIZ STEP ====== */
        .quiz-step {
            display: none;
        }

        .quiz-step.active {
            display: block;
            animation: fadeSlide 0.5s cubic-bezier(0.4, 2, 0.6, 1);
        }

        @keyframes fadeSlide {
            from {
                opacity: 0;
                transform: translateX(15px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* ====== OPTIONS ====== */
        .option-box {
            border: 1.5px solid rgba(255, 255, 255, 0.32);
            padding: 14px 18px;
            border-radius: 16px;
            cursor: pointer;
            transition: 0.25s cubic-bezier(0.4, 2, 0.6, 1);
            background: rgba(255, 255, 255, 0.18);
            font-size: 1.08rem;
            font-weight: 500;
            box-shadow: 0 2px 8px 0 rgba(80, 80, 180, 0.06);
            margin-bottom: 12px;
        }

        .option-box:hover,
        .option-box.selected {
            background: rgba(255, 255, 255, 0.38);
            border-color: #fff;
            color: #6b73ff;
            box-shadow: 0 4px 16px 0 rgba(80, 80, 180, 0.1);
        }

        /* ====== TEXTAREA ====== */
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        /* ====== BUTTONS ====== */
        .btn-custom {
            border-radius: 16px;
            padding: 10px 32px;
            font-weight: 700;
            font-size: 1.08rem;
            background: linear-gradient(90deg, #6b73ff 0%, #667eea 100%);
            color: #fff;
            border: none;
            box-shadow: 0 2px 8px 0 rgba(80, 80, 180, 0.1);
            transition:
                background 0.3s,
                color 0.3s,
                box-shadow 0.3s;
        }

        .btn-custom:hover {
            background: linear-gradient(90deg, #667eea 0%, #6b73ff 100%);
            color: #fff;
            box-shadow: 0 4px 16px 0 rgba(80, 80, 180, 0.18);
        }

        .progress {
            height: 10px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.22);
            margin-bottom: 40px;
            margin-top: 10px;
        }

        .progress-bar {
            background: linear-gradient(90deg, #fff 0%, #6b73ff 100%);
            box-shadow: 0 2px 8px 0 rgba(80, 80, 180, 0.1);
        }

        /* ====== LOGO & HEADING ====== */
        .quiz-logo {
            width: 90px;
            height: 90px;
            object-fit: contain;
            margin-bottom: 12px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .quiz-title {
            font-size: 2.2rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-align: center;
            margin-bottom: 8px;
            color: #fff;
            text-shadow: 0 2px 8px rgba(80, 80, 180, 0.1);
        }

        .quiz-desc {
            text-align: center;
            color: #e0e0ff;
            font-size: 1.08rem;
            margin-bottom: 24px;
        }






        /* ====== FIXED RESPONIVE PUZZLE ====== */
        #container {
            width: 100%;
            margin: 0 auto;
            text-align: center;
        }

        /* পাজল বক্সকে ফ্লেক্সবক্স দিয়ে সাজানো হয়েছে */
        .box {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            max-width: 800px;
            /* পাজলের অরিজিনাল উইডথ */
            margin: 0 auto;
            justify-content: center;
        }

        .me {
            position: relative;
            /* আপনার অরিজিনাল ইমেজের অনুপাত অনুযায়ী ব্যাকগ্রাউন্ড সাইজ */
            background-size: 600% 300%;
            background-repeat: no-repeat;
            margin: 0.5%;
            /* সামান্য গ্যাপ */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, opacity 0.2s;
            cursor: pointer;

            /* রেসপনসিভ সাইজিং */
            width: 15.66%;
            /* ৬টি টাইলসের জন্য */
            aspect-ratio: 1 / 1;
            /* টাইলসগুলো সবসময় চারকোণা থাকবে */
        }

        /* পাজল ব্যাকগ্রাউন্ড পজিশন (১৮টি টাইলসের জন্য নিখুঁত ম্যাপিং) */
        .me_0 {
            background-position: 0% 0%;
        }

        .me_1 {
            background-position: 20% 0%;
        }

        .me_2 {
            background-position: 40% 0%;
        }

        .me_3 {
            background-position: 60% 0%;
        }

        .me_4 {
            background-position: 80% 0%;
        }

        .me_5 {
            background-position: 100% 0%;
        }

        .me_6 {
            background-position: 0% 50%;
        }

        .me_7 {
            background-position: 20% 50%;
        }

        .me_8 {
            background-position: 40% 50%;
        }

        .me_9 {
            background-position: 60% 50%;
        }

        .me_10 {
            background-position: 80% 50%;
        }

        .me_11 {
            background-position: 100% 50%;
        }

        .me_12 {
            background-position: 0% 100%;
        }

        .me_13 {
            background-position: 20% 100%;
        }

        .me_14 {
            background-position: 40% 100%;
        }

        .me_15 {
            background-position: 60% 100%;
        }

        .me_16 {
            background-position: 80% 100%;
        }

        .me_17 {
            background-position: 100% 100%;
        }

        .full {
            width: 100%;
            max-width: 800px;
            aspect-ratio: 2 / 1;
            /* ২:১ অনুপাত */
            border-radius: 15px;
            background-size: cover;
            background-position: center;
            margin: 0 auto;
        }

        /* অ্যানিমেশন বজায় রাখা হয়েছে */
        .correct {
            border-radius: 0px;
            box-shadow: none;
            animation: corect 0.5s ease forwards;
            pointer-events: none;
        }

        @keyframes corect {
            0% {
                transform: scale(1);
                border-radius: 8px;
            }

            50% {
                transform: scale(1.1);
                border-radius: 4px;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            }

            100% {
                transform: scale(1);
                border-radius: 0px;
            }
        }

        /* UI Buttons & Preview */
        .pre_img {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            padding: 0;
            margin-top: 20px;
        }

        .pre_img li {
            list-style: none;
        }

        .pre_img li img {
            width: 150px;
            object-fit: cover;
            border-radius: 8px;
            cursor: pointer;
            border: 2px solid transparent;
            transition: 0.3s;
        }

        .pre_img li img:hover {
            border-color: #fff;
            transform: translateY(-3px);
        }

        .btn-custom {
            border-radius: 15px;
            padding: 12px 30px;
            font-weight: 700;
            background: linear-gradient(90deg, #6b73ff, #667eea);
            color: #fff;
            border: none;
            transition: 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-custom:hover {
            background: #fff;
            color: #6b73ff;
            transform: scale(1.05);
        }

        .cover {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 9999;

            /* flex থাকবে কিন্তু display পরে দেবো */
            align-items: center;
            justify-content: center;
        }

        .score {
            background: #fff;
            color: #333;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            width: 90%;
            max-width: 350px;
            animation: popUp 0.4s ease;
        }

        @keyframes popUp {
            from {
                transform: scale(0.8);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .prevent_click {
            pointer-events: none;
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <form action="{{ route('quiz.store') }}" method="POST">
        @csrf
        <div class="quiz-container">
            <div class="card shadow-lg">
                <img class="img-fluid" src="{{ asset('frontend') }}/image/noor.png" alt="">
                <h2 class="text-center fw-bold" id="welcome">আহলাও ওয়া সাহলান</h2>
                <h3 class="text-center fw-bold">প্রশ্নোত্তর প্রতিযোগিতা - ১৪৪৭ হিজরী</h3>
                <div class="progress">
                    <div class="progress-bar" id="progressBar" style="width: 23%;"></div>
                </div>

                <!-- Step 0 -->
                <div class="quiz-step active">
                    <h4 class="text-center">কুইজ প্রতিযোগিতায় আপনাকে স্বাগতম</h4>
                    <h5 class="text-center">মুহতারাম, আপনার পরিচয় দিয়ে এগিয়ে যান</h5>
                    <div class="mt-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="mt-2">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter your Phone">
                    </div>
                    <div class="mt-2">
                        <label for="address" class="form-label">Address</label>
                        <input type="address" class="form-control" id="address" name="address" placeholder="Enter your Address">
                    </div>
                </div>

                <!-- Step 1 -->
                <div class="quiz-step">
                    <h5 class="mb-3">১। আইয়্যামে নূর উনায় ৯ ভাষায় মিলাদ শরীফ কবে অনুষ্ঠিত হবে?</h5>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="q1" value="১ম রমাদ্বান শরীফ">
                        <label class="form-check-label">১ম রমাদ্বান শরীফ</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="q1" value="৩রা রমাদ্বান শরীফ">
                        <label class="form-check-label">৩রা রমাদ্বান শরীফ</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="q1" value="৭ম রমাদ্বান শরীফ">
                        <label class="form-check-label">৭ম রমাদ্বান শরীফ</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="q1" value="৯ম রমাদ্বান শরীফ">
                        <label class="form-check-label">৯ম রমাদ্বান শরীফ</label>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="quiz-step">
                    <h5 class="mb-3">২। শাইরুস আলাইহিস সালাম উনার বিলাদত শরীফ কবে?</h5>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="q2" value="১ম জুমাদাল উলা শরীফ">
                        <label class="form-check-label">১ম জুমাদাল উলা শরীফ</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="q2" value="৪ঠা রমাদ্বান শরীফ">
                        <label class="form-check-label">৪ঠা রমাদ্বান শরীফ</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="q2" value="২৭ই রজবুল আছাম শরীফ">
                        <label class="form-check-label">২৭ই রজবুল আছাম শরীফ</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="q2" value="৯ম রমাদ্বান শরীফ">
                        <label class="form-check-label">৯ম রমাদ্বান শরীফ</label>
                    </div>
                </div>

                <!-- Step 3 -->
                <!--  <div class="quiz-step">
                <h5 class="mb-3">৩। আইয়্যামে নূর উনার নামকরণ কে করেছেন? </h5>
                <div class="form-check option-box">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Laravel</label>
                </div>
                <div class="form-check option-box">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">React</label>
                </div>
                <div class="form-check option-box">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Vue</label>
                </div>
            </div> -->

                <!-- Step 3 -->
                <div class="quiz-step">
                    <h5 class="mb-3">৩। আইয়্যামে নূর উনার নামকরণ কে করেছেন? </h5>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="q3" value="সাইয়্যিদুনা ইমামুল উমাম আলাইহিস সালাম">
                        <label class="form-check-label">সাইয়্যিদুনা ইমামুল উমাম আলাইহিস সালাম</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="q3" value="সাইয়্যিদুনা খলীফাতুল উমাম আলাইহিস সালাম">
                        <label class="form-check-label">সাইয়্যিদুনা খলীফাতুল উমাম আলাইহিস সালাম</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="q3" value="সাইয়্যিদুনা শাফিউল উমাম আলাইহিস সালাম">
                        <label class="form-check-label">সাইয়্যিদুনা শাফিউল উমাম আলাইহিস সালাম</label>
                    </div>
                    <div class="form-check option-box">
                        <input class="form-check-input" type="radio" name="q3" value="সাইয়্যিদুনা হাদিউল উমাম আলাইহিস সালাম">
                        <label class="form-check-label">সাইয়্যিদুনা হাদিউল উমাম আলাইহিস সালাম</label>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="quiz-step">
                    <h5 class="mb-3">৪। খলীফাতুল উমাম আলাইহিস সালাম উনার মুবারক শানে যেকোন একটি ক্বাছীদাহ শরীফ থেকে ৪
                        লাইন লিখুন।</h5>
                    <textarea class="form-control rounded-3" name="q4" rows="5" placeholder="Write something here..."></textarea>
                </div>

                <!-- Step  -->
                <div class="quiz-step">
                    <h5 class="mb-3">৫। ধরুণ, আপনি খলীফাতুল উমাম আলাইহিস সালাম উনার একান্তে দিদার মুবারক পেয়েছেন,
                        আমন্তবস্থায় আপনার মনের সুপ্ত বাসনা ব্যাক্ত করুন।</h5>
                    <textarea class="form-control rounded-3" name="q5" rows="5" placeholder="Write something here..."></textarea>
                </div>

                <!-- Step 6 -->
                <div class="quiz-step">
                    <h5 class="mb-3">৬। ৯ই রমাদ্বান শরীফ পালনে আপনার ভূমিকা লিখুন।</h5>
                    <textarea class="form-control rounded-3" name="q6" rows="5" placeholder="Write something here..."></textarea>
                </div>

                <!-- Step 7 -->
                <div class="quiz-step">
                    <h5 class="mb-3">৭। সাইয়্যিদুনা খলীফাতুল উমাম আলাইহিস সালাম উনার এখন পর্যন্ত সর্বশেষ লিখিত কিতাব
                        কোনটি?</h5>
                    <textarea class="form-control rounded-3" name="q7" rows="5" placeholder="Write something here..."></textarea>
                </div>

                <!-- Step 8 -->
                <div class="quiz-step">
                    <h5 class="mb-3">৮। সাইয়্যিদুনা খলীফাতুল উমাম আলাইহিস সালাম উনার একখানা কারামত লিখুন।</h5>
                    <textarea class="form-control rounded-3" name="q8" rows="5" placeholder="Write something here..."></textarea>
                </div>

                <div class="quiz-step">
                    <h5 class="mb-3">৯। আপনার পাজলটি সমাধান করুন।</h5>
                    <div id="container">
                        <div class="mb-4">
                            <a href="javascript:void(0)" class="btn-custom start">শুরু করুন</a>
                        </div>

                        <div class="box">
                            <div class="me full"></div>
                        </div>

                        <ul class="pre_img">
                            <li data-bid="0"><img src="https://preview.ibb.co/kMdsfm/kfp.png"></li>
                            <input type="hidden" id="puzzle_result" name="puzzle_result" value="incomplete">
                        </ul>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-5">
                    <button type="button" class="btn btn-link text-white text-decoration-none h5" id="prevBtn">←
                        Previous</button>
                    <button type="button" class="btn-custom" id="nextBtn">Next Step →</button>
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

    <script>
        // Option selection highlight
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.option-box').forEach(function(box) {
                box.addEventListener('click', function(e) {
                    const input = box.querySelector('input');
                    if (input.type === 'radio') {
                        document.querySelectorAll('input[name="' + input.name + '"]').forEach(
                            function(radio) {
                                radio.closest('.option-box').classList.remove('selected');
                            });
                        input.checked = true;
                        box.classList.add('selected');
                    } else if (input.type === 'checkbox') {
                        input.checked = !input.checked;
                        box.classList.toggle('selected');
                    }
                });
            });
        });

        let currentStep = 0;
        const steps = document.querySelectorAll(".quiz-step");
        const progressBar = document.getElementById("progressBar");
        const nextBtn = document.getElementById("nextBtn");
        const prevBtn = document.getElementById("prevBtn");
        const welcomeText = document.getElementById("welcome");


        function showStep(index) {
            steps.forEach((step, i) => {
                step.classList.remove("active");
                if (i === index) step.classList.add("active");
            });

            let percent = ((index + 1) / steps.length) * 100;
            progressBar.style.width = percent + "%";

            prevBtn.style.visibility = index === 0 ? "hidden" : "visible";

            // 🔥 Welcome text শুধু প্রথম step এ থাকবে
            if (index === 0) {
                welcomeText.style.display = "block";
            } else {
                welcomeText.style.display = "none";
            }

            if (index === steps.length - 1) {
                nextBtn.innerText = "Submit";
            } else {
                nextBtn.innerText = "Next Step →";
            }
        }



        const form = document.querySelector("form");

        nextBtn.addEventListener("click", function() {

            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            } else {

                if ($("#puzzle_result").val() !== "complete") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'পাজল সম্পূর্ণ হয়নি!',
                        text: 'আগে পাজল সমাধান করুন তারপর সাবমিট করুন ',
                        confirmButtonText: 'ঠিক আছে',
                        confirmButtonColor: '#00ff88',
                        background: '#1e1e1e',
                        color: '#ffffff'
                    });

                    return;
                }

                form.submit();
            }

        });


        prevBtn.addEventListener("click", () => {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });

        showStep(currentStep);
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            var box = $(".box"),
                orginal = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17],
                temp = orginal,
                x = [],
                sec = 0,
                date1,
                date2,
                moves = 0,
                mm = 0,
                ss = 0,
                upIMG,
                images = [
                    "https://preview.ibb.co/kMdsfm/kfp.png",
                    "https://preview.ibb.co/kWOEt6/minion.png",
                    "https://preview.ibb.co/e0Rv0m/ab.jpg"
                ];
            img = 0;

            $(".me").css({
                "background-image": "url(" + images[0] + ")"
            });

            $(".start").click(function() {
                $(".start").addClass("prevent_click");
                $(".start").delay(100).slideUp(500);
                $(".full").hide();
                $(".pre_img").addClass("prevent_click");

                date1 = new Date();
                Start();
                return 0;
            });

            function Start() {
                randomTile();
                changeBG(img);
                var count = 0,
                    a,
                    b,
                    A,
                    B;
                $(".me").click(function() {
                    count++;
                    if (count == 1) {
                        a = $(this).attr("data-bid");
                        $(".me_" + a).css({
                            opacity: ".65"
                        });
                    } else {
                        b = $(this).attr("data-bid");
                        $(".me_" + a).css({
                            opacity: "1"
                        });
                        if (a == b) {} else {
                            $(".me_" + a)
                                .addClass("me_" + b)
                                .removeClass("me_" + a);
                            $(this)
                                .addClass("me_" + a)
                                .removeClass("me_" + b);
                            $(".me_" + a).attr("data-bid", a);
                            $(".me_" + b).attr("data-bid", b);
                        }
                        moves++;
                        swapping(a, b);
                        checkCorrect(a);
                        checkCorrect(b);
                        a = b = count = A = B = 0;
                    }
                    if (arraysEqual(x)) {
                        date2 = new Date();
                        timeDifferece();
                        showScore();
                        return 0;
                    }
                });
                return 0;
            }

            function randomTile() {
                var i;
                for (i = orginal.length - 1; i >= 0; i--) {
                    var flag = getRandom(0, i);
                    x[i] = temp[flag];
                    temp[flag] = temp[i];
                    temp[i] = x[i];
                }
                for (i = 0; i < orginal.length; i++) {
                    box.append(
                        '<div  class="me me_' + x[i] + ' tile" data-bid="' + x[i] + '"></div>'
                    );
                    if ((i + 1) % 6 == 0) box.append("<br>");
                }
                i = 17;
                return 0;
            }

            function arraysEqual(arr) {
                var i;
                for (i = orginal.length - 1; i >= 0; i--) {
                    if (arr[i] != i) return false;
                }
                return true;
            }

            function checkCorrect(N1) {
                var pos = x.indexOf(parseInt(N1, 10));
                if (pos != N1) {
                    return;
                }
                $(".me_" + N1).addClass("correct , prevent_click ");
                return;
            }

            function swapping(N1, N2) {
                var first = x.indexOf(parseInt(N1, 10)),
                    second = x.indexOf(parseInt(N2, 10));
                x[first] = parseInt(N2, 10);
                x[second] = parseInt(N1, 10);
                return 0;
            }

            function getRandom(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            function timeDifferece() {
                var diff = date2 - date1;
                var msec = diff;
                var hh = Math.floor(msec / 1000 / 60 / 60);
                msec -= hh * 1000 * 60 * 60;
                mm = Math.floor(msec / 1000 / 60); // Gives Minute
                msec -= mm * 1000 * 60;
                ss = Math.floor(msec / 1000); // Gives Second
                msec -= ss * 1000;
                return 0;
            }

            function changeBG(img) {
                if (img != 3) {
                    $(".me").css({
                        "background-image": "url(" + images[img] + ")"
                    });
                    return;
                } else $(".me").css({
                    "background-image": "url(" + upIMG + ")"
                });
            }

            $(".pre_img li").hover(function() {
                img = $(this).attr("data-bid");
                changeBG(img);
            });

            function showScore() {
                $("#min").html(mm);
                $("#sec").html(ss);
                $("#moves").html(moves);
                $("#puzzle_result").val("complete");
                setTimeout(function() {
                    $(".cover")
                        .css("display", "flex")
                        .hide()
                        .fadeIn(300);
                }, 1050);
                return 0;
            }

            $(".OK").click(function() {
                $(".cover").fadeOut(350);
            });

            $(".reset").click(function() {
                $(".tile").remove();
                $("br").remove();
                $(".full").show();
                $(".start").show();
                $(".pre_img, .start").removeClass("prevent_click");

                temp = orginal;
                x = [];
                moves = ss = mm = 0;
                return 0;
            });

            $("#upfile1").click(function() {
                $("#file1").trigger("click");
            });

            $("#file1").change(function() {
                readURL(this);
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        upIMG = e.target.result;
                        img = 3;
                        changeBG(3);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
    </script>
</body>

</html>
