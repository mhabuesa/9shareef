@include('backend.post.partials.header_script')
@extends('backend.layouts.app')
@section('title', 'Add Post')
@section('content')
    <div class="container-fluid">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Quiz Question</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row push">
                    <div class="col-lg-12 col-xl-12 m-auto">
                        <div class="mb-4">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center">SL</th>
                                        <th>Info</th>
                                        <th>question 1</th>
                                        <th>question 2</th>
                                        <th>question 3</th>
                                        <th>question 4</th>
                                        <th>question 5</th>
                                        <th>question 6</th>
                                        <th>question 7</th>
                                        <th>question 8</th>
                                        <th>question 9</th>
                                        <th>Qualified</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($winners as $key => $winner)
                                        <tr>
                                            <td class="text-center fs-sm">{{ $key + 1 }}</td>
                                            <td class="fw-semibold fs-sm">
                                                {{ $winner->name }} <br>
                                                {{ $winner->phone }}<br>
                                                {{ $winner->address }}
                                            </td>
                                            <td class="text-center fs-sm">{{ $winner->question1 }}</td>
                                            <td class="text-center fs-sm">{{ $winner->question2 }}</td>
                                            <td class="text-center fs-sm">{{ $winner->question3 }}</td>
                                            <td class="text-center fs-sm">{{ $winner->question4 }}</td>
                                            <td class="text-center fs-sm">
                                                {{ $winner->question5_1 }}, <br>
                                                {{ $winner->question5_2 }}, <br>
                                                {{ $winner->question5_3 }}
                                            </td>
                                            <td class="text-center fs-sm">{{ $winner->question6 }}</td>
                                            <td class="text-center fs-sm">{{ $winner->question7 }}</td>
                                            <td class="text-center fs-sm">{{ $winner->question8 }}</td>
                                            <td class="text-center fs-sm">
                                                {{ $winner->puzzle_result }}, <br>
                                                {{ $winner->solved_time }}
                                            </td>
                                            <td class="fw-semibold fs-sm">
                                                <div class="form-check form-switch text-center">
                                                    <input class="form-check-input" id="status" type="checkbox"
                                                        {{ $winner->qualified == '1' ? 'checked' : '' }} name="status"
                                                        data-id="{{ $winner->id }}" data-status="{{ $winner->status }}"
                                                        onchange="updatewinnerQualified(this)">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.quiz.edit', $winner->id) }}" class="border-0 btn btn-sm">
                                                    <i class="fa fa-pencil text-secondary fa-xl"></i>
                                                </a>
                                                <button type="button" class="border-0 btn btn-sm"
                                                    onclick="deletewinner(this)" data-id="{{ $winner->id }}"><i
                                                        class="fa fa-trash text-danger fa-xl"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('footer_scripts')
    <script>
        function deletewinner(button) {
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
                    let url = "{{ route('admin.quiz.destroy', ':id') }}";
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

        function updatewinnerQualified(element) {
            Swal.fire({
                title: "Are you sure?",
                text: "Will update winner qualified",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, update it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    updatewinnerQualifiedAjax(element);
                } else {
                    element.checked = !element.checked;
                }
            })
        }

        function updatewinnerQualifiedAjax(element) {
            const id = $(element).data('id');
            let url = "{{ route('admin.quiz.qualified', ':id') }}";
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
@endpush
