@extends('layouts.admin')
@section('content')
    <div class="col-lg-12">
        <div class="card table-responsive">
            <div class="card-header">
                <h4 class="text-center">Quiz Full List</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('quiz_deleteAll') }}" method="POST">
                    @csrf
                    <table class="table table-bordered text-center">
                        <tr>
                            <th>SL</th>
                            <th>Action</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Ans 1</th>
                            <th>Ans 2</th>
                            <th>Ans 3</th>
                            <th>Ans 4</th>
                            <th>Ans 5</th>
                            <th>Ans 6</th>
                            <th>Lokob</th>
                            <th>Lokob Count</th>
                            <th>Sentence</th>
                            <th>Qaseedah Shareef</th>
                        </tr>
                        @foreach ($quizes as $quiz)
                            @php
                                $lokobWords = explode(',', $quiz->lokob); // `,` দ্বারা বিভক্ত মান
                                $lokobCount = count($lokobWords); // মোট শব্দ গুনছি
                                $duplicates = array_unique(array_diff_assoc($lokobWords, array_unique($lokobWords))); // ডুপ্লিকেট চেক করছি
                            @endphp
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>
                                    <input type="checkbox" name="quiz[]" value="{{ $quiz->id }}">
                                    <a href="{{ route('quiz.list.delete', $quiz->id) }}"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                <td>{{ $quiz->name }}</td>
                                <td>{{ $quiz->address }}</td>
                                <td>{{ $quiz->ans1 }}</td>
                                <td>{{ $quiz->ans2 }}</td>
                                <td>{{ $quiz->ans3 }}</td>
                                <td>{{ $quiz->ans4 }}</td>
                                <td>{{ $quiz->ans5 }}</td>
                                <td>{{ $quiz->ans6 }}</td>
                                <td>{{ $quiz->lokob }}</td>
                                <td>{{ $lokobCount }}</td> {{-- মোট শব্দের সংখ্যা দেখাচ্ছে --}}
                                <td>
                                    @if (!empty($duplicates))
                                        ডুপ্লিকেট: {{ implode(', ', $duplicates) }}
                                    @else
                                        কোন ডুপ্লিকেট নেই
                                    @endif
                                </td>
                                <td>
                                    @foreach ($quiz->sentence ?? [] as $key => $sentence)
                                        {{ $key * 3 + 1 }}. {{ $sentence->sentence1 }} <br>
                                        {{ $key * 3 + 2 }}. {{ $sentence->sentence2 }} <br>
                                        {{ $key * 3 + 3 }}. {{ $sentence->sentence3 }} <br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($quiz->qaseedah ?? [] as $key => $qaseedah)
                                        {{ $key * 3 + 1 }}. {{ $qaseedah->qaseedah1 }} <br>
                                        {{ $key * 3 + 2 }}. {{ $qaseedah->qaseedah2 }} <br>
                                        {{ $key * 3 + 3 }}. {{ $qaseedah->qaseedah3 }} <br>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td colspan="2">
                                <button type="submit" class="btn btn-danger">Delete All</button>
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>
    </div>
@endsection
