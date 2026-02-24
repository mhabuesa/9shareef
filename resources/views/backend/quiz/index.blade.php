@include('backend.post.partials.header_script')
@extends('backend.layouts.app')
@section('title', 'Add Post')
@section('content')
    <div class="container-fluid">
        <form action="{{ route('admin.quiz.update') }}" method="POST">
            @csrf
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Basic Information</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="row push">
                        <div class="col-lg-10 col-xl-10 m-auto">
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label" for="postTitle">Starting Date Time </label>
                                            <input type="datetime-local" class="form-control" id="postTitle"
                                                name="starting_date" placeholder="Starting Date" value="{{ $data->starting }}"
                                                required >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label" for="postTitle">Ending Date Time </label>
                                            <input type="datetime-local" class="form-control" id="postTitle"
                                                name="ending_date" placeholder="Ending Date" value="{{ $data->ending }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 m-auto">
                                        <div class="mb-4">
                                            <label class="form-label" for="postTitle">Year </label>
                                            <input type="text" class="form-control" id="postTitle"
                                                name="year" placeholder="Year" value="{{ $data->year }}"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <button type="submit" class="btn btn-primary  w-50 mt-4 mb-4">Submit</button>
                </div>
            </div>
        </form>
    </div>
    </form>
    </div>
@endsection
@include('backend.post.partials.footer_script')
