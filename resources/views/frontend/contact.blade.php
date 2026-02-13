@section('title', 'Contact')
@extends('frontend.layouts.app')
@push('header_scripts')
    <!-- Extra CSS Libraries -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
@endpush
@section('content')

    <!--contact us-->
    <section class="m-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="contact">
                        <div class="google-map contact__google-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1249754480045!2d90.41384597522242!3d23.742922378675594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b948f348a2e1%3A0xf3ce7bc2bfaa573d!2sRajarbag%20Dorbar%20Shorif!5e0!3m2!1sen!2sbd!4v1770725819711!5m2!1sen!2sbd"
                                allowfullscreen="" class="contact__google-map-iframe">
                            </iframe>

                        </div>
                        <form action="{{ route('contact.store') }}" method="POST" class="widget__form">
                            @csrf
                            <h5 class="widget__form-title">Feel free to contact any time.</h5>
                            <div class="alert alert-success d-none" id="successMsg"></div>
                            <div class="alert alert-danger d-none" id="errorMsg"></div>
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control widget__form-input"
                                    placeholder="Your Name*" required="required">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control widget__form-input"
                                    placeholder="Your Email*" required="required">
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" id="subject" class="form-control widget__form-input"
                                    placeholder="Your Subject*" required="required">
                            </div>

                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control widget__form-input"
                                    placeholder="Your Message*" required="required"></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <label id="captcha-question" class="fw-bold"></label>
                                <input type="number" name="captcha_answer" id="captcha-answer"
                                    class="form-control widget__form-input" placeholder="Answer the math question" required>
                                <small id="captcha-error" class="text-danger d-none">
                                    Wrong answer!
                                </small>
                            </div>

                            <!-- captcha data (NO RESULT) -->
                            <input type="hidden" name="n1" id="n1">
                            <input type="hidden" name="n2" id="n2">
                            <input type="hidden" name="op" id="op">


                            <button type="submit" name="submit" class="btn-custom" id="submitBtn" disabled>
                                Send Message
                            </button>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>


@endsection

@push('footer_scripts')
    <!-- Toastify -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- Toastify -->
    <script>
        // Ajax setup
        const csrf = $('meta[name="csrf-token"]').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrf
            }
        });


        // Toast
        function showToast(text, type = 'success') {
            let bg;
            switch (type) {
                case 'error':
                    from = '#ff5b5c';
                    to = '#ff5b5c';
                    break;
                case 'success':
                    from = '#f67280';
                    to = '#f88a9a';
                    break;
                default:
                    from = '#00b09b';
                    to = '#96c93d';
                    break;
            }
            console.log(type, bg);

            Toastify({
                text,
                duration: 3000,
                gravity: "top",
                position: "right",
                close: true,
                stopOnFocus: true,
                style: {
                    background: `linear-gradient(to right, ${from}, ${to})`
                },
                onClick: function() {}
            }).showToast();
        }
    </script>

    @session('success')
    <script>
        showToast('{{ session('success') }}', 'success');
    </script>
    @endif

    @if (session('error'))
        <script>
            showToast('{{ session('error') }}', 'error');
        </script>
    @endif


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ===== Captcha Logic =====
            let correctAnswer = 0;

            function generateCaptcha() {
                let n1 = Math.floor(Math.random() * 10) + 1;
                let n2 = Math.floor(Math.random() * 10) + 1;
                let op = Math.random() > 0.5 ? '+' : '-';

                if (op === '-' && n2 > n1)[n1, n2] = [n2, n1];

                correctAnswer = (op === '+') ? (n1 + n2) : (n1 - n2);

                document.getElementById('captcha-question').innerText =
                    `Human check: ${n1} ${op} ${n2} = ?`;

                document.getElementById('n1').value = n1;
                document.getElementById('n2').value = n2;
                document.getElementById('op').value = op;
            }

            generateCaptcha();

            const answerInput = document.getElementById('captcha-answer');
            const submitBtn = document.getElementById('submitBtn');

            answerInput.addEventListener('input', function() {
                const err = document.getElementById('captcha-error');
                if (parseInt(this.value) === correctAnswer) {
                    submitBtn.disabled = false;
                    err.classList.add('d-none');
                } else {
                    submitBtn.disabled = true;
                    err.classList.remove('d-none');
                }
            });
        });
    </script>
@endpush
