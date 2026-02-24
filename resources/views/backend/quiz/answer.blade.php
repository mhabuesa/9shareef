@include('backend.post.partials.header_script')
@extends('backend.layouts.app')
@section('title', 'Add Post')
@section('content')
    <div class="container-fluid">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Quiz Question</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row push">
                    <div class="col-lg-10 col-xl-10 m-auto">
                        <div class="mb-4">
                            <table class="table table-bordered table-striped table-vcenter">
                                <tr>
                                    <th class="text-center" width="10%">SL</th>
                                    <th class="text-center">Question</th>
                                    <th class="text-center">Answer</th>
                                </tr>
                                <tr>
                                    <td class="text-center" width="10%">01</td>
                                    <td class="text-center">আইয়্যামে নূর শরীফে আমাদের আগামীকালের কার্যক্রম কি?</td>
                                    <td class="text-center">মুবারক স্মৃতিচারণ বিষয়ক পডকাষ্ট।</td>
                                </tr>
                                <tr>
                                    <td class="text-center" width="10%">02</td>
                                    <td class="text-center">সাইয়্যিদুনা খলীফাতুল উমাম আলাইহিস সালাম উনার উমাম শব্দ যুক্ত লকব
                                        মুবারক লিখুন।</td>
                                    <td class="text-center"></td>
                                </tr>
                                <tr>
                                    <td class="text-center" width="10%">03</td>
                                    <td class="text-center">আইয়্যামে নূর উনার নামকরণ কে করেছেন?</td>
                                    <td class="text-center">সাইয়্যিদুনা ইমামুল উমাম আলাইহিস সালাম</td>
                                </tr>
                                <tr>
                                    <td class="text-center" width="10%">04</td>
                                    <td class="text-center">গতবছর ৯ই রমাদ্বান শরীফ উনার থিম ক্বাছীদাহ শরীফ কি ছিলেন?</td>
                                    <td class="text-center">দনিয়াতে তাশরীফ আনেন মারহাবা ইয়া শাহযাদা</td>
                                </tr>
                                <tr>
                                    <td class="text-center" width="10%">05</td>
                                    <td class="text-center">নিচের লাইন গুলো থেকে শব্দ গুছিয়ে একটি বাক্য সাজান। শব্দে ক্লিক
                                        করলে উপরের
                                        লাইনে বসবে।</td>
                                    <td class="text-center"></td>
                                </tr>
                                <tr>
                                    <td class="text-center" width="10%">06</td>
                                    <td class="text-center">সাইয়্যিদুনা খলীফাতুল উমাম আলাইহিস সালাম উনার এখন পর্যন্ত সর্বশেষ
                                        লিখিত কিতাব
                                        কোনটি?</td>
                                    <td class="text-center">মাইল</td>
                                </tr>
                                <tr>
                                    <td class="text-center" width="10%">07</td>
                                    <td class="text-center">শাহ নাওয়াদী আলাইহাস সালাম উনার সুমহান বিলাদত শরীফ কত তারিখ ও কি
                                        বার?</td>
                                    <td class="text-center">৯ শে যিলহজ্জ শরীফ - ইছনাইনিল আযীম শরীফ।</td>
                                </tr>
                                <tr>
                                    <td class="text-center" width="10%">08</td>
                                    <td class="text-center">এবছর ৯ই রমাদ্বান শরীফ উনার থিম ক্বাছীদাহ শরীফ কোনটি?</td>
                                    <td class="text-center">খলীফাতুল উমাম আস সালাম।</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-10 col-xl-10 m-auto">
                        <div class="mb-4">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center">SL</th>
                                        <th>Info</th>
                                        <th>question 1</th>
                                        <th>question 2</th>
                                        <th>question 3</th>
                                        <th>question 4</th>
                                        <th>question 5</th>
                                        <th>question 6</th>
                                        <th>question 7</th>
                                        <th>question 8</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($quizAnswers as $key => $answer)
                                        <tr>
                                            <td class="text-center fs-sm">{{ $key + 1 }}</td>
                                            <td class="fw-semibold fs-sm">
                                                {{ $answer->name }} <br>
                                                {{ $answer->phone }}<br>
                                                {{ $answer->address }}
                                            </td>
                                            <td class="text-center fs-sm">{{ $answer->question1 }}</td>
                                            <td class="text-center fs-sm">{{ $answer->question2 }}</td>
                                            <td class="text-center fs-sm">{{ $answer->question3 }}</td>
                                            <td class="text-center fs-sm">{{ $answer->question4 }}</td>
                                            <td class="text-center fs-sm">
                                                {{ $answer->question4 }}</td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@include('backend.post.partials.footer_script')
