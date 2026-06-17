@extends('layouts.admin')
@section('content')
    <div class="col-lg-4 m-auto mb-3">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Functionality</h3>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered text-center">
                    <tbody>
                        <tr>
                            <th>Meelad Shareef Visibility</th>
                            <td>
                                <a href="{{ route('meeladShareef.visibility') }}"
                                    class="btn btn-sm btn-{{ $visibility == 0 ? 'danger' : 'success' }}">{{ $visibility == 0 ? 'Hide' : 'Visible' }}</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4 m-auto mb-3">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Total Milad Shareef Count</h3>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered text-center">
                    <tbody>
                        <tr>
                            <th>Total Meelad Shareef</th>
                            <td>
                                <h3 class="text-center">{{ $total }}</h3>
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
                <h3 class="text-center">Meelad Shareef List</h3>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Meelad Shareef</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lists as $key => $data)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->count }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->comment }}</td>
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
