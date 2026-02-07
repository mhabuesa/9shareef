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
    </section><!--/-->
@endsection
