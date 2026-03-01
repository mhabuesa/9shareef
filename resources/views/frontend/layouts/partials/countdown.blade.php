<div id="sticky-notification" class="sticky-box" data-countdown="2027-02-16 18:06:00">
    <!-- Toggle Buttons -->
    <div id="toggle-countdown">
        <span id="collapse-btn" class="btn btn-danger btn-sm p-1">
            <i class="fa fa-minus"></i>
        </span> <!-- minus -->
    </div>
    <span id="expand-btn" style="display:none;">
        <i class="fa-solid fa-hourglass-start" style="color: #f67280;"></i>
    </span> <!-- clock -->

    <a href="{{ route('countdown') }}">
        <div class="countdown-wrapper">
            <div id="countdown-area">
                <h4 class="countdown-title text-dark mb-2">
                    ৯ই রমাদ্বান শরীফ আসতে আর মাত্র
                </h4>
                <div class="countdown-grid">
                    <div class="countdown-item">
                        <div id="days" class="countdown-number">০০</div>
                        <div class="countdown-label">দিন</div>
                    </div>
                    <div class="countdown-item">
                        <div id="hours" class="countdown-number">০০</div>
                        <div class="countdown-label">ঘণ্টা</div>
                    </div>
                    <div class="countdown-item">
                        <div id="minutes" class="countdown-number">০০</div>
                        <div class="countdown-label">মিনিট</div>
                    </div>
                    <div class="countdown-item">
                        <div id="seconds" class="countdown-number danger">০০</div>
                        <div class="countdown-label">সেকেন্ড</div>
                    </div>
                </div>
            </div>
            <!-- Expired Message -->
            <div id="ramadan-message" style="display:none;" class="ramadan-text">
                <span class="text-dark fw-bold d-block">আহলাও ওয়া সাহলান</span>
                <span class="fw-bold">৯ই রমাদ্বান শরীফ মুবারক হো!</span>
            </div>
        </div>
    </a>
</div>
