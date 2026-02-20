@section('title', '404 Error')
@extends('frontend.layouts.app')
@section('content')
    <!--Page404-->
    <section class="page404">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="page404__content">
                        <div class="page404__image">
                            <img src="{{ asset('frontend') }}/assets/img/pic/error.png" alt="" class="page404__img">
                        </div>
                        <div class="page404__info">
                            <h2 class="page404__title">Oops! This page can’t be found </h2>
                            <p class="page404__desc">The page which you are looking for does not exist galley of type and
                                scrambled it to make a type specimen book. </p>
                            <a href="{{ route('index') }}" class="btn-custom">Go back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
