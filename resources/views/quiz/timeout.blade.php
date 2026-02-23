<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz & Puzzle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Toastify -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/quiz/css/style.css">

    <!-- Font Awesome Free CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"
        integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <form action="{{ route('quiz.store') }}" method="POST">
        @csrf
        <div class="quiz-container">
            <div class="card shadow-lg">
                <img class="img-fluid" src="{{ asset('frontend') }}/image/noor.png" alt="">
                <h2 class="text-center fw-bold" id="welcome">দুঃখিত!</h2>
                <h4 class="text-center fw-bold">প্রশ্নোত্তর প্রতিযোগিতার সময় শেষ।</h4>
            </div>
        </div>
    </form>


    {{-- js --}}
</body>

</html>
