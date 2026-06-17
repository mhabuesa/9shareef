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
                            <h2 class="page-title">contact</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bostami-contact-2-wrap">
                <div class="row">


                    <div class="col-xl-4 col-lg-12">
                        <div class="bostami-contact-2-item-wrap mb-60">
                            <div class="row">

                                <!-- single item -->
                                <div class="col-xl-12 col-lg-6">
                                    <div class="bostami-contact-item bg-prink mb-30">
                                        <div class="icon">
                                            <img src="{{asset('frontend')}}/assets/img/icon/phone-call.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h5 class="title">phone :</h5>
                                            <span>+452 666 386</span>
                                            <span>+2565 562 226</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- single item -->
                                <div class="col-xl-12 col-lg-6">
                                    <div class="bostami-contact-item bg-catkrill mb-30">
                                        <div class="icon">
                                            <img src="{{asset('frontend')}}/assets/img/icon/email-icon.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h5 class="title">email :</h5>
                                            <span>support@gmail.com</span>
                                            <span>example@gmail.com</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- single item -->
                                <div class="col-xl-12 col-lg-6">
                                    <div class="bostami-contact-item bg-prink mb-30">
                                        <div class="icon">
                                            <img src="{{asset('frontend')}}/assets/img/icon/map-icon.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h5 class="title">address :</h5>
                                            <span>Maount View, Oval</span>
                                            <span>Road, New York, USA</span>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8  col-lg-12">
                        <div class="contact-area bg-light-white-2 mb-60">

                            <form class="contact-form" action="https://formspree.io/f/xoqrgaab" method="post">
                                <div class="form-input-item mb-60">
                                    <label class="input-lebel name">name *</label>
                                    <input name="name" class="input-box name" type="text" required>
                                </div>
                                <div class="form-input-item mb-60">
                                    <label class="input-lebel gmail">Email *</label>
                                    <input name="email" class="input-box gmail" type="Email" required>
                                </div>
                                <div class="form-input-item mb-40">
                                    <label class="input-lebel message">Message *</label>
                                    <textarea name="message" class="input-box message" cols="30" rows="10"
                                        required></textarea>
                                </div>
                                <div class="form-btn-wrap">
                                    <button type="submit" value="Send" class="form-btn">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>



        </div>
    </div>
</div>


@endsection
