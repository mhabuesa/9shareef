@extends('tasbih.layout')
@section('title', 'Signin | Love9')
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
                            <a href="index.html" class="app-brand-link">
                                <img class="rounded-circle" src="{{ asset('frontend') }}/assets/img/logo/love9.png"
                                    alt="">
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-1 pt-2 text-center bn_font">মাশুকী দুনিয়ায় আপনায় স্বাগতম</h4>


                        <form class="mb-3 bn_font" action="{{ route('tasbih.signin.store') }}"
                            method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="phone" class="form-label">মোবাইল নাম্বার <small class="text-danger">(OTP
                                        পাঠান হবে)</small></label>
                                <input type="phone" class="form-control" id="phone" name="phone"
                                    placeholder="আপনার মোবাইল নাম্বার লিখুন" autofocus required value="{{ old('phone') }}">
                                @error('phone')
                                    <small class="text-danger">অনুগ্রহ করে আপনার মোবাইল নাম্বার লিখুন</small>
                                @enderror
                                @if (Session::has('error_phone'))
                                    <small class="text-danger">{{ Session::get('error_phone') }}</small>
                                @endif
                            </div>
                            <div class="mb-3">
                                <span>অ্যাকাউন্ট নেই? <a href="{{ route('tasbih.signup') }}">নিবন্ধন করুন <i class="fa-solid fa-right-to-bracket"></i></a></span>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">OTP পাঠান</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- / Content -->
@endsection
