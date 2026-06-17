@extends('frontend.master')
@section('content')





<div class="container z-index-3">
    <div class="row">

        <!-- parsonal-info-start -->
        <div class=" p-4 ">
            <div class="bostami-parsonal-info-area bostami-parsonal-info-2-area first " id="mrgn">
                <div class="bostami-parsonal-info-wrap mid " >


                    <div id="title">

                        {{-- <div class="title1" >
                            <h4 style="text-align: center;">মহাসম্মানিত ও মহাপবিত্র</p>
                        </div>

                        <div class="title2">
                            <h3 style="text-align: center;">৯ই রমাদ্বান শরীফ</h3>
                        </div> --}}

                        <div class="main">
                            <div class="webdev text-center">মহাসম্মানিত ও মহাপবিত্র</div>

                            <div class="socod text-center">৯ই রমাদ্বান শরীফ</div>
                            <div class="third text-center">({{$hijri->hijri}} হিজরী)</div>

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

                    <p class="date"> {{$content1->date}} {{$content1->time}} </p>
                    <audio id="myAudio" src="{{asset('frontend')}}/assets/audio/audio.mp3"></audio>



                    <div class="canvas-container">
                        <div style="display: none;" id="tsparticles"></div>
                    </div>

                    {{-- Particles Sound Control --}}
                    <p class="sound" style="display: none;">{{$volume->volume}}</p>




                </div>


            </div>
        </div>
        <!-- personal-info-end -->



</div>

</div>


@endsection


@section('script')
<script src="{{asset('frontend')}}/assets/js/script2.js"></script>
<script src="{{asset('frontend')}}/assets/js/script.js"></script>
<script type="module" src="{{asset('frontend')}}/assets/js/particles.js"></script>
@endsection
