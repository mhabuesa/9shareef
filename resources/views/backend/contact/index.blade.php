@extends('backend.layouts.app')
@section('title', 'Contact')
@section('content')
    @php
        $data = request()->route('slug') ?? 'unread';
    @endphp
    <div class="row">
        {{-- Sidebar --}}
        @include('backend.contact.partials.sidebar')
        {{-- Message Box --}}
        <div class="col-md-7 col-xl-9" id="messageBox">
            <form action="{{ route('admin.contact.delete') }}" method="POST">
                @csrf
                <input type="hidden" name="slug" value="{{ $data }}">
                <div class="block block-rounded">
                    {{-- Header --}}
                    <div class="block-header block-header-default d-flex justify-content-between">
                        <div class="block-options p-0">

                            <span class="d-none d-sm-inline fw-semibold text-capitalize">
                                <div class="form-check d-inline-block">
                                    <input class="form-check-input me-4" type="checkbox" id="selectAll">
                                    {{ $data }}
                                </div>
                            </span>
                        </div>
                        <div class="block-options">
                            <button type="button" class="btn-block-option mx-3" data-toggle="block-option"
                                data-action="fullscreen_toggle">
                            </button>
                            @if ($data == 'trash')
                                <button class="btn btn-sm btn-alt-secondary" type="submit" name="action" value="restore">
                                    <i class="fa fa-undo text-success"></i>
                                    <span class="d-none d-sm-inline ms-1">Restore</span>
                                </button>

                                <button class="btn btn-sm btn-alt-secondary permanent-delete-btn" type="button">
                                    <i class="fa fa-times text-danger"></i>
                                    <span class="d-none d-sm-inline ms-1">Permanently Delete</span>
                                </button>
                            @else
                                <button class="btn btn-sm btn-alt-secondary delete-btn" type="button">
                                    <i class="fa fa-trash text-danger"></i>
                                    <span class="d-none d-sm-inline ms-1">Delete</span>
                                </button>
                            @endif
                        </div>
                    </div>

                    {{-- Table --}}
                    <div class="block-content py-0">
                        <div class="pull-x">
                            <table class="js-table-checkable table table-hover table-vcenter fs-sm">
                                <tbody>
                                    @forelse ($messages as $message)
                                        <tr>
                                            {{-- Checkbox --}}
                                            <td class="text-center" style="width: 60px;">
                                                <input class="form-check-input" type="checkbox" name="message[]"
                                                    value="{{ $message->id }}">

                                            </td>
                                            {{-- Name --}}
                                            <td class="d-none d-sm-table-cell fw-semibold"
                                                style="width:140px; cursor:pointer;"
                                                onclick="window.location='{{ route('admin.contact.show', ['id' => $message->id, 'slug' => $data]) }}'">

                                                {{ $data == 'sendMessage' ? $message->email : $message->name ?? 'N/A' }}

                                            </td>

                                            {{-- Subject --}}
                                            <td style="cursor:pointer;"
                                                onclick="window.location='{{ route('admin.contact.show', ['id' => $message->id, 'slug' => $data]) }}'">

                                                {{ $message->subject }}

                                            </td>

                                            {{-- Time --}}
                                            <td class="d-none d-xl-table-cell text-muted" style="width:120px;">
                                                <em>{{ $message->created_at->diffForHumans() }}</em>
                                            </td>

                                        </tr>

                                    @empty

                                        <tr>
                                            <td colspan="4" class="text-center py-4">
                                                No Message Found
                                            </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </form>

        </div>

    </div>

@endsection


@push('footer_scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // ----- SELECT ALL FUNCTIONALITY -----
            const selectAll = document.getElementById('selectAll');
            if (selectAll) {
                selectAll.addEventListener('change', function() {
                    const form = selectAll.closest('form');
                    const checkboxes = form.querySelectorAll('input[name="message[]"]');
                    checkboxes.forEach(cb => cb.checked = selectAll.checked);
                });
            }

            // ----- DELETE / PERMANENT DELETE -----
            function handleDelete(buttonClass, actionValue) {

                const buttons = document.querySelectorAll(buttonClass);

                buttons.forEach(button => {

                    button.addEventListener('click', function() {

                        const form = button.closest('form');
                        const checked = form.querySelectorAll('input[name="message[]"]:checked');

                        if (checked.length === 0) {
                            Swal.fire({
                                icon: 'warning',
                                title: 'No message selected!',
                                text: 'Please select at least one message.'
                            });
                            return;
                        }

                        Swal.fire({
                            title: 'Are you sure?',
                            text: "This action cannot be undone!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'Yes, continue!'
                        }).then((result) => {

                            if (result.isConfirmed) {

                                // Remove old action input if exists
                                form.querySelectorAll('input[name="action"]').forEach(el =>
                                    el.remove());

                                // Add new hidden action input
                                let input = document.createElement("input");
                                input.type = "hidden";
                                input.name = "action";
                                input.value = actionValue;
                                form.appendChild(input);

                                // Submit the form
                                form.submit();
                            }

                        });

                    });

                });

            }

            // Bind delete buttons
            handleDelete('.delete-btn', 'delete');
            handleDelete('.permanent-delete-btn', 'forceDelete');

        });
    </script>
@endpush
