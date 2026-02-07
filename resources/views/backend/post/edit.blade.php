@include('backend.post.partials.header_script')
@extends('backend.layouts.app')
@section('title', 'Edit Post')
@section('content')
    <div class="container-fluid">
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Basic Information</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="row push">
                        <div class="col-lg-10 col-xl-10 m-auto">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="mb-4">
                                        <label class="form-label" for="postTitle">Post Title <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="postTitle" name="title"
                                            placeholder="Post Title"
                                            value="{{ old('title') ? old('title') : $post->title }}" required>
                                        @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-4">
                                        <label class="form-label">Category <span class="text-danger">*</span></label>
                                        <select class="js-select2 form-select" id="category_id" name="category_id" required>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option {{ $post->category_id == $category->id ? 'selected' : '' }}
                                                    value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="short_description">Short Description <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="short_description" name="short_description" rows="4"
                                    placeholder="Short Description.." required>{{ old('short_description') ? old('short_description') : $post->short_description }}</textarea>
                                @error('short_description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="description">Description <span
                                        class="text-danger">*</span></label>
                                <textarea id="description" name="description" required>
                                    {{ old('description') ? old('description') : $post->description }}
                                </textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="video_url">Video Embed Url <span
                                                class="text-muted fs-xs">(Optional)</span></label>
                                        <input type="text" class="form-control" id="video_url" name="video_url"
                                            placeholder="Video Embed Url"
                                            value="{{ old('video_url') ? old('video_url') : $post->video_url }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="audio_url">Audio Embed Url <span
                                                class="text-muted fs-xs">(Optional)</span></label>
                                        <input type="text" class="form-control" id="audio_url" name="audio_url"
                                            placeholder="Audio Embed Url"
                                            value="{{ old('audio_url') ? old('audio_url') : $post->audio_url }}">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="block-header block-header-default mt-4">
                    <h3 class="block-title">Meta Information <span class="text-muted fs-xs text-normal"> (This Section is
                            Optional)</span></h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="row push">
                        <div class="col-lg-10 col-xl-10 m-auto">
                            <div class="mb-4">
                                <label class="form-label" for="metaTitle">Meta Title</label>
                                <input type="text" class="form-control" id="metaTitle" name="meta_title"
                                    placeholder="Meta Title"
                                    value="{{ old('meta_title') ? old('meta_title') : $post->meta?->title }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="meta_description">Meta Description</label>
                                <textarea class="form-control" id="meta_description" name="meta_description" rows="4"
                                    placeholder="Meta Description..">{{ old('meta_description') ? old('meta_description') : $post->meta?->description }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="description">Tags</label>
                                <input type="text" id="input-tags" name="tags" placeholder="Enter Tags"
                                    value="{{ old('tags') ? old('tags') : $post->meta?->tags }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block-header block-header-default mt-4">
                    <h3 class="block-title">Post Images</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="row push">
                        <div class="col-lg-12 col-xl-12 m-auto">
                            <div class="row">
                                <div class="col-lg-8 m-auto">
                                    <div class="mb-4 text-center">
                                        <label class="form-label mb-0">Post Primary Image <small
                                                class="text-muted">(1296px x
                                                700px)</small></label>
                                        <small class="text-muted d-block mb-3">For better view, use png and exact
                                            size</small>
                                        <div class="cover-upload m-auto">
                                            <label for="cover-input" class="cover-label">
                                                <span class="text-dark">Upload Preview Image</span>
                                            </label>
                                            <input type="file" id="cover-input" name="image" class="d-none">
                                            <img src="{{ asset($post->image) }}" alt="Primary Image Not Found">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 m-auto">
                                    <div class="mb-4">
                                        <label class="form-label mb-3" for="gallery">Previous Post
                                            Gallery</label>
                                        <div class="d-flex flex-wrap">
                                            @foreach ($post->galleries as $gallery)
                                                <div class="image m-2 position-relative" data-id="{{ $gallery->id }}">
                                                    <img src="{{ asset($gallery->image) }}" alt="Post Gallery Image"
                                                        class="d-block" width="100">
                                                    <button
                                                        class="btn btn-danger btn-sm position-absolute top-0 end-0 delete-gallery"
                                                        type="button" data-id="{{ $gallery->id }}">
                                                        <i class="fa fa-times fa-sm"></i>
                                                    </button>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label mb-3" for="gallery">Post Gallery
                                            <small class="text-muted">(1296px x 700px)</small>
                                        </label>
                                        <div class="upload__box">
                                            <div class="upload__btn-box">
                                                <label class="upload__btn dz-clickable bg-light rounded">
                                                    <p class="dz-default dz-message m-4 fs-6">Upload Post Gallery images
                                                    </p>
                                                    <input type="file" name="gallery[]" multiple=""
                                                        class="upload__inputfile">
                                                </label>
                                            </div>
                                            <div class="upload__img-wrap"></div>
                                        </div>
                                        @error('gallery')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-xl-3 m-auto">
                    <div class="form-check form-block m-2">
                        <input class="form-check-input" type="checkbox" id="featuredPost" name="featuredPost"
                            {{ $post->is_featured == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="featuredPost">
                            <span class="d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-star text-warning"></i>
                                <span class="ms-2">
                                    <span class="fw-bold">Featured Post</span>
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-6 m-auto">
                    <div class="row items-push">
                        <div class="col-md-4 m-auto">
                            <div class="form-check form-block">
                                <input class="form-check-input" type="radio" value="published" id="published"
                                    name="status" checked="">
                                <label class="form-check-label" for="published">
                                    <span class="d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-globe text-success"></i>
                                        <span class="ms-2">
                                            <span class="fw-bold">Published</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 m-auto">
                            <div class="form-check form-block">
                                <input class="form-check-input" type="radio" id="draft" name="status"
                                    value="draft">
                                <label class="form-check-label" for="draft">
                                    <span class="d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-file-lines text-warning"></i>
                                        <span class="ms-2">
                                            <span class="fw-bold">Draft</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 m-auto">
                            <div class="form-check form-block">
                                <input class="form-check-input" type="radio" value="scheduled" id="scheduled"
                                    name="status">
                                <label class="form-check-label" for="scheduled">
                                    <span class="d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-calendar-days text-danger"></i>
                                        <span class="ms-2">
                                            <span class="fw-bold">Scheduled</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 m-auto d-none" id="scheduleBox">
                            <div class="form-block m-2">
                                <label class="form-label d-block text-center" for="scheduled_at">Date Time</label>
                                <input type="datetime-local" class="form-control" id="scheduled_at" name="scheduled_at">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-center">
                    <button type="submit" class="btn btn-primary  w-50 mt-4 mb-4">Submit</button>
                </div>
            </div>
    </div>
    </form>
    </div>
@endsection
@include('backend.post.partials.footer_script')
@push('footer_scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.delete-gallery').forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Get gallery ID
                    let galleryId = this.dataset.id;

                    // Show SweetAlert confirmation
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Send AJAX request
                            fetch("{{ route('posts.gallery.delete') }}", {
                                    method: 'DELETE',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    },
                                    body: JSON.stringify({
                                        id: galleryId
                                    }),
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        // Remove the image from the DOM
                                        document.querySelector(
                                                `.image[data-id="${galleryId}"]`)
                                            .remove();

                                        // Call the custom toast function
                                        showToast(data.message, 'success');
                                    } else {
                                        // Show error toast
                                        showToast(data.message, 'error');
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    showToast(
                                        'An error occurred while deleting the image.',
                                        'error');
                                });
                        }
                    });
                });
            });
        });

        // Custom Toast Function Using Toastify
        function showToast(text, type = 'success') {
            let from, to;

            switch (type) {
                case 'error':
                    from = '#ff5b5c';
                    to = '#ff5b5c';
                    break;
                case 'success':
                    from = '#00b09b';
                    to = '#96c93d';
                    break;
                default:
                    from = '#00b09b';
                    to = '#96c93d';
                    break;
            }

            Toastify({
                text,
                duration: 3000,
                gravity: "top",
                position: "right",
                close: true,
                stopOnFocus: true,
                style: {
                    background: `linear-gradient(to right, ${from}, ${to})`
                },
                onClick: function() {} // Optional
            }).showToast();
        }
    </script>
@endpush
