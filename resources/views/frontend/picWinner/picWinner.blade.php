@include('backend.post.partials.header_script')
@extends('backend.layouts.app')
@section('title', 'Add Post')
@section('content')
    <div class="container-fluid">
        <form action="{{ route('pic.winner.store') }}" method="POST">
            @csrf
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Basic Information</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="row push">
                        <div class="col-lg-8 col-xl-8 m-auto">
                            <div class="mb-4">
                                <div class="row">
                                    @php
                                        $oldNames = old('name', ['']);
                                        $oldInfos = old('info', ['']);
                                    @endphp
                                    @foreach ($oldNames as $i => $oldName)
                                        <div class="col-lg-12 d-flex justify-content-center m-auto">
                                            <div class="mb-4 mx-2">
                                                <input type="text"
                                                    class="form-control @error('name.' . $i) is-invalid @enderror"
                                                    name="name[]" value="{{ $oldName }}" placeholder="Name" required>
                                                @error('name.' . $i)
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-4">
                                                <input type="text" class="form-control" name="info[]"
                                                    value="{{ $oldInfos[$i] ?? '' }}" placeholder="Info">
                                            </div>
                                            <div class="mb-4 mx-2">
                                                <button type="button" class="btn btn-primary add-row">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="mb-4 mx-2">
                                                <button type="button" class="btn btn-danger delete-row"
                                                    style="display:{{ $i === 0 ? 'none' : 'inline-block' }};">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <button type="submit" class="btn btn-primary  w-50 mt-4 mb-4">Submit</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($names as $name)
                    <tr>
                        <td>{{ $name->name }}</td>
                        <td>{{ $name->info }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function getRowHtml() {
                return `
                <div class=\"mb-4 mx-2\">
                    <input type=\"text\" class=\"form-control\" name=\"name[]\" placeholder=\"Name\" required>
                </div>
                <div class=\"mb-4\">
                    <input type=\"text\" class=\"form-control\" name=\"info[]\" placeholder=\"Info\">
                </div>
                <div class=\"mb-4 mx-2\">
                    <button type=\"button\" class=\"btn btn-danger delete-row\"><i class=\"fa fa-times\"></i></button>
                </div>
            `;
            }
            document.body.addEventListener('click', function(e) {
                if (e.target.closest('.add-row')) {
                    var parent = e.target.closest('.col-lg-12');
                    var newRow = document.createElement('div');
                    newRow.className = 'col-lg-12 d-flex justify-content-center m-auto';
                    newRow.innerHTML = getRowHtml();
                    // Find the container holding all rows
                    var container = parent.parentNode;
                    container.appendChild(newRow);
                    // Show delete button for all except first row
                    var allRows = container.querySelectorAll('.col-lg-12');
                    allRows.forEach(function(row, idx) {
                        var delBtn = row.querySelector('.delete-row');
                        if (delBtn) delBtn.style.display = (idx === 0) ? 'none' : 'inline-block';
                    });
                }
                if (e.target.closest('.delete-row')) {
                    var parent = e.target.closest('.col-lg-12');
                    parent.remove();
                }
            });
            // Initial delete button visibility
            var allRows = document.querySelectorAll('.col-lg-12');
            allRows.forEach(function(row, idx) {
                var delBtn = row.querySelector('.delete-row');
                if (delBtn) delBtn.style.display = (idx === 0) ? 'none' : 'inline-block';
            });
        });
    </script>
    </form>
    </div>
@endsection
@push('footer_scripts')
@endpush
