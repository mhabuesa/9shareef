@extends('frontend.master')
@section('content')



<div class="bostami-page-area z-index-3">
    <div class="container">
        <div class="bostami-page-wrap pt-60 pl-80 pr-80">

            <!-- page-title -->
            <div class="page-tilte-2-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="bostami-page-title-wrap mb-40">
                            <h2 class="page-title">About Us</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- about me -->
            <div class="about-me-2-wrap">
                <div class="row">

                    <!-- img -->
                    <div class="col-lg-4 col-md-8">
                        <div class="bostami-parsonal-info-img">
                            <img src="{{asset('frontend')}}/assets/img/parsonal-info/saab.jpg" alt="">
                        </div>
                    </div>

                    <!-- about -->
                    <div class="col-lg-8 col-md-12">
                        <div class="bostami-parsonal-info-wrap mb-40">

                            <!-- name -->
                            <h4 class="bostami-parsonal-info-title">Who am i?</h4>
                            <p class="bostami-parsonal-info-bio-text">I'm Creative Director and UI/UX Designer
                                from Sydney, Australia, working in web development and print media. I enjoy
                                turning complex problems into simple, beautiful and intuitive designs.</p>

                            <p class="bostami-parsonal-info-bio-text">My aim is to bring across your message and
                                identity in the most creative way. I created web design for many famous brand
                                companies.</p>

                            <!-- contact -->
                            <div class="bostami-parsonal-info-contact">
                                <h3 class="title">Personal Info</h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="bostami-parsonal-info-contact-item phone">
                                            <div class="icon">
                                                <i class="fa-solid fa-mobile-screen-button"></i>
                                            </div>
                                            <div class="text">
                                                <span>Phone</span>
                                                <p>+123 456 7890</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="bostami-parsonal-info-contact-item email">
                                            <div class="icon">
                                                <i class="fa-regular fa-envelope-open-text"></i>
                                            </div>
                                            <div class="text">
                                                <span>Email</span>
                                                <p>example@mail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="bostami-parsonal-info-contact-item location">
                                            <div class="icon">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="text">
                                                <span>Location</span>
                                                <p>Hong kong china</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="bostami-parsonal-info-contact-item calendar">
                                            <div class="icon">
                                                <i class="fa-light fa-calendar-days"></i>
                                            </div>
                                            <div class="text">
                                                <span>Birthday</span>
                                                <p>May 27, 1990</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>








        </div>
    </div>
</div>


@endsection
