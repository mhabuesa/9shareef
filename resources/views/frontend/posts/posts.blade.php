@section('title', $pageTitle)
@extends('frontend.layouts.app')
@section('content')
    <!--blog-grid-->
    <section class="mt-130 mb-30">
        <div class="container-fluid" style="transform: none;">
            <div class="row">
                <div class="col-xl-12 mt-30 side-content">
                    <div class="theiaStickySidebar">
                        <div class="row masonry-items" id="postContainer">
                            {{-- AJAX CONTENT LOAD HERE --}}
                        </div>

                        <!--pagination-->
                        <div id="loadMore" class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span class="btn-text category btn p-3 mb-4">View More Posts</span>
                                <span class="spinner-border spinner-border-sm d-none" role="status"
                                    aria-hidden="true"></span>
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
        let currentPage = 1;
        let currentSlug = "{{ $slug ?? '' }}";
        let search = "{{ $search ?? '' }}";

        function loadOrders(reset = false) {
            let button = $("#loadMore");

            button.find('.btn-text').addClass('d-none');
            button.find('.spinner-border').removeClass('d-none');

            $.ajax({
                url: "{{ route('loadPost.ajax') }}",
                data: {
                    page: currentPage,
                    slug: currentSlug,
                    slug: currentSlug,
                    search: search,
                },
                cache: false,
                success: function(res) {
                    if (reset) {
                        $("#postContainer").html("");
                    }
                    $("#postContainer").append(res.data);

                    // Reinitialize masonry layout
                    $(".masonry-items").masonry('reloadItems').masonry('layout');

                    if (!res.hasMore) {
                        button.hide();
                    } else {
                        button.show();
                    }
                },
                complete: function() {
                    button.find('.btn-text').removeClass('d-none');
                    button.find('.spinner-border').addClass('d-none');
                }
            });
        }

        loadOrders(true);

        // Load More
        $("#loadMore").on("click", function() {
            currentPage++;
            loadOrders();
        });
    </script>
@endpush
