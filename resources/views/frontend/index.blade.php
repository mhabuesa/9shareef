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
                                                <a href="post-default.html"
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
    <section class="blog-home-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 mt-30 side-content">
                    <div class="theiaStickySidebar">
                        <div class="row masonry-items">
                            @foreach ($posts as $key => $post)
                            <!--Post-1-->
                            <div class="col-xl-6 col-lg-6  masonry-item">
                                <div class="post-card post-card--default">
                                    <div class="post-card__image">
                                        <a href="post-default.html">
                                            <img src="{{ asset($post->image) }}" alt="">
                                        </a>
                                    </div>

                                    <div class="post-card__content">
                                        <a href="blog-grid.html" class="category">{{ $post->category?->name }}</a>
                                        <h5 class="post-card__title">
                                            <a href="post-default.html" class="post-card__title-link">{{ $post->title }}</a>
                                        </h5>
                                        <p class="post-card__exerpt">{{ Str::limit($post->short_description, 100, '...') }}
                                        </p>

                                        <ul class="post-card__meta list-inline">
                                            <li class="post-card__meta-item">
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
                            @endforeach



                        </div>

                        <!--pagination-->
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="pagination list-inline">
                                    <li class="pagination__item pagination__item--active"><a href="#"
                                            class="pagination__link">1</a></li>
                                    <li class="pagination__item"><a href="#" class="pagination__link">2</a>
                                    </li>
                                    <li class="pagination__item"><a href="#" class="pagination__link">3</a>
                                    </li>
                                    <li class="pagination__item"><a href="#" class="pagination__link">4</a>
                                    </li>
                                    <li class="pagination__item"><a href="#" class="pagination__link"><i
                                                class="bi bi-arrow-right pagination__icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 max-width side-sidebar">
                    <div class="theiaStickySidebar">
                        <!--widget-Countdown-->
                        <div class="widget px-4">
                            <div class="widget__author">
                                <div class="widget__author-top">
                                    <a href="author.html" class="widget__author-link">
                                        <img src="{{ asset('frontend') }}/assets/img/logo/9shareef.jpg" alt=""
                                            class="widget__author-img">
                                    </a>
                                </div>
                                <div class="widget__author-content">

                                    <!-- Countdown Display -->
                                    <div class="widget__countdown">
                                        <div class="countdown_text">
                                            <span class="countdown_title">মহাপবিত্র ৯ই রমাদ্বান শরীফ</span>
                                            <p class="">
                                                আসতে আর মাত্র
                                            </p>
                                        </div>
                                        <div class="countdown">
                                            <span id="countdown-days">0</span> Days
                                            <span id="countdown-hours">0</span> Hours
                                            <span id="countdown-minutes">0</span> Minutes
                                            <span id="countdown-seconds">0</span> Seconds
                                        </div>
                                    </div>

                                    <!-- Countdown message (hidden initially) -->
                                    <div id="countdown_message" style="display:none;">
                                        ৯ই রমাদ্বান শরীফ মুবারক হো!
                                    </div>

                                    <!-- Hidden future date -->
                                    <div id="countdown-target" data-target="2026-02-26 18:06:00" style="display:none;">
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- Countdown end -->


                        <!--widget-Latest-Posts-->
                        <div class="widget">
                            <h5 class="widget__title">Latest Posts</h5>
                            <ul class="widget__latest-posts">
                                <!--post 1-->
                                <li class="widget__latest-posts__item">
                                    <div class="widget__latest-posts-image">
                                        <a href="post-default.html" class="widget__latest-posts-link">
                                            <img src="{{ asset('frontend') }}/assets/img/latest/1.jpg" alt="..."
                                                class="widget__latest-posts-img">
                                        </a>
                                    </div>
                                    <div class="widget__latest-posts-count">1</div>
                                    <div class="widget__latest-posts__content">
                                        <p class="widget__latest-posts-title">
                                            <a href="post-default.html" class="widget__latest-posts-link">5 Things
                                                I Wish I Knew Before Traveling to Malaysia</a>
                                        </p>
                                        <small class="widget__latest-posts-date">
                                            <i class="bi bi-clock-fill widget__latest-posts-icon"></i>January 15,
                                            2022
                                        </small>
                                    </div>
                                </li>

                                <!--post 2-->
                                <li class="widget__latest-posts__item">
                                    <div class="widget__latest-posts-image">
                                        <a href="post-default.html" class="widget__latest-posts-link">
                                            <img src="{{ asset('frontend') }}/assets/img/latest/2.jpg" alt="..."
                                                class="widget__latest-posts-img">
                                        </a>
                                    </div>
                                    <div class="widget__latest-posts-count">2</div>
                                    <div class="widget__latest-posts__content">
                                        <p class="widget__latest-posts-title">
                                            <a href="post-default.html" class="widget__latest-posts-link">Everything you
                                                need to know about
                                                visiting the Amazon.</a>
                                        </p>
                                        <small class="widget__latest-posts-date">
                                            <i class="bi bi-clock-fill widget__latest-posts-icon"></i>January 15,
                                            2022
                                        </small>
                                    </div>
                                </li>

                                <!--post 3-->
                                <li class="widget__latest-posts__item">
                                    <div class="widget__latest-posts-image">
                                        <a href="post-default.html" class="widget__latest-posts-link">
                                            <img src="{{ asset('frontend') }}/assets/img/latest/3.jpg" alt="..."
                                                class="widget__latest-posts-img">
                                        </a>
                                    </div>
                                    <div class="widget__latest-posts-count">3</div>
                                    <div class="widget__latest-posts__content">
                                        <p class="widget__latest-posts-title">
                                            <a href="post-default.html" class="widget__latest-posts-link">How to
                                                spend interesting vacation after hard work?</a>
                                        </p>
                                        <small class="widget__latest-posts-date">
                                            <i class="bi bi-clock-fill widget__latest-posts-icon"></i>January 15,
                                            2022
                                        </small>
                                    </div>
                                </li>

                                <!--post 4-->
                                <li class="widget__latest-posts__item">
                                    <div class="widget__latest-posts-image">
                                        <a href="post-default.html" class="widget__latest-posts-link">
                                            <img src="{{ asset('frontend') }}/assets/img/latest/4.jpg" alt="..."
                                                class="widget__latest-posts-img">
                                        </a>
                                    </div>
                                    <div class="widget__latest-posts-count">4</div>
                                    <div class="widget__latest-posts__content">
                                        <p class="widget__latest-posts-title">
                                            <a href="post-default.html" class="widget__latest-posts-link">10 Best
                                                and Most Beautiful Places to Visit in Italy</a>
                                        </p>
                                        <small class="widget__latest-posts-date">
                                            <i class="bi bi-clock-fill widget__latest-posts-icon"></i>January 15,
                                            2022
                                        </small>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!--widget-categories-->
                        <div class="widget">
                            <h5 class="widget__title">Categories</h5>
                            <ul class="widget__categories">
                                <li class="widget__categories-item">
                                    <a href="blog-grid.html" class="category widget__categories-link">Livestyle</a>
                                    <span class="ml-auto widget__categories-number">22 Posts</span>
                                </li>
                                <li class="widget__categories-item">
                                    <a href="blog-grid.html" class="category widget__categories-link">travel</a>
                                    <span class="ml-auto widget__categories-number">25 Posts</span>
                                </li>
                                <li class="widget__categories-item">
                                    <a href="blog-grid.html" class="category widget__categories-link">food</a>
                                    <span class="ml-auto widget__categories-number">15 Posts</span>
                                </li>
                                <li class="widget__categories-item">
                                    <a href="blog-grid.html" class="category widget__categories-link">fashion</a>
                                    <span class="ml-auto widget__categories-number">18 Posts</span>
                                </li>
                                <li class="widget__categories-item">
                                    <a href="blog-grid.html" class="category widget__categories-link">interior</a>
                                    <span class="ml-auto widget__categories-number">21 Posts</span>
                                </li>
                                <li class="widget__categories-item">
                                    <a href="blog-grid.html" class="category widget__categories-link">art &
                                        design</a>
                                    <span class="ml-auto widget__categories-number">14 Posts</span>
                                </li>



                            </ul>
                        </div>

                        <!--widget-instagram-->
                        <div class="widget">
                            <h5 class="widget__title">Instagram</h5>
                            <ul class="widget-instagram widget__instagram">
                                <li class="widget__instagram-item">
                                    <a class="widget__instagram-link" href="#">
                                        <img src="{{ asset('frontend') }}/assets/img/instagram/1.jpg" alt=""
                                            class="widget__instagram-img">
                                    </a>
                                </li>

                                <li class="widget__instagram-item">
                                    <a class="widget__instagram-link" href="#">
                                        <img src="{{ asset('frontend') }}/assets/img/instagram/2.jpg" alt=""
                                            class="widget__instagram-img">
                                    </a>
                                </li>
                                <li class="widget__instagram-item">
                                    <a class="widget__instagram-link" href="#">
                                        <img src="{{ asset('frontend') }}/assets/img/instagram/3.jpg" alt=""
                                            class="widget__instagram-img">
                                    </a>
                                </li>

                                <li class="widget__instagram-item">
                                    <a class="widget__instagram-link" href="#">
                                        <img src="{{ asset('frontend') }}/assets/img/instagram/4.jpg" alt=""
                                            class="widget__instagram-img">
                                    </a>
                                </li>
                                <li class="widget__instagram-item">
                                    <a class="widget__instagram-link" href="#">
                                        <img src="{{ asset('frontend') }}/assets/img/instagram/5.jpg" alt=""
                                            class="widget__instagram-img">
                                    </a>
                                </li>
                                <li class="widget__instagram-item">
                                    <a class="widget__instagram-link" href="#">
                                        <img src="{{ asset('frontend') }}/assets/img/instagram/6.jpg" alt=""
                                            class="widget__instagram-img">
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <!--widget-tags-->
                        <div class="widget">
                            <h5 class="widget__title">Tags</h5>
                            <ul class="list-inline widget__tags">
                                <li class="widget__tags-item">
                                    <a href="blog-grid.html" class="widget__tags-link">Travel</a>
                                </li>
                                <li class="widget__tags-item">
                                    <a href="blog-grid.html" class="widget__tags-link">nature</a>
                                </li>
                                <li class="widget__tags-item">
                                    <a href="blog-grid.html" class="widget__tags-link">tips</a>
                                </li>
                                <li class="widget__tags-item">
                                    <a href="blog-grid.html" class="widget__tags-link">forest</a>
                                </li>
                                <li class="widget__tags-item">
                                    <a href="blog-grid.html" class="widget__tags-link">Torism</a>
                                </li>
                                <li class="widget__tags-item">
                                    <a href="blog-grid.html" class="widget__tags-link">fashion</a>
                                </li>
                                <li class="widget__tags-item">
                                    <a href="blog-grid.html" class="widget__tags-link">livestyle</a>
                                </li>
                                <li class="widget__tags-item">
                                    <a href="blog-grid.html" class="widget__tags-link">health</a>
                                </li>
                                <li class="widget__tags-item">
                                    <a href="blog-grid.html" class="widget__tags-link">food</a>
                                </li>
                                <li class="widget__tags-item">
                                    <a href="blog-grid.html" class="widget__tags-link">breakfast</a>
                                </li>
                                <li class="widget__tags-item">
                                    <a href="blog-grid.html" class="widget__tags-link">hacks</a>
                                </li>
                                <li class="widget__tags-item">
                                    <a href="blog-grid.html" class="widget__tags-link">interior</a>
                                </li>
                            </ul>
                        </div>


                        <!--widget-ads-->
                        <div class="widget">
                            <h5 class="widget__title">ads</h5>

                            <div class="widget__ads">
                                <a href="#" class="widget__ads-link">
                                    <img src="{{ asset('frontend') }}/assets/img/ads/ads3.jpg" alt=""
                                        class="widget__ads-img">
                                </a>
                            </div>
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
