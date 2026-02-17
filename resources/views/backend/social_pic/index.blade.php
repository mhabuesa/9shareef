@extends('backend.layouts.app')
@section('title', 'Social Pic')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets') }}/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">
    <style>
        .prevImage {
            display: block;
            max-width: 100%;
            height: 300px;
            text-align: center;
            margin: 10px auto 40px;
        }
    </style>
@endpush
@section('content')

    <!-- Main content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Social Pic
                        </h3>
                    </div>
                    <div class="block-content block-content-full overflow-x-auto">
                        <form action="{{ route('admin.social.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 m-auto">
                                    <div class="mb-4">
                                        <img id="preview1" src="{{ asset($socialPic?->profile_pic)}}" alt="Image Preview" class="prevImage" >
                                        <label class="form-label" for="example-file-input">Social Pic</label>
                                        <input type="file" class="form-control" id="example-file-input" accept="image/*" name="profile_pic"
                                            onchange="previewImage(event, 'preview1')">
                                    </div>
                                    @error('profile_pic')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 m-auto">
                                    <div class="mb-4">
                                        <img id="preview2" src="{{ asset($socialPic?->cover_pic)}}" alt="Image Preview" class="prevImage">
                                        <label class="form-label" for="example-file-input">Social Pic</label>
                                        <input type="file" class="form-control" id="example-file-input2" accept="image/*" name="cover_pic"
                                            onchange="previewImage(event, 'preview2')">
                                    </div>
                                </div>
                                <div class="mt-3 col-lg-7 m-auto">
                                    <label class="form-label">Year</label>
                                    <input type="number" class="form-control" name="year" value="{{ $socialPic?->year }}" placeholder="Year">
                                </div>
                                <div class="col-lg-6 m-auto d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary  w-50 mt-4 mb-4">Update</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <!-- /.content -->


@endsection

@push('footer_scripts')
    <script>
        function previewImage(event, previewId) {
            const input = event.target;
            const preview = document.getElementById(previewId);
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        }
    </script>
@endpush
