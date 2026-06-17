@extends('layouts.admin')
@section('content')
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header text-center">
                <h3>Works Category</h3>
            </div>
            <div class="card-body text-center">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($categories as $sl=> $category )
                        <tr>
                            <td>{{$sl+1}}</td>
                            <td>{{$category->category}}</td>
                            <td>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>


    <div class="col-lg-4">
        <div class="card">
            <div class="card-header text-center">
                <h3>Add Category</h3>
            </div>
            <div class="card-body ">
               <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="category" class="form-control" required>
                </div>

                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Add Category</button>
                </div>
               </form>
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



@endsection
