@include('backend.post.partials.header_script')
@extends('backend.layouts.app')
@section('title', 'Add Post')
@section('content')
    <div class="container-fluid">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Quiz Question</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row push">
                    <div class="col-lg-12 col-xl-12 m-auto">
                        <div class="mb-4">
                           <form action="{{ route('admin.quiz.lakab.update', $id) }}" method="POST">
                            @csrf
                            <div class="mt-2">
                                <label for="" class="form-label">Lokob</label>
                                <textarea name="lakab" id="" cols="30" rows="10" class="form-control">{{ $lakab }}</textarea>
                            </div>
                            <div class="mt-2">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

