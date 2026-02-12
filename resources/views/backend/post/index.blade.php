@extends('backend.layouts.app')
@section('title', 'Post List')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets') }}/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">
@endpush
@section('content')

    <!-- Main content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 m-auto mt-4">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Post List
                        </h3>
                        <div class="block-options space-x-1">
                            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                                data-target="#one-dashboard-search-orders" data-class="d-none">
                                <i class="fa fa-search"></i>
                            </button>
                            <a href="{{ route('admin.posts.create') }}" class="badge bg-primary p-2"> <i class="fa fa-plus"></i>
                                Add
                                New Post </a>
                        </div>
                    </div>
                    <div id="one-dashboard-search-orders" class="block-content border-bottom d-none">
                        <div class="push">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-alt" id="postSearch" name="search"
                                    placeholder="Search all Post..">
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-full overflow-x-auto">
                        <table class="table table-bordered table-striped table-vcenter" id="postTable">
                            <thead>
                                <tr>
                                    <th class="text-center">SL</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                {{-- AJAX CONTENT LOAD HERE --}}
                            </tbody>
                        </table>
                    </div>
                    <div class="block-content block-content-full bg-body-light p-2">
                        <div class="text-center">
                            <button id="loadMore" class="btn btn-primary">
                                <span class="btn-text">Load More</span>
                                <span class="spinner-border spinner-border-sm d-none" role="status"
                                    aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <!-- /.content -->

@endsection

@push('footer_scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets') }}/js/plugins/datatables/dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/datatables-buttons/buttons.print.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/datatables-buttons/buttons.html5.min.js"></script>
    <script src="{{ asset('assets') }}/js/pages/be_tables_datatables.min.js"></script>

    <script>
        let currentPage = 1;
        let currentSearch = "";

        function loadOrders(reset = false) {
            let button = $("#loadMore");

            button.find('.btn-text').addClass('d-none');
            button.find('.spinner-border').removeClass('d-none');

            $.ajax({
                url: "{{ route('admin.posts.getList.ajax') }}",
                data: {
                    page: currentPage,
                    search: currentSearch,
                },
                cache: false,
                success: function(res) {
                    if (reset) {
                        $("#tableBody").html("");
                    }
                    $("#tableBody").append(res.data);

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

        // ✅ Search input
        $("#postSearch").on("keyup", function() {
            currentSearch = $(this).val();
            currentPage = 1;
            loadOrders(true);
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#postSearch").on("keyup", function() {
                let value = $(this).val().toLowerCase();

                $("#postTable tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>

    <!-- Page specific script -->
    <script>
        function deletepost(button) {
            const id = $(button).data('id');
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
                    let url = \"{{ route('admin.posts.destroy', ':id') }}\";
                    url = url.replace(':id', id);
                    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': token
                        },
                        success: function(data) {
                            if (data.success) {
                                showToast(data.message, "success");
                                $(button).closest('tr').remove();
                            } else {
                                showToast(data.message, "error");
                            }
                        },
                        error: function(xhr) {
                            showToast("An error occurred: " + xhr.responseJSON.message, "error");
                        }
                    });
                }
            });
        }
    </script>
@endpush
