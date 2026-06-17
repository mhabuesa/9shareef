@extends('layouts.admin')
@section('content')
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header">
                <h4>Update Quiz Time</h4>
            </div>
            <div class="card-body">
                <form action="{{route('quiz.time.update')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="startDate" class="form-label">Quiz Start Date</label>
                            <input type="text" name="start_date" id="startDate" class="form-control" value="{{$time->start_date}}">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="starttime" class="form-label">Quiz Start Time</label>
                            <input type="time" name="start_time" id="starttime" class="form-control" value="{{$time->start_time}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="endDate" class="form-label">Quiz End Date</label>
                            <input type="text" name="end_date" id="endDate" class="form-control" value="{{$time->end_date}}">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="endTime" class="form-label">Quiz End Time</label>
                            <input type="time" name="end_time" id="endTime" class="form-control" value="{{$time->end_time}}">
                        </div>
                    </div>


                    <div class="mt-3">
                        <button class="btn btn-dark">Update</button>
                    </div>
                </form>
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
