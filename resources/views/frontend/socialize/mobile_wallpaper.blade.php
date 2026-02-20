@section('title', 'Mobile Wallpaper')
@extends('frontend.layouts.app')
@push('header_scripts')
    <style>
        /* .footer,
                .newslettre__section {
                    display: none !important;
                } */

        .lazy-img {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .lazy-img[loading="lazy"] {
            opacity: 1;
        }
    </style>
@endpush
@section('content')
    <section class="m-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="contact">
                        <div class="text-center">
                            <h3 class="contact__title mb-3 text-start">হাতিফ প্রচ্ছদ (Mobile Lock Screen)</h3>
                            <img src="{{ asset('uploads') }}/social/mobile/wallpaper.png" alt="profile pic" loading="lazy"
                                class="lazy-img img-fluid">
                            <a href="{{  asset('uploads') }}/social/mobile/wallpaper.png" download
                                class="btn btn-primary mt-3 w-25">Download</a>
                        </div>
                    </div>
                    <div class="contact">
                        <div class="text-center">
                            <h3 class="contact__title mb-3 text-start">হাতিফ লেহান (Mobile Ringtone)</h3>
                            <div class="text-center">
                                <div class="audio">
                                    <audio src="{{ asset('uploads') }}/social/mobile/ringtone.mp3" controls></audio>
                                </div>
                                <a href="{{ asset('uploads') }}/social/mobile/ringtone.mp3" download
                                    class="btn btn-primary mt-3 w-25">Download</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
