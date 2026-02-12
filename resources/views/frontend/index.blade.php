@section('title', 'Home')
@extends('frontend.layouts.app')
@section('content')
    <!--slider-five-->
    @if ($banners->count() > 0)
        <div class="container-fluid">
            <div class="slider slider--five">
                <div class="swiper-wrapper">
                    <!--slider-1-->
                    @foreach ($banners as $key => $banner)
                        <div class="slider__item  swiper-slide"
                            style="background-image: url({{ asset($banner->post->image) }});">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-lg-8 m-auto">
                                        <div class="slider__item-content">
                                            <a href="blog-grid.html" class="category">{{ $banner->post->category->name }}</a>
                                            <h1 class="slider__title">
                                                <a href="{{ route('post.details', $banner->post->slug) }}"
                                                    class="slider__title-link">{{ $banner->post->title }}</a>
                                            </h1>
                                            <ul class="slider__meta list-inline">
                                                <li class="slider__meta-item">
                                                    <span class="dot"></span>
                                                    @php
                                                        $created = $banner->post->created_at;
                                                    @endphp

                                                    @if ($created->diffInDays(now()) >= 1)
                                                        {{ $created->format('d M Y') }}
                                                    @else
                                                        {{ $created->diffForHumans() }}
                                                    @endif
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!--pagination-->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    @endif

    <!--blog-grid-->
    <section class="mt-130 mb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 mt-30 side-content">
                    <div class="theiaStickySidebar">
                        <div class="row masonry-items">
                            @forelse ($posts as $key => $post)
                                <!--Post-1-->
                                <div class="col-xl-6 col-lg-6  masonry-item">
                                    <div class="post-card post-card--default">
                                        <div class="post-card__image">
                                            <a href="{{ route('post.details', $post->slug) }}">
                                                <img src="{{ asset($post->image) }}" alt="">
                                            </a>
                                        </div>

                                        <div class="post-card__content">
                                            <a href="blog-grid.html" class="category">{{ $post->category?->name }}</a>
                                            <h5 class="post-card__title">
                                                <a href="{{ route('post.details', $post->slug) }}"
                                                    class="post-card__title-link">{{ $post->title }}</a>
                                            </h5>
                                            <p class="post-card__exerpt">
                                                {{ Str::limit($post->short_description, 100, '...') }}
                                            </p>

                                            <ul class="post-card__meta list-inline">
                                                <li class="post-card__meta-item">
                                                    {{ $post->views }} Views
                                                </li>
                                                <li class="post-card__meta-item px-3">
                                                    @php
                                                        $created = $post->created_at;
                                                    @endphp

                                                    @if ($created->diffInDays(now()) >= 1)
                                                        {{ $created->format('d M Y') }}
                                                    @else
                                                        {{ $created->diffForHumans() }}
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--/-->
                            @empty
                                <div class="col-12">
                                    <h5 class="text-center">No Post Found</h5>
                                </div>
                            @endforelse



                        </div>

                        <!--pagination-->
                        @if ($posts->count() > 10)
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <a href="javascript:void(0)" class="category btn p-3 mb-4">View More Posts</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-xl-3 max-width side-sidebar">
                    <div class="theiaStickySidebar">
                        <!--widget-featured-Posts-->
                        <div class="widget">
                            <h5 class="widget__title">Featured Posts</h5>
                            <ul class="widget__latest-posts">
                                @forelse ($featuredPosts as $sl => $featured_post)
                                    <li class="widget__latest-posts__item">
                                        <div class="widget__latest-posts-image">
                                            <a href="{{ route('post.details', $featured_post->slug) }}"
                                                class="widget__latest-posts-link">
                                                <img src="{{ asset($featured_post->image) }}"
                                                    alt="{{ $featured_post->title }}" class="widget__latest-posts-img">
                                            </a>
                                        </div>
                                        <div class="widget__latest-posts-count">{{ $sl + 1 }}</div>
                                        <div class="widget__latest-posts__content">
                                            <p class="widget__latest-posts-title">
                                                <a href="{{ route('post.details', $featured_post->slug) }}"
                                                    class="widget__latest-posts-link">{{ $featured_post->title }}</a>
                                            </p>
                                            <small class="widget__latest-posts-date">
                                                <i class="bi bi-clock-fill widget__latest-posts-icon"></i>
                                                @if ($featured_post->created_at->diffInDays(now()) >= 1)
                                                    {{ $featured_post->created_at->format('d M Y') }}
                                                @else
                                                    {{ $featured_post->created_at->diffForHumans() }}
                                                @endif
                                            </small>
                                            <small class="widget__latest-posts-date">
                                                <i class="bi bi-eye widget__latest-posts-icon"></i>
                                                {{ $featured_post->views }}
                                            </small>
                                        </div>
                                    </li>
                                @empty
                                    <li class="widget__latest-posts__item">
                                        <p class="widget__latest-posts-title">No Featured posts available.</p>
                                    </li>
                                @endforelse


                            </ul>
                        </div>


                        <!--widget-Most-Visited-Posts-->
                        <div class="widget">
                            <h5 class="widget__title">Most Visited Posts</h5>
                            <ul class="widget__latest-posts">
                                @forelse ($mostVisited as $sl => $post)
                                    <li class="widget__latest-posts__item">
                                        <div class="widget__latest-posts-image">
                                            <a href="{{ route('post.details', $post->slug) }}"
                                                class="widget__latest-posts-link">
                                                <img src="{{ asset($post->image) }}" alt="{{ $post->title }}"
                                                    class="widget__latest-posts-img">
                                            </a>
                                        </div>
                                        <div class="widget__latest-posts-count">{{ $sl + 1 }}</div>
                                        <div class="widget__latest-posts__content">
                                            <p class="widget__latest-posts-title">
                                                <a href="{{ route('post.details', $post->slug) }}"
                                                    class="widget__latest-posts-link">{{ $post->title }}</a>
                                            </p>
                                            <small class="widget__latest-posts-date">
                                                <i class="bi bi-clock-fill widget__latest-posts-icon"></i>
                                                @if ($post->created_at)
                                                    @if ($post->created_at->diffInDays(now()) >= 1)
                                                        {{ $post->created_at->format('d M Y') }}
                                                    @else
                                                        {{ $post->created_at->diffForHumans() }}
                                                    @endif
                                                @endif
                                            </small>
                                            <small class="widget__latest-posts-date">
                                                <i class="bi bi-eye widget__latest-posts-icon"></i>
                                                {{ $post->views }}
                                            </small>
                                        </div>
                                    </li>
                                @empty
                                    <li class="widget__latest-posts__item">
                                        <p class="widget__latest-posts-title">No Most Visited posts available.</p>
                                    </li>
                                @endforelse


                            </ul>
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
    </section><!--Blog End-->
@endsection
@push('footer_scripts')
    <script>
        function startCountdown() {
            const targetEl = document.getElementById('countdown-target');
            const countdownWrapper = document.querySelector('.widget__countdown');
            const messageEl = document.getElementById('countdown_message');

            const countdownEl = {
                days: document.getElementById('countdown-days'),
                hours: document.getElementById('countdown-hours'),
                minutes: document.getElementById('countdown-minutes'),
                seconds: document.getElementById('countdown-seconds')
            };

            const targetDate = new Date(targetEl.dataset.target).getTime();

            const interval = setInterval(() => {
                const now = new Date().getTime();
                const distance = targetDate - now;

                if (distance <= 0) {
                    // Countdown finished
                    clearInterval(interval);
                    countdownWrapper.style.display = 'none'; // hide countdown
                    messageEl.style.display = 'block'; // show message
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                countdownEl.days.textContent = days;
                countdownEl.hours.textContent = hours;
                countdownEl.minutes.textContent = minutes;
                countdownEl.seconds.textContent = seconds;
            }, 1000);
        }

        // Start countdown when page loads
        document.addEventListener('DOMContentLoaded', startCountdown);
    </script>
@endpush
