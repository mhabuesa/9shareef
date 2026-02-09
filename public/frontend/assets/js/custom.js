/* Elements */
const stickyBox = document.getElementById("sticky-notification");
const countdownWrapper = stickyBox.querySelector(".countdown-wrapper");
const countdownArea = document.getElementById("countdown-area");
const ramadanMessage = document.getElementById("ramadan-message");

/* Toggle Buttons */
const collapseBtn = document.getElementById("collapse-btn");
const expandBtn = document.getElementById("expand-btn");

/* Get target date from HTML data attribute */
const targetDateString = stickyBox.dataset.countdown;
const targetTime = new Date(targetDateString.replace(" ", "T")).getTime();

/* ================= Countdown Timer ================= */
const timer = setInterval(() => {
    const now = new Date().getTime();
    const diff = targetTime - now;

    if (diff <= 0) {
        clearInterval(timer);
        countdownWrapper.style.display = "none";
        ramadanMessage.style.display = "block";
        return;
    }

    document.getElementById("days").innerText = String(Math.floor(diff / (1000*60*60*24))).padStart(2,"0");
    document.getElementById("hours").innerText = String(Math.floor((diff / (1000*60*60)) % 24)).padStart(2,"0");
    document.getElementById("minutes").innerText = String(Math.floor((diff / (1000*60)) % 60)).padStart(2,"0");
    document.getElementById("seconds").innerText = String(Math.floor((diff / 1000) % 60)).padStart(2,"0");
}, 1000);

/* ================= Sticky Scroll Animation ================= */
let lastScroll = 0;
window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScroll) {
        stickyBox.classList.add("dropped-down");
    } else {
        stickyBox.classList.remove("dropped-down");
    }

    lastScroll = currentScroll <= 0 ? 0 : currentScroll;
}, { passive:true });

/* ================= Collapse / Expand Logic ================= */
collapseBtn.addEventListener("click", () => {
    countdownWrapper.style.display = "none"; // fully hide
    collapseBtn.style.display = "none";
    expandBtn.style.display = "inline";
});

expandBtn.addEventListener("click", () => {
    countdownWrapper.style.display = "block"; // show full wrapper
    collapseBtn.style.display = "inline";
    expandBtn.style.display = "none";
});
