/* ================= Elements ================= */
const stickyBox = document.getElementById("sticky-notification");
const countdownWrapper = stickyBox.querySelector(".countdown-wrapper");
const countdownArea = document.getElementById("countdown-area");
const ramadanMessage = document.getElementById("ramadan-message");

const collapseBtn = document.getElementById("collapse-btn");
const expandBtn = document.getElementById("expand-btn");

/* ================= Get Target Date ================= */
const targetDateString = stickyBox.dataset.countdown;
const targetTime = new Date(targetDateString.replace(" ", "T")).getTime();

/* ================= State ================= */
let isExpired = false;

/* ================= Bangla Number Converter ================= */
function toBanglaNumber(number) {
    const banglaDigits = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];
    return number.toString().replace(/\d/g, digit => banglaDigits[digit]);
}

/* ================= Cookie Functions ================= */
function setCookie(name, value, hours) {
    const d = new Date();
    d.setTime(d.getTime() + (hours * 60 * 60 * 1000));
    document.cookie = name + "=" + value + ";expires=" + d.toUTCString() + ";path=/";
}

function getCookie(name) {
    const cname = name + "=";
    const decodedCookie = decodeURIComponent(document.cookie).split(';');
    for (let c of decodedCookie) {
        c = c.trim();
        if (c.indexOf(cname) === 0) {
            return c.substring(cname.length);
        }
    }
    return "";
}

function deleteCookie(name) {
    document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

/* ================= UI Update Function ================= */
function updateUI() {
    if (isExpired) {
        countdownArea.style.display = "none";
        ramadanMessage.style.display = "block";
    } else {
        countdownArea.style.display = "block";
        ramadanMessage.style.display = "none";
    }
}

/* ================= Countdown Timer ================= */
const timer = setInterval(() => {

    const now = new Date().getTime();
    const diff = targetTime - now;

    if (diff <= 0) {
        clearInterval(timer);
        isExpired = true;
        updateUI();
        return;
    }

    const days = String(Math.floor(diff / (1000 * 60 * 60 * 24))).padStart(2, "0");
    const hours = String(Math.floor((diff / (1000 * 60 * 60)) % 24)).padStart(2, "0");
    const minutes = String(Math.floor((diff / (1000 * 60)) % 60)).padStart(2, "0");
    const seconds = String(Math.floor((diff / 1000) % 60)).padStart(2, "0");

    document.getElementById("days").innerText = toBanglaNumber(days);
    document.getElementById("hours").innerText = toBanglaNumber(hours);
    document.getElementById("minutes").innerText = toBanglaNumber(minutes);
    document.getElementById("seconds").innerText = toBanglaNumber(seconds);

}, 1000);

/* ================= Sticky Scroll Animation ================= */
let lastScroll = 0;

window.addEventListener("scroll", () => {

    const currentScroll =
        window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScroll) {
        stickyBox.classList.add("dropped-down");
    } else {
        stickyBox.classList.remove("dropped-down");
    }

    lastScroll = currentScroll <= 0 ? 0 : currentScroll;

}, { passive: true });

/* ================= Collapse / Expand ================= */

function hideCountdown() {
    countdownWrapper.style.display = "none";
    collapseBtn.style.display = "none";
    expandBtn.style.display = "inline";
    setCookie("countdown_hidden", "yes", 1);
}

function showCountdown() {
    countdownWrapper.style.display = "block";
    collapseBtn.style.display = "inline";
    expandBtn.style.display = "none";
    deleteCookie("countdown_hidden");
    updateUI();
}

collapseBtn.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
    hideCountdown();
});

expandBtn.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
    showCountdown();
});

/* ================= On Page Load ================= */
document.addEventListener("DOMContentLoaded", () => {

    const now = new Date().getTime();

    if (now >= targetTime) {
        isExpired = true;
    }

    updateUI();

    if (getCookie("countdown_hidden") === "yes") {
        countdownWrapper.style.display = "none";
        collapseBtn.style.display = "none";
        expandBtn.style.display = "inline";
    }

});
