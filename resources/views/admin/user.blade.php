@extends('layouts.admin')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">User List</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>

                                    @foreach ($users as $sl=> $user )
                                        <tr>
                                            <td>{{$sl+1}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <a href="{{route('user.delete', $user->id)}}" class="btn btn-danger"> Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 m-auto">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">User List</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('user.store')}}" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-lable">Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                        @error('name')
                                            <strong class="text-danger text-capitalize">{{$message}}</strong>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-lable">Email</label>
                                        <input type="email" name="email" class="form-control" required>
                                        @error('email')
                                            <strong class="text-danger text-capitalize">{{$message}}</strong>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-lable">Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                        @error('password')
                                            <strong class="text-danger text-capitalize">{{$message}}</strong>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                       <button class="btn btn-success">Add User</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')

    @if (session('created'))
        <script>
            const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
            });
            Toast.fire({
            icon: "success",
            title: "{{session('created')}}"
            });
        </script>
    @endif

    @if (session('delete'))
        <script>
            const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
            });
            Toast.fire({
            icon: "success",
            title: "{{session('delete')}}"
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
            });
            Toast.fire({
            icon: "error",
            title: "{{session('error')}}"
            });
        </script>
    @endif

@endsection
