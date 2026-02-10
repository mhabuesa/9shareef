@section('title', shortTitle($post->title, 30))
@extends('frontend.layouts.app')
@push('header_scripts')

    <style>
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 24px;
        }

        .gallery-card {
            border-radius: 24px;
            overflow: hidden;
            cursor: pointer;
            transition: .35s ease;
        }

        .gallery-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 40px rgba(0, 0, 0, .35);
        }

        .gallery-card img {
            transition: .4s ease;
        }

        .gallery-card:hover img {
            transform: scale(1.12);
        }

        .card-overlay {
            position: absolute;
            inset: auto 0 0 0;
            padding: 20px;
            background: linear-gradient(to top, rgba(0, 0, 0, .75), transparent);
            opacity: 0;
            transition: .3s;
        }

        .gallery-card:hover .card-overlay {
            opacity: 1
        }

        .filter-btn.active {
            background: #facc15;
            color: #000;
        }
    </style>
@endpush
@section('content')
    <!--post-default-->
    <section class="mt-130 mb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 side-content">
                    <div class="theiaStickySidebar">
                        <!--Post-single-->
                        <div class="post-single">
                            <div class="post-single__image text-center">
                                <img src="{{ asset($post->image) }}" alt="{{ $post->title }}"
                                    class="post-single__image-img">
                            </div>

                            <div class="post-single__content">
                                <a href="blog-grid.html" class="category">{{ $post->category->name }}</a>
                                <h2 class="post-single__title">{{ $post->title }}</h2>
                                <ul class="post-single__meta list-inline">
                                    <li class="post-single__meta-item "> {{ date('F j, Y', strtotime($post->created_at)) }}
                                    </li>
                                </ul>
                            </div>

                            <div class="post-single__body">
                                <p>
                                    {{ $post->short_description }}
                                </p>
                                {!! $post->description !!}
                            </div>
                            {{-- ================= GALLERY (ONLY ADDITION) ================= --}}
                            @if ($post->galleries->count())
                                <div class="mt-4">
                                    <h4 class="mb-3 fw-bold">Gallery</h4>
                                    <div id="galleryGrid" class="row g-3">
                                        {{-- JS diye image inject hobe --}}
                                    </div>
                                </div>
                            @endif
                            {{-- =========================================================== --}}



                            <div
                                class="post-single__footer {{ $post->meta->tags_array ? 'justify-content-between' : 'justify-content-end' }}">
                                @if ($post->meta->tags_array)
                                    <ul class="list-inline widget__tags">
                                        <span class="text-dark fw-bold ">Tags: </span>
                                        @foreach ($post->meta->tags_array as $tag)
                                            <li class="widget__tags-item">
                                                <span class="widget__tags-link">{{ $tag }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif

                                @php
                                    $postUrl = url('/post/' . $post->slug);
                                    $postTitle = urlencode($post->title);
                                @endphp

                                <ul class="list-inline social-media social-media--layout-two">

                                    {{-- Facebook --}}
                                    <li class="social-media__item">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($postUrl) }}"
                                            target="_blank" class="social-media__link color-facebook">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                    </li>

                                    {{-- Instagram (no direct share, profile open) --}}
                                    <li class="social-media__item">
                                        <a href="https://www.instagram.com/" target="_blank"
                                            title="Copy link & share on Instagram"
                                            class="social-media__link color-instagram">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                    </li>

                                    {{-- Twitter / X --}}
                                    <li class="social-media__item">
                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode($postUrl) }}&text={{ $postTitle }}"
                                            target="_blank" class="social-media__link color-twitter">
                                            <i class="bi bi-twitter-x"></i>
                                        </a>
                                    </li>

                                    {{-- WhatsApp --}}
                                    <li class="social-media__item">
                                        <a href="https://wa.me/?text={{ $postTitle }}%20{{ urlencode($postUrl) }}"
                                            target="_blank" class="social-media__link color-youtube">
                                            <i class="bi bi-whatsapp"></i>
                                        </a>
                                    </li>

                                    {{-- Telegram --}}
                                    <li class="social-media__item">
                                        <a href="https://t.me/share/url?url={{ urlencode($postUrl) }}&text={{ $postTitle }}"
                                            target="_blank" class="social-media__link bg-primary">
                                            <i class="bi bi-telegram"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <!--Related-posts-->
                        <div class="row">
                            @if ($previous)
                                <div class="col-md-6 m-auto">
                                    <div class="widget">
                                        <div class="widget__related-post">
                                            <div class="widget__related-post__image">
                                                <a href="{{ route('post.details', $previous->slug) }}">
                                                    <img src="{{ asset($previous->image) }}" alt="{{ $previous->title }}"
                                                        class="widget__related-post__img">
                                                </a>
                                            </div>
                                            <div class="widget__related-post__content">
                                                <a class="btn-link" href="{{ route('post.details', $previous->slug) }}">
                                                    <i class="bi bi-arrow-left"></i>Preview post
                                                </a>
                                                <p class="widget__related-post__title">
                                                    <a href="{{ route('post.details', $previous->slug) }}"
                                                        class="widget__related-post__link">{{ shortTitle($previous->title, 30) }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($next)
                                <div class="col-md-6 m-auto">
                                    <div class="widget">
                                        <div class="widget__related-post">
                                            <div class="widget__related-post__image">
                                                <a href="{{ route('post.details', $next->slug) }}">
                                                    <img src="{{ asset($next->image) }}" alt="{{ $next->title }}"
                                                        class="widget__related-post__img">
                                                </a>
                                            </div>
                                            <div class="widget__related-post__content">
                                                <a class="btn-link" href="{{ route('post.details', $next->slug) }}">
                                                    Next post <i class="bi bi-arrow-right"></i>
                                                </a>
                                                <p class="widget__related-post__title">
                                                    <a href="{{ route('post.details', $next->slug) }}"
                                                        class="widget__related-post__link">{{ $next->title }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 max-width side-sidebar">
                    <div class="theiaStickySidebar">

                        <!--widget-Latest-Posts-->
                        <div class="widget">
                            <h5 class="widget__title">Latest Posts</h5>
                            <ul class="widget__latest-posts">
                                @foreach ($latestPosts as $sl => $latest_post)
                                    <li class="widget__latest-posts__item">
                                        <div class="widget__latest-posts-image">
                                            <a href="{{ route('post.details', $latest_post->slug) }}"
                                                class="widget__latest-posts-link">
                                                <img src="{{ asset($latest_post->image) }}"
                                                    alt="{{ $latest_post->title }}" class="widget__latest-posts-img">
                                            </a>
                                        </div>
                                        <div class="widget__latest-posts-count">{{ $sl + 1 }}</div>
                                        <div class="widget__latest-posts__content">
                                            <p class="widget__latest-posts-title">
                                                <a href="{{ route('post.details', $latest_post->slug) }}"
                                                    class="widget__latest-posts-link">{{ $latest_post->title }}</a>
                                            </p>
                                            <small class="widget__latest-posts-date">
                                                <i class="bi bi-clock-fill widget__latest-posts-icon"></i>
                                                @if ($latest_post->created_at->diffInDays(now()) >= 1)
                                                    {{ $latest_post->created_at->format('d M Y') }}
                                                @else
                                                    {{ $latest_post->created_at->diffForHumans() }}
                                                @endif
                                            </small>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!--widget-Related Posts-->
                        <div class="widget">
                            <h5 class="widget__title">Related Posts</h5>
                            <ul class="widget__latest-posts">
                                @foreach ($relatedPosts as $sl => $rel_post)
                                    <li class="widget__latest-posts__item">
                                        <div class="widget__latest-posts-image">
                                            <a href="{{ route('post.details', $rel_post->slug) }}"
                                                class="widget__latest-posts-link">
                                                <img src="{{ asset($rel_post->image) }}" alt="{{ $rel_post->title }}"
                                                    class="widget__latest-posts-img">
                                            </a>
                                        </div>
                                        <div class="widget__latest-posts-count">{{ $sl + 1 }}</div>
                                        <div class="widget__latest-posts__content">
                                            <p class="widget__latest-posts-title">
                                                <a href="{{ route('post.details', $rel_post->slug) }}"
                                                    class="widget__latest-posts-link">{{ $rel_post->title }}</a>
                                            </p>
                                            <small class="widget__latest-posts-date">
                                                <i class="bi bi-clock-fill widget__latest-posts-icon"></i>
                                                @if ($rel_post->created_at->diffInDays(now()) >= 1)
                                                    {{ $rel_post->created_at->format('d M Y') }}
                                                @else
                                                    {{ $rel_post->created_at->diffForHumans() }}
                                                @endif
                                            </small>
                                        </div>
                                    </li>
                                @endforeach
                        </div>
                        <!--widget-categories-->
                        <div class="widget">
                            <h5 class="widget__title">Categories</h5>
                            <ul class="widget__categories">
                                @foreach ($categories as $category)
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html"
                                            class="category widget__categories-link">{{ $category->name }}</a>
                                        <span class="ml-auto widget__categories-number">{{ $category->posts()->count() }}
                                            Posts</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= LIGHTBOX ================= --}}
    <div id="lightbox" onclick="if(event.target.id==='lightbox')closeLightbox()"
        class="d-none position-fixed top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center z-50"
        style="background-color: rgba(0,0,0,0.9);"> <!-- opacity 0.5, website dekha jabe -->

        <button onclick="prevImage(event)"
            class="position-absolute top-50 start-0 translate-middle-y btn text-white fs-2">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <img id="lightboxImg" class="img-fluid rounded" style="max-height: 80vh; max-width: 90vw;">

        <button onclick="nextImage(event)" class="position-absolute top-50 end-0 translate-middle-y btn text-white fs-2">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>


@endsection

{{-- ================= PHP → JS ================= --}}

@push('footer_scripts')
    <script>
        // PHP → JS
        window.galleryData = @json(
            $post->galleries->map(fn($img) => [
                    'src' => asset($img->image),
                ]));
    </script>

    <script>
        const galleryData = window.galleryData || [];
        let currentIndex = 0;

        const grid = document.getElementById('galleryGrid');
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightboxImg');

        function renderGallery() {
            if (!grid) return;

            grid.innerHTML = '';
            galleryData.forEach((img, index) => {
                const col = document.createElement('div');
                col.className = 'col-6 col-md-4 col-lg-3'; // Bootstrap responsive columns

                const card = document.createElement('div');
                card.className = 'card border-0 shadow-sm gallery-card cursor-pointer';
                card.style.cursor = 'pointer';
                card.onclick = () => openLightbox(index);

                const image = document.createElement('img');
                image.src = img.src;
                image.className = 'card-img-top img-fluid rounded';
                image.style.transition = 'transform .3s ease';
                card.appendChild(image);

                col.appendChild(card);
                grid.appendChild(col);
            });
        }

        function openLightbox(index) {
            currentIndex = index;
            lightboxImg.src = galleryData[currentIndex].src;
            lightbox.classList.remove('d-none');
            lightbox.classList.add('d-flex');
        }

        function closeLightbox() {
            lightbox.classList.add('d-none');
            lightbox.classList.remove('d-flex');
        }

        function nextImage(e) {
            e.stopPropagation();
            currentIndex = (currentIndex + 1) % galleryData.length;
            lightboxImg.src = galleryData[currentIndex].src;
        }

        function prevImage(e) {
            e.stopPropagation();
            currentIndex = (currentIndex - 1 + galleryData.length) % galleryData.length;
            lightboxImg.src = galleryData[currentIndex].src;
        }

        if (galleryData.length) {
            renderGallery();
        }
    </script>
@endpush
