@section('title', shortTitle($post->title, 30))
@extends('frontend.layouts.app')
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
                                <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="post-single__image-img">
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

                                <ul class="list-inline social-media social-media--layout-two">
                                    <li class="social-media__item">
                                        <a href="#" class="social-media__link color-facebook"><i
                                                class="bi bi-facebook"></i></a>
                                    </li>

                                    <li class="social-media__item">
                                        <a href="#" class="social-media__link color-instagram"><i
                                                class="bi bi-instagram"></i></a>
                                    </li>
                                    <li class="social-media__item">
                                        <a href="#" class="social-media__link color-twitter"><i
                                                class="bi bi-twitter-x"></i></a>
                                    </li>
                                    <li class="social-media__item">
                                        <a href="#" class="social-media__link color-youtube"><i
                                                class="bi bi-youtube"></i></a>
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

                        <!--widget-comments-->
                        <div class="widget mb-50">
                            <div class="widget__comments">
                                <h5 class="widget__comments-title">3 Comments</h5>
                                <ul class="widget__comments-items">
                                    <li class="widget__comments-item">
                                        <img src="{{ asset('frontend') }}/assets/img/user/1.jpg" alt=""
                                            class="widget__comments-img">
                                        <div class="widget__comments-content">
                                            <ul class="widget__comments-info list-inline">
                                                <li class="widget__comments-info__item">Mohammed Ali</li>
                                                <li class="dot"></li>
                                                <li class="widget__comments-info__item"> January 15, 2021</li>
                                            </ul>
                                            <p class="widget__comments-text">Lorem ipsum dolor, sit amet consectetur
                                                adipisicing elit. Repellendus at doloremque adipisci eum placeat quod non
                                                fugiat aliquid sit similique!
                                            </p>

                                            <a href="#" class="btn-link">
                                                <i class="bi bi-reply-fill"></i> Reply
                                            </a>

                                        </div>
                                    </li>

                                    <li class="widget__comments-item">
                                        <img src="{{ asset('frontend') }}/assets/img/user/2.jpg" alt=""
                                            class="widget__comments-img">
                                        <div class="widget__comments-content">
                                            <ul class="widget__comments-info list-inline">
                                                <li class="widget__comments-info__item">Simon Albert</li>
                                                <li class="dot"></li>
                                                <li class="widget__comments-info__item"> January 15, 2021</li>
                                            </ul>
                                            <p class="widget__comments-text">Lorem ipsum dolor, sit amet consectetur
                                                adipisicing elit. Repellendus at doloremque adipisci eum placeat quod non
                                                fugiat aliquid sit similique!
                                            </p>

                                            <a href="#" class="btn-link">
                                                <i class="bi bi-reply-fill"></i> Reply
                                            </a>

                                        </div>
                                    </li>

                                    <li class="widget__comments-item">
                                        <img src="{{ asset('frontend') }}/assets/img/user/1.jpg" alt=""
                                            class="widget__comments-img">
                                        <div class="widget__comments-content">
                                            <ul class="widget__comments-info list-inline">
                                                <li class="widget__comments-info__item">Mohammed Ali</li>
                                                <li class="dot"></li>
                                                <li class="widget__comments-info__item"> January 15, 2021</li>
                                            </ul>
                                            <p class="widget__comments-text">Lorem ipsum dolor, sit amet consectetur
                                                adipisicing elit. Repellendus at doloremque adipisci eum placeat quod non
                                                fugiat aliquid sit similique!
                                            </p>

                                            <a href="#" class="btn-link">
                                                <i class="bi bi-reply-fill"></i> Reply
                                            </a>

                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!--Leave-comments-->
                            <form class="widget__form" action="#" method="POST" id="main_contact_form">
                                <h5 class="widget__form-title">Leave a Reply</h5>
                                <p class="widget__form-desc">Your email adress will not be published ,Requied fileds are
                                    marked*.</p>
                                <div class="alert alert-success " style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" cols="30" rows="5" class="form-control widget__form-input"
                                                placeholder="Message*" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name"
                                                class="form-control widget__form-input" placeholder="Name*"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email"
                                                class="form-control widget__form-input" placeholder="Email*"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-20">
                                        <div class="form-group">
                                            <input type="text" name="website" id="website"
                                                class="form-control widget__form-input" placeholder="website">
                                        </div>
                                        <label class="widget__form-label">
                                            <input name="name" type="checkbox" value="1" required="required">
                                            <span>save my name , email and website in this browser for the next time I
                                                comment.</span>
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn-custom">
                                            Send Comment
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 max-width side-sidebar">
                    <div class="theiaStickySidebar">

                        <!--widget-Latest-Posts-->
                        <div class="widget">
                            <h5 class="widget__title">Latest Posts</h5>
                            <ul class="widget__latest-posts">
                                @foreach ($posts as $latest_post)
                                    <li class="widget__latest-posts__item">
                                        <div class="widget__latest-posts-image">
                                            <a href="{{ route('post.details', $latest_post->slug) }}"
                                                class="widget__latest-posts-link">
                                                <img src="{{ asset($latest_post->image) }}" alt="{{ $latest_post->title }}"
                                                    class="widget__latest-posts-img">
                                            </a>
                                        </div>
                                        <div class="widget__latest-posts-count">1</div>
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

                        <!--widget-Releated Posts-->
                        <div class="widget">
                            <h5 class="widget__title">Releated Posts</h5>
                            <ul class="widget__latest-posts">
                                @foreach ($releated as $rel_post)
                                     <li class="widget__latest-posts__item">
                                        <div class="widget__latest-posts-image">
                                            <a href="{{ route('post.details', $rel_post->slug) }}"
                                                class="widget__latest-posts-link">
                                                <img src="{{ asset($rel_post->image) }}" alt="{{ $rel_post->title }}"
                                                    class="widget__latest-posts-img">
                                            </a>
                                        </div>
                                        <div class="widget__latest-posts-count">1</div>
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
    </section><!--/-->

    <!--newslettre-->
    <section class="newslettre__section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-10 col-sm-11 m-auto">
                    <div class="newslettre">
                        <div class="newslettre__info ">
                            <h3 class="newslettre__title">Get The Best Blog Stories into Your inbox!</h3>
                            <p class="newslettre__desc"> Sign up for free and be the first to get notified about new posts.
                            </p>
                        </div>

                        <form action="#" class="newslettre__form">
                            <input type="email" class="newslettre__form-input form-control"
                                placeholder="Your email adress" required="required">
                            <button class="newslettre__form-submit" type="submit">Subscribe</button>
                        </form>

                        <ul class="list-inline social-media social-media--layout-three">
                            <li class="social-media__item">
                                <a href="#" class="social-media__link"><i class="bi bi-facebook"></i>Facebook</a>
                            </li>

                            <li class="social-media__item">
                                <a href="#" class="social-media__link"><i class="bi bi-instagram"></i>Instagram</a>
                            </li>
                            <li class="social-media__item">
                                <a href="#" class="social-media__link"><i class="bi bi-twitter-x"></i>Twitter</a>
                            </li>
                            <li class="social-media__item">
                                <a href="#" class="social-media__link"><i class="bi bi-youtube"></i>Youtube</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
