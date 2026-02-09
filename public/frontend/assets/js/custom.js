/* Elements */
const stickyBox = document.getElementById("sticky-notification");
const countdownArea = document.getElementById("countdown-area");
const ramadanMessage = document.getElementById("ramadan-message");

/* Get target date from HTML data attribute */
const targetDateString = stickyBox.dataset.countdown;

/* Convert to timestamp (safe for YYYY-MM-DD HH:mm:ss) */
const targetTime = new Date(
    targetDateString.replace(" ", "T")
).getTime();

/* ================= Countdown Timer ================= */

const timer = setInterval(() => {
    const now = new Date().getTime();
    const diff = targetTime - now;

    /* Time Finished */
    if (diff <= 0) {
        clearInterval(timer);

        // Hide countdown
        countdownArea.style.display = "none";

        // Show Ramadan message
        ramadanMessage.style.display = "block";
        return;
    }

    /* Calculate time */
    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((diff / (1000 * 60)) % 60);
    const seconds = Math.floor((diff / 1000) % 60);

    /* Update DOM */
    document.getElementById("days").innerText =
        String(days).padStart(2, "0");

    document.getElementById("hours").innerText =
        String(hours).padStart(2, "0");

    document.getElementById("minutes").innerText =
        String(minutes).padStart(2, "0");

    document.getElementById("seconds").innerText =
        String(seconds).padStart(2, "0");

}, 1000);


/* ================= Sticky Scroll Animation ================= */

let lastScroll = 0;

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScroll) {
        // Scrolling Down
        stickyBox.classList.add("dropped-down");
    } else {
        // Scrolling Up
        stickyBox.classList.remove("dropped-down");
    }

    lastScroll = currentScroll <= 0 ? 0 : currentScroll;
}, { passive: true });
