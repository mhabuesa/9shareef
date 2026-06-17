@extends('tasbih.layout')
@section('title', 'Meelad Shareef | Love9')
@section('content')
    <!-- Content -->

    <div class="container-xxl bn_font">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Login -->
                <div class="card ">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <a href="{{ route('meeladShareef') }}" class="app-brand-link">
                                <img class="rounded-circle" src="{{ asset('frontend') }}/assets/img/logo/love9.png"
                                    alt="">
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-1 pt-2 text-center bn_font">আহলাও ওয়া সাহলান
                            <h4 class="mb-1 pt-2 text-center ar_font">
                                يٰۤـاَيُّهَا الَّذِيۡنَ اٰمَنُوۡا صَلُّوۡا عَلَيۡهِ وَسَلِّمُوۡا تَسۡلِيۡمً“ ﷺ ”</h4>
                                <p class="text-center mt-3">৯ই রমাদ্বান শরীফ উনার সম্মানার্থে মীলাদ শরীফ পাঠ করায় আপনাকে অভিনন্দন।</p>

                        <div class="mt-3 mb-3 d-flex justify-content-center">
                            <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal"
                                data-bs-target="#paymentMethods">
                                নির্দেশনা পড়ুন
                            </button>
                        </div>

                        <form class="mb-3 bn_font" action="{{ route('meeladShareef.store') }}" method="POST">
                            @csrf

                            <div class="form-check mb-3">
                                <label class="form-check-label" for="defaultCheck1">
                                    নির্দেশনা পড়েছি
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">নাম <small class="text-danger">*</small> </label>
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
                                <label for="count" class="form-label">মীলাদ শরীফ পাঠের সংখ্যা <small
                                        class="text-danger">*</small></label>
                                <input type="text" class="form-control" id="count" name="count"
                                    placeholder="মীলাদ শরীফ পাঠের সংখ্যা" value="{{ old('count') }}" required>
                                @error('count')
                                    <small class="text-danger">অনুগ্রহ করে মীলাদ শরীফ পাঠের সংখ্যা দিন</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="count" class="form-label">আপনার মন্তব্য লিখুন।<small class="text-danger">(ঐচ্ছিক)</small></label>
                                <textarea type="text" class="form-control" id="comment" name="comment"
                                    placeholder="আপনার মন্তব্য লিখুন" value="{{ old('comment') }}"></textarea>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">প্রেরণ করুন</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

        {{-- Notice Modal --}}
        <div class="modal fade" id="paymentMethods" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-3">অনুগহ করে সম্পূর্ণ নির্দেশনাটি পড়বেন!!</h3>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="list-unstyled">
                                <li>১. আদবের সাথে পবিত্র মীলাদ শরীফপাঠ করুন। </li>
                                <li>২. পরিবারে সবাই একত্রে পবিত্র মীলাদ শরীফ পাঠ করলে তা একবারই গননা করুন।</li>
                                <li>৩. নির্দেশনা প্রদান করুন</li>
                                <li>৪. নির্দেশনা প্রদান করুন</li>
                                <li>৫. নির্দেশনা প্রদান করুন</li>
                                <li>৬. নির্দেশনা প্রদান করুন</li>
                                <li>৭. নির্দেশনা প্রদান করুন</li>
                                <li>৮. নির্দেশনা প্রদান করুন</li>
                                <li>৯. নির্দেশনা প্রদান করুন</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- / Content -->



@endsection
