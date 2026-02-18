@section('title', 'Theme Qaseedah Shareef')
@extends('frontend.layouts.app')
@section('content')
    <section class="m-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="contact">
                        <div class="text-center">
                            <h3 class="contact__title mb-3 text-start">Theme Qaseedah Shareef</h3>
                            <div class="text-center">
                               <div class="audio">
                                 <audio src="{{ asset($data?->themeQs) }}" controls></audio>
                               </div>
                                <a href="{{ asset($data?->themeQs) }}" download
                                    class="btn btn-primary mt-3 w-25">Download</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
