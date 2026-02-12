@include('backend.post.partials.header_script')
@extends('backend.layouts.app')
@section('title', 'Add Post')
@section('content')
    <div class="container-fluid">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
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
                                    <div class="col-lg-9">
                                        <div class="mb-4">
                                            <label class="form-label" for="postTitle">Post Title <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="postTitle" name="title"
                                                placeholder="Post Title" value="{{ old('title') }}" required>
                                            @error('title')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label">Category <span class="text-danger">*</span></label>
                                        <select class="js-select2 form-select" id="category_id" name="category_id" required>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                                    placeholder="Short Description.." required>{{ old('short_description') }}</textarea>
                                @error('short_description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="description">Description <span
                                        class="text-danger">*</span></label>
                                <textarea id="description" name="description" required>
                                    {{ old('description') }}
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
                                            placeholder="Video Embed Url" value="{{ old('video_url') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="audio_url">Audio Embed Url <span
                                                class="text-muted fs-xs">(Optional)</span></label>
                                        <input type="text" class="form-control" id="audio_url" name="audio_url"
                                            placeholder="Audio Embed Url" value="{{ old('audio_url') }}">
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
                                    placeholder="Meta Title" value="{{ old('meta_title') }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="meta_description">Meta Description</label>
                                <textarea class="form-control" id="meta_description" name="meta_description" rows="4"
                                    placeholder="Meta Description.."> {{ old('meta_description') }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="description">Tags</label>
                                <input type="text" id="input-tags" name="tags" placeholder="Enter Tags"
                                    value="{{ old('tags') }}">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 m-auto">
                                    <div class="mb-4">
                                        <label class="form-label mb-3" for="gallery">Product Gallery
                                            <small class="text-muted">(1296px x 700px)</small>
                                        </label>
                                        <div class="upload__box">
                                            <div class="upload__btn-box">
                                                <label class="upload__btn dz-clickable bg-light rounded">
                                                    <p class="dz-default dz-message m-4 fs-6">Upload Product Gallery images
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
                        <input class="form-check-input" type="checkbox" id="featuredPost" name="featuredPost">
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
