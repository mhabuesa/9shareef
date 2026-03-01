@section('title', 'Result Spinner')
@extends('frontend.layouts.app')
@push('header_scripts')
    <style>
        .header_area {
            height: 120px;
        }

        .center {
            /* display: flex !important; */
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 80px;
            margin-left: -75px;
            background: transparent;
            margin-top: -40px;
        }

        .spinner {
            color: currentColor;
            display: inline-block;
            position: relative;
            top: -15px;
        }

        .spinner div {
            transform-origin: 40px 40px;
            animation: spinner 1.2s linear infinite;
        }

        .spinner div:after {
            content: " ";
            display: block;
            position: absolute;
            top: 3px;
            left: 37px;
            width: 6px;
            height: 18px;
            border-radius: 20%;
            background: #333;
        }

        .spinner div:nth-child(1) {
            transform: rotate(0deg);
            animation-delay: -1.1s;
        }

        .spinner div:nth-child(2) {
            transform: rotate(30deg);
            animation-delay: -1s;
        }

        .spinner div:nth-child(3) {
            transform: rotate(60deg);
            animation-delay: -0.9s;
        }

        .spinner div:nth-child(4) {
            transform: rotate(90deg);
            animation-delay: -0.8s;
        }

        .spinner div:nth-child(5) {
            transform: rotate(120deg);
            animation-delay: -0.7s;
        }

        .spinner div:nth-child(6) {
            transform: rotate(150deg);
            animation-delay: -0.6s;
        }

        .spinner div:nth-child(7) {
            transform: rotate(180deg);
            animation-delay: -0.5s;
        }

        .spinner div:nth-child(8) {
            transform: rotate(210deg);
            animation-delay: -0.4s;
        }

        .spinner div:nth-child(9) {
            transform: rotate(240deg);
            animation-delay: -0.3s;
        }

        .spinner div:nth-child(10) {
            transform: rotate(270deg);
            animation-delay: -0.2s;
        }

        .spinner div:nth-child(11) {
            transform: rotate(300deg);
            animation-delay: -0.1s;
        }

        .spinner div:nth-child(12) {
            transform: rotate(330deg);
            animation-delay: 0s;
        }

        @keyframes spinner {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        .button {
            height: 120px;
            width: 120px;
            border-radius: 50%;
            background: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #fff;
            border: none;
            cursor: pointer;
            margin: 0 auto;
            transition: box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }
    </style>
@endpush
@section('content')
    <section class="m-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="contact">
                        <div class="header_area d-flex flex-column align-items-center justify-content-center">
                            <button id="startBtn" class="button">
                                শুরু করুন
                            </button>
                            <div class="center" id="spinnerBox" style="display: none; justify-content:center;">
                                <div class="spinner"></div>
                            </div>

                        </div>
                        <div class="table-responsive mt-5">
                            <h4 id="winnerText" class="text-center text-success mb-3"></h4>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h6>বিজয়ী তথ্য তালিকা</h6>
                                    <button id="resetBtn" class="btn btn-danger btn-sm">Reset</button>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>নং</th>
                                                <th>নাম</th>
                                                <th>তথ্য</th>
                                            </tr>
                                        </thead>
                                        <tbody id="resultTable">
                                            @foreach ($winners as $winner)
                                                <tr>
                                                    <td>{{ $winner->name }}</td>
                                                    <td>{{ $winner->info }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center mt-5">
                                        <button id="confirmBtn" class="btn btn-primary m-auto">নিশ্চিত করুন</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('footer_scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const startBtn = document.getElementById('startBtn');
            const spinnerBox = document.getElementById('spinnerBox');
            const resultTable = document.getElementById('resultTable');
            const winnerText = document.getElementById('winnerText');
            const confirmBtn = document.getElementById('confirmBtn');
            const resetBtn = document.getElementById('resetBtn');

            const MAX_WINNERS = 9; // maximum winners

            // DB theke already confirmed winners
            let dbWinners = @json($winners); // Blade e pass kora $winners
            // LocalStorage e spinner select kora winners
            let localWinners = JSON.parse(localStorage.getItem('winners')) || [];

            // Load winners (DB + localStorage)
            function loadSavedWinners() {
                resultTable.innerHTML = '';
                // DB winners
                dbWinners.forEach((winner, index) => {
                    appendRow(winner, index + 1);
                });
                // Local winners
                localWinners.forEach((winner, index) => {
                    appendRow(winner, dbWinners.length + index + 1);
                });
            }

            function appendRow(winner, serial) {
                resultTable.innerHTML += `
            <tr>
                <td>${serial}</td>
                <td>${winner.name}</td>
                <td>${winner.info || ''}</td>
            </tr>
        `;
            }

            loadSavedWinners();

            // Spinner bars
            var e = document.querySelector('.spinner');
            [...Array(12)].forEach(() => {
                e.appendChild(document.createElement('div'));
            });

            // Start spin function
            function startSpin() {

                if ((dbWinners.length + localWinners.length) >= MAX_WINNERS) {
                    alert(`সর্বোচ্চ ${MAX_WINNERS} জন বিজয়ী নির্বাচন করা হয়েছে`);
                    return;
                }

                startBtn.disabled = true;
                startBtn.style.display = 'none';
                spinnerBox.style.display = 'flex';

                // IDs to exclude from selection (DB + spinner winners)
                let excludeIds = dbWinners.map(w => w.id).concat(localWinners.map(w => w.id));

                fetch("{{ route('spin.winner') }}?exclude_ids=" + excludeIds.join(','))
                    .then(res => res.json())
                    .then(response => {

                        if (!response.status) {
                            alert(response.message);
                            spinnerBox.style.display = 'none';
                            startBtn.style.display = 'flex';
                            startBtn.disabled = false;
                            return;
                        }

                        const winner = response.data;

                        setTimeout(function() {

                            spinnerBox.style.display = 'none';
                            startBtn.style.display = 'flex';
                            startBtn.disabled = false;

                            winnerText.innerHTML = `🏆 সম্ভাব্য বিজয়ী: <strong>${winner.name}</strong>`;

                            localWinners.push(winner);
                            localStorage.setItem('winners', JSON.stringify(localWinners));

                            appendRow(winner, dbWinners.length + localWinners.length);

                        }, 5000);
                    });
            }

            startBtn.addEventListener('click', startSpin);

            // Confirm Winners (DB Update)
            confirmBtn.addEventListener('click', function() {

                if (localWinners.length === 0) {
                    alert("কোন বিজয়ী নেই");
                    return;
                }

                let ids = localWinners.map(w => w.id);

                fetch("{{ route('confirm.winner') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            winner_ids: ids
                        })
                    })
                    .then(res => res.json())
                    .then(response => {
                        if (response.status) {
                            alert("বিজয়ী নিশ্চিত হয়েছে ✅");

                            // Move local winners to DB winners array
                            dbWinners = dbWinners.concat(localWinners);
                            localWinners = [];
                            localStorage.removeItem('winners');
                            loadSavedWinners();
                            winnerText.innerHTML = '';
                        }
                    });
            });

            // Reset Button (only clears spinner winners, DB winners stay)
            resetBtn.addEventListener('click', function() {
                localStorage.removeItem('winners');
                localWinners = [];
                winnerText.innerHTML = '';
                loadSavedWinners(); // only DB winners show
                alert("Reset Successful");
            });

        });
    </script>
@endpush
