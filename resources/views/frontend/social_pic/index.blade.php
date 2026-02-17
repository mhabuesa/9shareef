@section('title', 'Contact')
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
                            <h3 class="contact__title mb-3 text-start">Profile Pic</h3>
                            <img src="{{ asset($data->profile_pic) }}" alt="profile pic" loading="lazy"
                                class="lazy-img img-fluid">
                            <a href="{{ route('social.pic.download', 'profile_pic') }}" class="btn btn-primary mt-3 w-25">Download</a>
                        </div>
                    </div>
                    <div class="contact">
                        <div class="text-center">
                            <h3 class="contact__title mb-3 text-start">Cover Pic</h3>
                            <img src="{{ asset($data->cover_pic) }}" alt="cover pic" loading="lazy"
                                class="lazy-img img-fluid">
                            <a href="{{ route('social.pic.download', 'cover_pic') }}"
                                class="btn btn-primary mt-3 w-25">Download</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
