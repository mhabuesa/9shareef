@extends('layouts.admin')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Date & Time</h3>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-lg-4 m-auto ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Hijree</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('hijri.update')}}" method="POST">
                                    @csrf
                                    <div class="d-flex justify-content-center">
                                        <div class="mb-2 text-center me-2">
                                            <input type="text" name="hijri" class="form-control" id="" placeholder="2012.12.24" required value="{{$hijri->hijri}}">
                                            @error('date')
                                                <strong class="text-danger text-capitalize">{{$message}}</strong>
                                            @enderror
                                        </div>
                                        <div class="mb-2 ">
                                            <button class="btn btn-success" type="submit">Update</button>
                                        </div>

                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">


                    <div class="col-lg-5 m-auto">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h3 class="text-center">9th Rwamadan Shareef</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('date.update', 1)}}" method="POST">
                                    @csrf
                                    <div class="d-flex justify-content-center">
                                        <div class="mb-2 text-center me-2">
                                            <label class="form-label ">Date </label>
                                            <input type="text" name="date" class="form-control" id="" placeholder="2012.12.24" required value="{{$content1->date}}">
                                            @error('date')
                                                <strong class="text-danger text-capitalize">{{$message}}</strong>
                                            @enderror
                                        </div>
                                        <div class="mb-2 text-center">
                                            <label class="form-label"> Time</label>
                                            <input type="time" name="time" class="form-control" id="" required value="{{$content1->time}}">
                                            @error('time')
                                                <strong class="text-danger text-capitalize">{{$message}}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                        <div class="mb-2 mt-4">
                                            <button class="btn btn-success" type="submit">Update</button>
                                        </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 m-auto ">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h3 class="text-center">Particalse Sound</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('volume.update')}}" method="POST">
                                    @csrf
                                    <div class="d-flex justify-content-center">
                                        <div class="mb-2 text-center me-2">
                                            <label class="form-label ">Volume </label>
                                            <input type="number" name="volume" class="form-control" id="" placeholder="1-100" required value="{{$volume->volume}}">

                                        </div>

                                    </div>
                                        <div class="mb-2 mt-4">
                                            <button class="btn btn-success" type="submit">Update</button>
                                        </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection


@section('script')

    @if (session('update'))
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
            title: "{{session('update')}}"
            });
        </script>
    @endif



@endsection
