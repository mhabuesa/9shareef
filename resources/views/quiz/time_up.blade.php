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

                    <!-- header -->
                    <header class="resultheader bn_font p-0">
                       <p> সময় শেষ!</p>
                        <div class="h-border"></div>
                    </header>

                    <div class="result_content bn_font mt-5">
                        <img width="50%" src="{{ asset('quiz') }}/images/timesup.jpg" alt="" class="mb-4">
                            <h5 class="bn_font">দুঃখিত, প্রশ্নোত্তর পর্বের সময় শেষ হয়েছে!</h5>
                       <h3>অনুগ্রহ করে আগামীতে অংশগ্রহন করবেন।</h3>
                    </div>

                    <footer class="resultfooter"></footer>

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
