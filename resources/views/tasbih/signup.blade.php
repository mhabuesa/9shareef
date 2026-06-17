@extends('tasbih.layout')
@section('title', 'Signup | Love9')
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
                            <img class="rounded-circle" src="{{asset('frontend')}}/assets/img/logo/love9.png" alt="">
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-1 pt-2 text-center bn_font">মাশুকী দুনিয়ায় আপনায় স্বাগতম</h4>


                    <form class="mb-3 bn_font" action="{{ route('tasbih.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">নাম <small class="text-danger">*</small> </label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="আপনার নাম দিন" autofocus required value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger">অনুগ্রহ করে আপনার নাম দিন</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">ঠিকানা</label>
                            <input type="address" class="form-control" id="address" name="address"
                                placeholder="আপনার ঠিকানা দিন" value="{{ old('address') }}">
                            @error('address')
                                <small class="text-danger">অনুগ্রহ করে আপনার ঠিকানা দিন</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">মোবাইল নাম্বার <small class="text-danger">(OTP পাঠান হবে)</small></label>
                            <input type="phone" class="form-control" id="phone" name="phone"
                                placeholder="আপনার মোবাইল নাম্বার দিন" required value="{{ old('phone') }}">
                            @error('phone')
                                <small class="text-danger">অনুগ্রহ করে আপনার মোবাইল নাম্বার দিন</small>
                            @enderror
                            @if (Session::has('error_phone'))
                                <small class="text-danger">{{ Session::get('error_phone') }}</small>
                            @endif
                        </div>
                        <div class="mb-3">
                            <span>ইতিমধ্যে অ্যাকাউন্ট করেছেন? <a href="{{ route('tasbih.signin') }}">প্রবেশ করুন <i class="fa-solid fa-right-from-bracket"></i></a></span>
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
