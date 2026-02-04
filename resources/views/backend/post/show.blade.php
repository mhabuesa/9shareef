@extends('backend.layouts.app')
@section('title', 'Post Details')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets') }}/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">
@endpush
@section('content')

    <div class="bg-image" style="min-height: 600px; background-image: url('{{ asset($post->image) }}');"></div>
    <div class="bg-body-extra-light">
        <div class="content content-boxed">
            <div class="text-center fs-sm push">
                <h2 class="mt-3">{{ $post->title }}</h2>
                <span class="d-inline-block py-2 px-4 bg-body-light rounded">
                    Published on {{ $post->created_at->format('M d, Y') }}
                    @if ($post->created_at->isToday())
                        &bull; <span>{{ $post->created_at->diffForHumans() }}</span>
                    @endif
                </span>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <article class="story">
                        <p>{{ $post->short_description }}</p>

                        {!! $post->description !!}

                    </article>
                    <article class="story">
                        <h4>Meta Information</h4>
                        <span class="d-block fw-bold mb-1">Title</span>
                        <p>{{ $post->meta?->title }}</p>

                        <span class="d-block fw-bold mb-1">Description</span>
                        {{ $post->meta?->description }}
                        <span class="d-block fw-bold mb-1 mt-4">Tags</span>
                        {{ $post->meta?->tags }}

                    </article>
                </div>
            </div>
        </div>
    </div>


@endsection
