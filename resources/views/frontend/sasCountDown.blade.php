<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>CountDown | Saiyidu Saiyidil Aiyaad Shareef</title>
    <link rel="stylesheet"
        href="{{ asset('frontend') }}/sasCountDown/maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="{{ asset('frontend') }}/sasCountDown/maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/sasCountDown/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/sasCountDown/css/tiempo.css">
    <link rel="alternate stylesheet" href="{{ asset('frontend') }}/sasCountDown/css/light.css" id="light">
    <link rel="stylesheet" href="{{ asset('frontend') }}/sasCountDown/css/dark.css" id="dark">
    <link rel="stylesheet" href="{{ asset('frontend') }}/sasCountDown/css/style.css">

    <script src="{{ asset('frontend') }}/sasCountDown/code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('frontend') }}/sasCountDown/maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/sasCountDown/js/jquery.mb.YTPlayer.js"></script>
    <script src="{{ asset('frontend') }}/sasCountDown/js/tiempo.js"></script>
    <style>
        @import url('https://fonts.maateen.me/solaiman-lipi/font.css');

        body {
            font-family: 'SolaimanLipi', Arial, sans-serif !important;
        }
    </style>
</head>

<body>
    <!-- Loading screen -->
    <div class="loading">
        <span class="loading-icon">Loading...</span>
    </div>
    <!-- Filter -->
    <div class="filter">
        <span>Pattern</span>
    </div>
    <!-- Slider -->
    <div class="slider">
        <ul class="slide-list">
            <li class="slide"
                style="background: url({{ asset('frontend') }}/sasCountDown/images/background8.png) no-repeat; background-size: cover;">
            </li>
            <li class="slide"
                style="background: url({{ asset('frontend') }}/sasCountDown/images/background7.png) no-repeat; background-size: cover;">
            </li>
            <li class="slide"
                style="background: url({{ asset('frontend') }}/sasCountDown/images/background6.jpg) no-repeat; background-size: cover;">
            </li>
            <li class="slide"
                style="background: url({{ asset('frontend') }}/sasCountDown/images/background5.png) no-repeat; background-size: cover;">
            </li>
        </ul>
    </div>
    <!-- Navigation -->

    <!-- Content -->
    <section id="content" class="container">
        <div class="contentWrapper">
            <div class="content">
                <!-- Header -->
                <header id="header">
                    <h2 class="title animated fadeInDown delay-5t">সাইয়্যিদু সাইয়্যিদিল আইয়াদ শরীফ আসতে আর মাত্র.. </h2>
                    <h4 class="title animated fadeInDown delay-5t">১২ই রবীউল আউওয়াল শরীফ ১৪৪৫ হিজরী (২৮ সেপ্টেম্বার
                        ২০২৩)</h4>
                </header>
                <!-- Main -->
                <main id="main">
                    <!-- Newsletter -->

                    <!-- About us -->

                    <!-- Contact us -->

                    <section class="countdown animated bounceIn delay-1s5t">
                        <canvas id="canvas"></canvas>
                        <div class="daysWrapper">
                            <h2 class="days"></h2>
                            <h4 class="daysText">Days</h4>
                        </div>
                        <div class="hoursWrapper">
                            <h2 class="hours"></h2>
                            <h4 class="hoursText">Hours</h4>
                        </div>
                        <div class="minutesWrapper">
                            <h2 class="minutes"></h2>
                            <h4 class="minutesText">Minutes</h4>
                        </div>
                        <div class="secondsWrapper">
                            <h2 class="seconds"></h2>
                            <h4 class="secondsText">Seconds</h4>
                        </div>
                    </section>
                </main>


            </div>
        </div>
    </section>
</body>


</html>
