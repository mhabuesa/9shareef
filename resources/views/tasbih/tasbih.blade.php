@extends('tasbih.layout')
@section('title', 'Tasbih | Love9')
@push('style')
    <style>
        .button-container {
            position: relative;
        }

        .danger-button {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 5px solid #aaa;
            background: radial-gradient(circle, #00ff00 10%, #008000 90%);
            box-shadow: inset 0px 5px 10px rgba(255, 255, 255, 0.5), 0px 5px 10px rgba(0, 0, 0, 0.5);
            font-size: 15px;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
            cursor: pointer;
            outline: none;
            transition: transform 0.1s, box-shadow 0.1s;
        }

        .danger-button:active {
            transform: scale(0.95);
            box-shadow: inset 0px 2px 5px rgba(0, 0, 0, 0.7), 0px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .tasbih-img {
            position: absolute;
            left: 50%;
            transform: translate(-50%);
            width: 100px;
            transition: transform 1s ease-in-out, opacity 1s ease-in;
        }
        td{
            padding-right: 0px !important;
            padding-left: 0px !important;
        }
    </style>
@endpush
@section('content')
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Login -->
                <div class="card ">
                    <div class="card-header d-flex justify-content-end ">
                        <a href="{{ route('tasbih.signout') }}" class="btn btn-danger  btn-sm text-center"><i
                                class="fas fa-sign-out-alt"></i></a>
                    </div>
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <a href="{{ route('tasbih') }}" class="app-brand-link">
                                <img class="rounded-circle" src="{{ asset('frontend') }}/assets/img/logo/love9.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <h4 class="mb-1 pt-2 text-center bn_font"><span
                                    class="text-success font-weight-bold fs-3">খলীফাতুল উমাম আলাইহিস সালাস</span> উনার
                                মুহব্বতে দরূদ শরীফ পাঠ করুন এবং <span class="text-danger">ট্যাপ করে গননা করুন।</span></h4>
                        </div>
                        <!-- /Logo -->


                        <div class="text-center">
                            <div class="button-container">
                                <button class="danger-button"><img class="rounded-circle" width="100"
                                        src="{{ asset('frontend') }}/assets/img/logo/love9.png" alt=""></button>
                            </div>
                        </div>

                        <h4 class="mt-4 text-center bn_font">তাসবীহঃ <span id="counter">0</span></h4>

                        {{-- Info Table --}}
                        <div class="info bn_font mt-5">
                            <div class="d-flex justify-content-center mb-3">
                                <button class="btn btn-primary btn-sm" id="info">
                                    তথ্য দেখুন <i class="fas fa-arrow-down mx-2" id="infoIcon"></i>
                                </button>
                            </div>
                            <div id="infoWrapper" style="max-height: 0; overflow: hidden; opacity: 0;">
                                <table class="table table-responsive" id="infoTable">
                                    <tbody>
                                        <tr>
                                            <td style="width: 30%">মোট তাসবীহঃ</td>
                                            <td id="totalTasbih">{{ Auth::guard('tasbih')->user()->tasbih }}</td>
                                        </tr>
                                        <tr>
                                            <td>নামঃ</td>
                                            <td>{{ Auth::guard('tasbih')->user()->name }}</td>
                                        </tr>
                                        @if (Auth::guard('tasbih')->user()->address != null)
                                            <tr>
                                                <td>ঠিকানাঃ</td>
                                                <td>{{ Auth::guard('tasbih')->user()->address }}</td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td>মোবাইলঃ</td>
                                            <td>{{ Auth::guard('tasbih')->user()->phone }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
    </div>

    <!-- / Content -->
@endsection
@push('script')
    <script>
        function trigger() {
            gsap.fromTo(".alarm", {
                top: -150
            }, {
                top: 0,
                duration: 1,
                ease: "elastic.out(1, 0.3)"
            })
            let light = document.querySelector("#light")
            console.log(light)
            light.classList.add("flash")
            let aside = document.querySelector("aside")
            aside.style.display = "block"
            let message = document.querySelector(".message")
            message.style.display = "block"
            setTimeout(function() {
                gsap.fromTo(".rTop", {
                    left: -100
                }, {
                    left: 0,
                    duration: 1.5,
                    ease: "elastic.out(1, 0.3)"
                })
                gsap.fromTo(".rBottom", {
                    right: -100
                }, {
                    right: 0,
                    duration: 1.5,
                    ease: "elastic.out(1, 0.3)"
                })

            }, 500);
            setTimeout(function() {
                gsap.fromTo(message, {
                    opacity: 0
                }, {
                    opacity: 1,
                    duration: 1
                })
            }, 1000);
            setTimeout(function() {
                unTrigger()
            }, 6000);
        }

        function unTrigger() {
            let light = document.querySelector("#light")
            light.classList.remove("flash")
            let aside = document.querySelector("aside")
            aside.style.display = "none"
            let message = document.querySelector(".message")
            message.style.display = "none"
            gsap.fromTo(".alarm", {
                top: 0
            }, {
                top: -150,
                duration: 1,
                ease: "elastic.out(1, 0.3)"
            })
            gsap.fromTo(".rTop", {
                left: 0
            }, {
                left: -100,
                duration: 1.5,
                ease: "elastic.out(1, 0.3)"
            })
            gsap.fromTo(".rBottom", {
                right: 0
            }, {
                right: -100,
                duration: 1.5,
                ease: "elastic.out(1, 0.3)"
            })
        }
    </script>

    <script>
        $(document).ready(function() {
            let tasbihButton = $(".danger-button");
            let counterDisplay = $("#counter");
            let totalTasbihDisplay = $("#totalTasbih");
            let counter = 0; // Initialize counter
            let updateTimeout;

            tasbihButton.click(function() {
                counter++; // Increment the counter
                counterDisplay.text(counter); // Update the counter in UI

                // Get the current totalTasbih from the UI
                let currentTotalTasbih = parseInt(totalTasbihDisplay.text());

                // Update the totalTasbih in the UI immediately by adding 1
                totalTasbihDisplay.text(currentTotalTasbih + 1);

                // Image animation (for tasbih effect)
                let img = $("<img>")
                    .attr("src", "{{ asset('frontend') }}/assets/img/logo/love.png")
                    .addClass("tasbih-img")
                    .appendTo(".button-container");

                setTimeout(() => {
                    img.css({
                        transform: "translateY(-200px)",
                        opacity: "0"
                    });
                }, 100);

                setTimeout(() => {
                    img.remove();
                }, 1000);

                // Clear previous timeout & set a new one
                clearTimeout(updateTimeout);
                updateTimeout = setTimeout(function() {
                    // Send both updated totalTasbih and counter to the server
                    updateTasbihCount(currentTotalTasbih + 1, counter);
                }, 1000);
            });

            // Function to send the updated totalTasbih and counter to the server
            function updateTasbihCount(updatedTotalTasbih, counter) {
                $.ajax({
                    url: "{{ route('tasbih.count.update') }}", // Backend route
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        count: counter // Send the counter value
                    },
                    success: function(response) {
                        showToast('তাসবীহ গননা জমা সম্পন্ন হয়েছে', 'success');
                    },
                    error: function(error) {
                        console.log("Error updating tasbih count:", error);
                    }
                });
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#info").click(function() {
                let wrapper = $("#infoWrapper");
                let icon = $("#infoIcon");

                if (wrapper.height() > 0) {
                    // Smooth hide animation
                    wrapper.animate({
                        maxHeight: "0px",
                        opacity: 0
                    }, 400, function() {
                        $(this).hide();
                    });
                    icon.removeClass("fa-arrow-up").addClass("fa-arrow-down");
                } else {
                    // Smooth show animation
                    wrapper.css({
                            display: "block",
                            opacity: 0,
                            maxHeight: "0px"
                        })
                        .animate({
                            opacity: 1,
                            maxHeight: wrapper.get(0).scrollHeight + "px"
                        }, 400);
                    icon.removeClass("fa-arrow-down").addClass("fa-arrow-up");
                }
            });
        });
    </script>
@endpush
