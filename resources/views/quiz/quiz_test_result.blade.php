<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>

    <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('quiz') }}/fonts/font.css">

    <!-- fontawesome 5 -->
    <link rel="stylesheet" href="{{ asset('quiz') }}/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('quiz') }}/css/Bootstrap/bootstrap.min.css">

    <!-- Custom Css Files -->
    <link rel="stylesheet" href="{{ asset('quiz') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('quiz') }}/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('quiz') }}/css/animation.css">

    <!-- result css -->
    <link rel="stylesheet" href="{{ asset('quiz') }}/css/result_style.css">



    <style>
        @font-face {
            font-family: QyyumBook;
            src: url({{ asset('frontend') }}/assets/fonts/bangla/QyyumBook.ttf);
        }

        .bn_font {
            font-family: "QyyumBook";
        }

   </style>
</head>
<body>

    <main class="overflow-hidden">

        <div class="thankyou-page thankyou_show">
            <!-- result -->
        <div class="loadingresult">
            <img src="{{ asset('quiz') }}/images/loading.gif" alt="loading">
        </div>
        <div class="">
            <div class="container bn_font">
                <div class="result_inner">

                    <div class="col-lg-12 mt-3">
                        <div class="card table-responsive">
                            <div class="card-header">
                                <h4 class="text-center">Quiz Answer List</h4>
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
                                            <th>Lokob</th>
                                            <th>Lokob Count</th>
                                            <th>Lokob Duplicate</th>
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
                                                <td >
                                                    <div class="d-flex">
                                                        <input type="checkbox" class="form-check-input me-2" name="quiz[]" value="{{ $quiz->id }}">
                                                    <a href="{{ route('quiz.list.delete', $quiz->id) }}"
                                                        class="btn btn-danger btn-sm">Delete</a>
                                                    </div>
                                                </td>
                                                <td>{{ $quiz->name }}</td>
                                                <td>{{ $quiz->address }}</td>
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

                </div>
            </div>
        </div>
        </div>

    </main>

    <div id="error"></div>

    <!-- bootstrap 5 -->
    <script src="{{asset('quiz')}}/js/Bootstrap/bootstrap.min.js"></script>

    <!-- jQuery -->
    <script src="{{asset('quiz')}}/js/jQuery/jquery-3.6.3.min.js"></script>

    <!-- Thankyou JS -->
    <script src="{{asset('quiz')}}/js/thankyou.js"></script>

    <!-- Custom js -->
    <script src="{{asset('quiz')}}/js/custom.js"></script>

</body>
</html>
