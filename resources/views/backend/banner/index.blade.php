@extends('backend.layouts.app')
@section('title', 'Banner Management')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets') }}/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/select2/css/select2.min.css">
@endpush
@section('content')
    <!-- Main content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Banner List
                        </h3>
                    </div>
                    <div class="block-content block-content-full overflow-x-auto">
                        <table class="table table-bordered table-striped table-vcenter" id="bannerTable">
                            <thead>
                                <tr>
                                    <th class="text-center">SL</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $key => $banner)
                                    <tr>
                                        <td class="text-center fs-sm">{{ $key + 1 }}</td>
                                        <td class="fw-semibold fs-sm">{{ $banner->post?->title }}</td>
                                        <td class="fw-semibold fs-sm">{{ $banner->post?->category->name }}</td>
                                        <td class="fw-semibold fs-sm">{{ $banner->priority }}</td>
                                        <td class="fw-semibold fs-sm">
                                            <div class="form-check form-switch text-center">
                                                <input class="form-check-input" id="status" type="checkbox"
                                                    {{ $banner->status == '1' ? 'checked' : '' }} name="status"
                                                    data-id="{{ $banner->id }}" data-status="{{ $banner->status }}"
                                                    onchange="updateBannerStatus(this)">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm border-0 editBannerBtn"
                                                data-id="{{ $banner->id }}" data-priority="{{ $banner->priority }}"
                                                title="Edit Banner Priority">
                                                <i class="fa-solid fa-pen text-secondary fa-lg"></i>
                                            </button>
                                            <button type="button" class="border-0 btn btn-sm" onclick="deleteBanner(this)"
                                                data-id="{{ $banner->id }}"><i
                                                    class="fa fa-trash text-danger fa-xl"></i></button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Add New Banner
                        </h3>
                    </div>
                    <div class="block-content block-content-full overflow-x-auto">
                        <form action="{{ route('banner.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Post <span class="text-danger">*</span></label>
                                <select class="js-select2 form-select" id="post_id" name="post_id" required>
                                    <option value="">Select Post</option>
                                    @foreach ($posts as $id => $post)
                                        <option value="{{ $id }}">{{ $post }}</option>
                                    @endforeach
                                </select>
                                @error('post_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-0 text-center">
                                <button type="submit" class="btn btn-primary w-50 mt-4">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <!-- /.content -->

    <div class="modal fade" id="editBannerModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Edit Banner Priority</h5>
                    <button type="button" class="btn-close" id="closeEditModal"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="edit_banner_id">

                    <div class="mb-3">
                        <label class="form-label">Priority</label>
                        <input type="number" id="edit_priority" class="form-control">
                        <small id="priorityError" class="text-danger d-none"></small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="closeEditModal">
                        Cancel
                    </button>
                    <button type="button" class="btn btn-primary" id="updateBannerBtn">
                        Update
                    </button>
                </div>

            </div>
        </div>
    </div>




@endsection

@push('footer_scripts')
    <script src="{{ asset('assets') }}/js/plugins/select2/js/select2.full.min.js"></script>
    <script>
        One.helpersOnLoad(['jq-select2']);
    </script>
    {{-- DataTables  & Plugins --}}
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
        $('#bannerTable').DataTable();
    </script>

    <!-- Page specific script -->
    <script>
        function deleteBanner(button) {
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
                    let url = "{{ route('banner.destroy', ':id') }}";
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

        function updateBannerStatus(element) {
            Swal.fire({
                title: "Are you sure?",
                text: "Will update banner status",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, update it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    updateBannerStatusAjax(element);
                } else {
                    element.checked = !element.checked;
                }
            })
        }

        function updateBannerStatusAjax(element) {
            const id = $(element).data('id');
            let url = "{{ route('banner.status.update', ':id') }}";
            url = url.replace(':id', id);

            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if (data.success) {
                        showToast(data.message, "success");
                    } else {
                        showToast(data.message, "error");
                    }
                },
                error: function(xhr, status, error) {
                    console.log('xhr.responseText, status, error', xhr.responseText, status, error);
                    showToast('Something went wrong', "error");
                }
            });
        }
    </script>
    <script>
        let editBannerModal;

        // 🔹 Open modal
        $(document).on('click', '.editBannerBtn', function() {

            $('#edit_banner_id').val($(this).data('id'));
            $('#edit_priority').val($(this).data('priority'));

            resetErrors();

            editBannerModal = new bootstrap.Modal(
                document.getElementById('editBannerModal')
            );
            editBannerModal.show();
        });

        // 🔹 Close modal
        $(document).on('click', '#closeEditModal', function() {
            if (editBannerModal) {
                editBannerModal.hide();
            }
        });

        // 🔹 Reset errors
        function resetErrors() {
            $('#priorityError').addClass('d-none').text('');
            $('#edit_priority').removeClass('is-invalid');
        }

        // 🔹 Input change → hide error
        $(document).on('input', '#edit_priority', function() {
            resetErrors();
        });

        // 🔹 Update banner priority (AJAX)
        $(document).on('click', '#updateBannerBtn', function() {

            let id = $('#edit_banner_id').val();
            let priority = $('#edit_priority').val();

            resetErrors();

            $.ajax({
                url: "{{ route('banner.update') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    priority: priority
                },
                beforeSend: function() {
                    $('#updateBannerBtn')
                        .prop('disabled', true)
                        .text('Updating...');
                },
                success: function(res) {

                    if (res.errors?.priority) {
                        $('#priorityError')
                            .removeClass('d-none')
                            .text(res.errors.priority[0]);

                        $('#edit_priority').addClass('is-invalid');
                        return;
                    }

                    if (res.success) {
                        location.reload();
                    }
                },
                complete: function() {
                    $('#updateBannerBtn')
                        .prop('disabled', false)
                        .text('Update');
                }
            });
        });
    </script>
@endpush
