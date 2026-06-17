@extends('layouts.admin')
@section('content')
    <div class="col-lg-6 m-auto mb-3">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Functionality</h3>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered text-center">
                    <tbody>
                        <tr>
                            <th>Tasbih Visibility</th>
                            <td>
                                <a href="{{ route('tasbih.visibility') }}"
                                    class="btn btn-sm btn-{{ $visibility == 0 ? 'danger' : 'success' }}">{{ $visibility == 0 ? 'Hide' : 'Visible' }}</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Tasbih Database Empty</th>
                            <td>
                                <button type="button" class="btn btn-sm btn-danger"
                                    onclick="dataDelete(this)">
                                   Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Tasbih List</h3>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Tasbih</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasbihs as $key => $tasbih)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $tasbih->tasbih }}</td>
                                <td>{{ $tasbih->name }}</td>
                                <td>{{ $tasbih->phone }}</td>
                                <td>{{ $tasbih->address }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function dataDelete(button) {
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
                    window.location.href = "{{ route('tasbih.empty') }}";
                }
            });
        }
    </script>
@endsection
