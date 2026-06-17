@extends('layouts.admin')
@section('content')
    <div class="row m-auto d-flex justify-content-center">
        <div class="col-lg-4 col-sm-6 mt-3">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Total Visitors</h3>
                </div>
                <div class="card-body text-center">
                    <div class="">
                        <h4 class="badge bg-success fs-5 px-5">{{$total}}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 mt-3">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Unique Visitors</h3>
                </div>
                <div class="card-body text-center">
                    <div class="">
                       <h4 class="badge bg-success fs-5 px-5 ">{{$unique}}</h4>
                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection
