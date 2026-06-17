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

    {{-- <main class="overflow-hidden">

        <div class="thankyou-page thankyou_show">
            <header class="thankyouheader">
                <h2>
                    কুইজের উত্তর দেওয়ার জন্য আপনি প্রস্তুত তো?
                </h2>
            </header>
            <main class="thankyou-page-inner">
                <img src="{{asset('quiz')}}/images/start_time.png" alt="" style="width: 250px;  transform: rotate(45deg);" >
                <h1 style="margin-bottom: 25px">কুইজ শুরু হতে বাকি আর মাত্র..</h1>
                <span id="countdown-timer" style="font-size: 65px">সময়</span>
            </main>
        </div>

        <p id="date1">{{$dateTime->start_date}} {{$dateTime->start_time}} </p>
    </main> --}}

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
                       <p class="fs-5">আপনি প্রস্তুত তো?</p>
                        <div class="h-border"></div>
                    </header>

                    <div class="result_content bn_font mt-5">
                        <img width="50%" src="{{ asset('quiz') }}/images/clock.png" alt="" class="mb-4">
                            <h3 class="bn_font">প্রশ্নোত্তর শুরু হতে বাকি আর মাত্র..</h3>
                       <h3><span id="countdown-timer" style="font-size: 65px">সময়</span></h3>
                    </div>
                    <p class="d-none" id="date1">{{$dateTime->start_date}} {{$dateTime->start_time}} </p>

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

    <script>
        var countdownDateStr1 = document.getElementById("date1").textContent;
var countDownDate1 = new Date(countdownDateStr1).getTime();

// var countDownDate = new Date("03 14 2024 17:55").getTime();
// var countDownDate = document.querySelector('.date').innerHTML;
var hasReloaded1 = false; // Flag to track if the page has already been reloaded

var x = setInterval(function() {
  var now1 = new Date().getTime();
  var distance1 = countDownDate1 - now1;
  var days1 = Math.floor(distance1 / (1000 * 60 * 60 * 24));
  var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);

  document.getElementById("countdown-timer").innerHTML ='<div class="text-center" style="vertical-align-middle">'+hours1+":"+ minutes1 + ":" + seconds1+'</div>';

  if (distance1 <= 0 && !hasReloaded1) {
    clearInterval(x);
    document.getElementById("countdown-timer").innerHTML = "সমাপ্ত";
    // Reload the page
    window.location.reload();
    hasReloaded1 = true; // Set the flag to true to prevent further reloads

    // After reloading once, prevent further reloading
    setTimeout(function() {
      hasReloaded1 = false;
    }, 1000); // Adjust the timeout duration as needed
  }
}, 1000);

    </script>

</body>
</html>
