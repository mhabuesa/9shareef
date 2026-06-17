@extends('layouts.admin')
@section('content')
    <div class="col-lg-8 m-auto">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Audio Replace</h3>
                    </div>
                    <div class="card-body">
                       <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Current Audio</label>

                            <audio controls class="form-control">
                                <source src= "{{asset('frontend')}}/assets/audio/audio.mp3" type="audio/mp3">
                            </audio>
                        </div>

                        <div class="mb-5">
                            <label class="form-label">Replace Now</label>
                            <input type="file" accept="mp3" class="form-control" name="audio" required>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
