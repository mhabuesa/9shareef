                            @forelse ($posts as $key => $post)
                                <!--Post-1-->
                                <div class="col-lg-3 col-md-3">
                                    <div class="post-card post-card--default">
                                        <div class="post-card__image">
                                            <a href="{{ route('post.details', $post->slug) }}">
                                                <img src="{{ asset($post->image) }}" alt="">
                                            </a>
                                        </div>

                                        <div class="post-card__content">
                                            <a href="blog-grid.html" class="category">{{ $post->category?->name }}</a>
                                            <h4 class="post-card__title">
                                                <a href="{{ route('post.details', $post->slug) }}"
                                                    class="post-card__title-link">{{ $post->title }}</a>
                                            </h4>
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
