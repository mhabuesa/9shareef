@extends('tasbih.layout')
@section('title', 'Tasbih | Love9')
@section('content')
     <!-- Content -->

     <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Login -->
                <div class="card ">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <a href="{{ route('tasbih') }}" class="app-brand-link">
                                <img class="rounded-circle" src="{{ asset('frontend') }}/assets/img/logo/love9.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="mb-4 mt-2 text-center bn_font">
                            <p class="fs-5">সাইয়্যিদুনা হযরত</p>
                            <h3 class="text-success font-weight-bold fs-3">খলীফাতুল উমাম আলাইহিস সালাস</h3>
                            <p class="fs-5">উনার মুহব্বতে দরূদ শরীফ পাঠ করুন।</p>
                        </div>
                        <!-- /Logo -->

                </div>
            </div>

        </div>
    </div>
    </div>

    <!-- / Content -->
@endsection
