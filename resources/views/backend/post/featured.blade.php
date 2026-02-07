@extends('backend.layouts.app')
@section('title', 'Featured Post List')
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
                            Featured Post List
                        </h3>
                        <div class="block-options space-x-1">
                            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                                data-target="#featuredPostSearchField" data-class="d-none">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div id="featuredPostSearchField" class="block-content border-bottom d-none">
                        <div class="push">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-alt" id="featuredPostSearch"
                                    name="search" placeholder="Search featured post..">
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-full overflow-x-auto">
                        <table class="table table-bordered table-striped table-vcenter" id="featuredPostTable">
                            <thead>
                                <tr>
                                    <th class="text-center">SL</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($featuredPosts as $key => $post)
                                    <tr>
                                        <td class="text-center fs-sm">{{ $key + 1 }}</td>
                                        <td class="fw-semibold fs-sm">{{ $post->title }}</td>
                                        <td class="fw-semibold fs-sm">{{ $post->created_at->format('d-m-Y') }}</td>

                                        <td class="fw-semibold fs-sm text-capitalize">
                                            @php
                                                $status = null;
                                                if ($post->status == 'published') {
                                                    $status = 'success';
                                                } elseif ($post->status == 'draft') {
                                                    $status = 'warning';
                                                } else {
                                                    $status = 'danger';
                                                }
                                            @endphp
                                            <div class="badge bg-{{ $status }} py-2">{{ $post->status }}</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex">
                                                <button type="button" class="border-0 btn btn-sm" onclick="featuredUpdate(this)"
                                                    data-id="{{ $post->id }}"><i
                                                        class="fa fa-trash text-danger fa-xl"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No Contribution Found!</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
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
        $(document).ready(function() {
            $("#HotpostSearch").on("keyup", function() {
                let value = $(this).val().toLowerCase();

                $("#HotpostTable tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
        $(document).ready(function() {
            $("#featuredPostSearch").on("keyup", function() {
                let value = $(this).val().toLowerCase();

                $("#featuredPostTable tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>

    <!-- Page specific script -->
    <script>
        function featuredUpdate(button) {
            const id = $(button).data('id');
            Swal.fire({
                title: "Are you sure?",
                text: "This will remove the post from Featured post.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f97316",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, Remove!"
            }).then((result) => {
                if (result.isConfirmed) {
                    let url = "{{ route('posts.featuredUpdate', ':id') }}";
                    url = url.replace(':id', id);
                    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                    $.ajax({
                        url: url,
                        type: 'get',
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

        function hotUpdate(button) {
            const id = $(button).data('id');
            Swal.fire({
                title: "Are you sure?",
                text: "This will remove the post from Hot post.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f97316",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, Remove!"
            }).then((result) => {
                if (result.isConfirmed) {
                    let url = "{{ route('posts.hotUpdate', ':id') }}";
                    url = url.replace(':id', id);
                    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                    $.ajax({
                        url: url,
                        type: 'get',
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
