@section('title', 'Countdown')
@extends('frontend.layouts.app')
@push('header_scripts')
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/countdown.css">
    <style>
        @font-face {
            font-family: Sirajee_Humayra;
            src: url(https://9shareef.com/frontend/assets/fonts/bangla/Li_Sirajee_Humayra_Unicode.ttf);
        }

        @font-face {
            font-family: LiMahfujAK;
            src: url(https://9shareef.com/frontend/assets/fonts/bangla/LiMahfujAKUnicode.ttf);
        }

        @font-face {
            font-family: Alinur;
            src: url(https://9shareef.com/frontend/assets/fonts/bangla/LiAlinurTarunyaUnicode-Regular.ttf);
        }
        .newslettre__section, .sticky-box{
            display: none
        }
    </style>
@endpush
@section('content')


    <div class="container z-index-3">
        <div class="row">

            <!-- parsonal-info-start -->
            <div class=" p-4 ">
                <div class="bostami-parsonal-info-area bostami-parsonal-info-2-area first " id="mrgn">
                    <div class="bostami-parsonal-info-wrap mid ">


                        <div id="title">



                            <div class="mt-5">
                                <div class="webdev text-center">মহাসম্মানিত ও মহাপবিত্র</div>

                                <div class="socod text-center">৯ই রমাদ্বান শরীফ</div>
                                <div class="third text-center">(১৪৪৭ হিজরী)</div>

                            </div>

                            <div class="title3">
                                <p style="text-align: center;">আসতে আর মাত্র বাকি</p>
                            </div>



                        </div>


                        <div id="headText" class="end_text" style="display: none;">

                            <div class="first_content">
                                <svg class="text-svg" width="90%" height="240" viewBox="0 0 600 70"
                                    style="display: block; margin: 0 auto;">
                                    <text x="50%" y="50%" text-anchor="middle">শাহযাদাজী</text>
                                </svg>
                            </div>

                            <br>


                            <div class="second_content">
                                <svg class="text-svg2" width="90%" height="140" viewBox="0 0 510 70"
                                    style="display: block; margin: 0 auto;">
                                    <text x="50%" y="50%" text-anchor="middle">আছ ছলাতু আস সালাম</text>
                                </svg>
                            </div>
                            <br>



                            <div class="neonText-Lightgreen">
                                ৯ই রমাদ্বান শরীফ
                            </div>



                            <div class="neonText-lightBlue">
                                মুবারক হো
                            </div>
                        </div>



                        <div id="countdown" class="">
                            <div class="number">
                                <span class="days time"></span>
                                <span class="text">Days</span>
                            </div>
                            <div class="number">
                                <span class="hours time"></span>
                                <span class="text">Hours</span>
                            </div>
                            <div class="number">
                                <span class="minutes time"></span>
                                <span class="text">Minutes</span>
                            </div>
                            <div class="number">
                                <span class="seconds time"></span>
                                <span class="text">Seconds</span>
                            </div>

                        </div>

                        <p class="date"> 2026.02.26 18:06 </p>
                        <audio id="myAudio" src="https://9shareef.com/frontend/assets/audio/audio.mp3"></audio>



                        <div class="canvas-container">
                            <div style="display: none;" id="tsparticles"></div>
                        </div>


                        <p class="sound" style="display: none;">5</p>




                    </div>


                </div>
            </div>
            <!-- personal-info-end -->



        </div>

    </div>
@endsection
@push('footer_scripts')
    <!-- JS here -->
    <script src="https://9shareef.com/frontend/assets/js/jquery.min.js"></script>
    <script src="https://9shareef.com/frontend/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://9shareef.com/frontend/assets/js/swipper-bundle.min.js"></script>
    <script src="https://9shareef.com/frontend/assets/js/jquery.meanmenu.min.js"></script>
    <script src="https://9shareef.com/frontend/assets/js/wow.min.js"></script>
    <script src="https://9shareef.com/frontend/assets/js/isotope.pkgd.min.js"></script>
    <script src="https://9shareef.com/frontend/assets/js/odometer.min.js"></script>
    <script src="https://9shareef.com/frontend/assets/js/appear.min.js"></script>
    <script src="https://9shareef.com/frontend/assets/js/main.js"></script>

    <script src="https://9shareef.com/frontend/assets/js/script2.js"></script>
    <script src="https://9shareef.com/frontend/assets/js/script.js"></script>
    <script type="module" src="https://9shareef.com/frontend/assets/js/particles.js"></script>
@endpush
