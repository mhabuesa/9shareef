// Option selection highlight
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".option-box").forEach(function (box) {
        box.addEventListener("click", function (e) {
            const input = box.querySelector("input");
            if (input.type === "radio") {
                document
                    .querySelectorAll('input[name="' + input.name + '"]')
                    .forEach(function (radio) {
                        radio
                            .closest(".option-box")
                            .classList.remove("selected");
                    });
                input.checked = true;
                box.classList.add("selected");
            } else if (input.type === "checkbox") {
                input.checked = !input.checked;
                box.classList.toggle("selected");
            }
        });
    });
});

let currentStep = 0;
const steps = document.querySelectorAll(".quiz-step");
const progressBar = document.getElementById("progressBar");
const nextBtn = document.getElementById("nextBtn");
const prevBtn = document.getElementById("prevBtn");
const welcomeText = document.getElementById("welcome");

function showStep(index) {
    steps.forEach((step, i) => {
        step.classList.remove("active");
        if (i === index) step.classList.add("active");
    });

    let percent = ((index + 1) / steps.length) * 100;
    progressBar.style.width = percent + "%";

    prevBtn.style.visibility = index === 0 ? "hidden" : "visible";

    // 🔥 Welcome text শুধু প্রথম step এ থাকবে
    if (index === 0) {
        welcomeText.style.display = "block";
    } else {
        welcomeText.style.display = "none";
    }

    if (index === steps.length - 1) {
        nextBtn.innerText = "Submit";
    } else {
        nextBtn.innerText = "Next Step →";
    }
}

const form = document.querySelector("form");

function showError(message) {
    Swal.fire({
        icon: "error",
        title: "অসম্পূর্ণ তথ্য",
        text: message,
        confirmButtonColor: "#6b73ff",
        background: "#1e1e1e",
        color: "#ffffff",
    });
}

nextBtn.addEventListener("click", function () {
    // ================= VALIDATION =================

    // Step 0 (Name Required)
    if (currentStep === 0) {
        const name = document.getElementById("name").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const address = document.getElementById("address").value.trim();
        if (name === "" || phone === "" || address === "") {
            showToast("আপনার তথ্য পূরণ করুন", "error");
            return;
        }
    }

    // Step 1 (question1 required)
    if (currentStep === 1) {
        if (!$("input[name='question1']:checked").length) {
            showToast("প্রশ্নের উত্তর নির্বাচন করুন", "error");
            return;
        }
    }

    // Step 2 (question2 required)
    if (currentStep === 2) {
        const lakabValue = $("#lakab").val().trim();

        if (lakabValue === "") {
            showToast("লকব মুবারক লিখুন", "error");
            return;
        }
    }

    // Step 3 (question3 required)
    if (currentStep === 3) {
        if (!$("input[name='question3']:checked").length) {
            showToast("এই প্রশ্নের উত্তর নির্বাচন করুন", "error");
            return;
        }
    }

    // Step 4 (Textarea Required)
    if (currentStep === 4) {
        const textarea = steps[currentStep].querySelector("textarea");
        if (textarea.value.trim() === "") {
            showToast("৪ লাইন ক্বাছীদাহ শরীফ লিখুন", "error");
            return;
        }
    }

    // Step 5 (word Serialize)
    if (currentStep === 5) {
        let allFilled = true;
        $(".quiz-step")
            .eq(5)
            .find(".word_box input")
            .each(function () {
                if ($(this).val().trim() === "") {
                    allFilled = false;
                }
            });
        if (!allFilled) {
            showToast("সবগুলো শব্দ দিয়ে বাক্য সাজান", "error");
            return;
        }
    }

    // Step 6 (Textarea Required)
    if (currentStep === 6) {
        const textarea = steps[currentStep].querySelector("textarea");
        if (textarea.value.trim() === "") {
            showToast("সঠিক উত্তর লিখুন", "error");
            return;
        }
    }


    // ================= PUZZLE CHECK =================
    if (currentStep === steps.length - 1) {
        if ($("#puzzle_result").val() !== "complete") {
            showToast("পাজল সমাধান করুন", "error");
            return;
        }

        form.submit();
        return;
    }

    // ================= NEXT STEP =================
    currentStep++;
    showStep(currentStep);
});

prevBtn.addEventListener("click", () => {
    if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
    }
});

showStep(currentStep);

// Copy paste block
document.addEventListener("DOMContentLoaded", function () {
    let selectizeInstance = $("#lakab")[0].selectize;

    if (!selectizeInstance) return;

    let input = selectizeInstance.$control_input[0];

    // Paste block
    input.addEventListener("beforeinput", function (e) {
        if (e.inputType === "insertFromPaste") {
            e.preventDefault();
        }
    });

    input.addEventListener("paste", (e) => e.preventDefault());
    input.addEventListener("drop", (e) => e.preventDefault());
    input.addEventListener("contextmenu", (e) => e.preventDefault());

    input.addEventListener("keydown", function (e) {
        if (e.ctrlKey || e.metaKey) {
            const blocked = ["v", "c", "x", "a"];
            if (blocked.includes(e.key.toLowerCase())) {
                e.preventDefault();
            }
        }
    });
});

// Word Serialize
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".word_box").forEach(function (block) {
        const input = block.querySelector("input");
        const words = block.querySelectorAll(".shuffleWord");

        /* --------------------
                   INPUT FULL LOCK
                -------------------- */

        // Typing block
        input.addEventListener("keypress", (e) => e.preventDefault());

        // Paste block
        input.addEventListener("paste", (e) => e.preventDefault());

        // Copy block
        input.addEventListener("copy", (e) => e.preventDefault());

        // Cut block
        input.addEventListener("cut", (e) => e.preventDefault());

        // Right click block
        input.addEventListener("contextmenu", (e) => e.preventDefault());

        // Drag drop block
        input.addEventListener("drop", (e) => e.preventDefault());

        // Ctrl/Cmd shortcuts block
        input.addEventListener("keydown", function (e) {
            if (e.ctrlKey || e.metaKey) {
                e.preventDefault();
            }

            // Backspace system
            if (e.key === "Backspace") {
                let currentWords = input.value.trim().split(" ");

                if (currentWords.length > 0 && currentWords[0] !== "") {
                    let removedWord = currentWords.pop();
                    input.value = currentWords.join(" ");

                    words.forEach(function (word) {
                        if (word.innerText === removedWord) {
                            word.style.display = "inline-block";
                        }
                    });
                }

                e.preventDefault();
            }
        });

        /* --------------------
                   WORD CLICK SYSTEM
                -------------------- */

        words.forEach(function (word) {
            word.addEventListener("click", function () {
                const text = this.innerText;

                if (input.value.trim() === "") {
                    input.value = text;
                } else {
                    input.value += " " + text;
                }

                this.style.display = "none";
            });
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {

    const timerContainer = document.querySelector(".timer");
    if (!timerContainer) return;

    const setTimerEl = timerContainer.querySelector(".set_timer");
    const countdownEl = timerContainer.querySelector(".countdown");

    if (!setTimerEl || !countdownEl) return;

    let raw = setTimerEl.innerText.trim();
    if (!raw) return;

    // FIX common format mistake
    raw = raw.replace(/\s+/g, " ");

    const parts = raw.split(" ");
    if (parts.length < 3) return;

    const datePart = parts[0];
    const timePart = parts[1];
    const ampm = parts[2];

    const dateSplit = datePart.split(":");
    const timeSplit = timePart.split(":");

    if (dateSplit.length !== 3 || timeSplit.length !== 2) return;

    let year = parseInt(dateSplit[0]);
    let month = parseInt(dateSplit[1]) - 1;
    let day = parseInt(dateSplit[2]);

    let hour = parseInt(timeSplit[0]);
    let minute = parseInt(timeSplit[1]);

    if (ampm === "PM" && hour < 12) hour += 12;
    if (ampm === "AM" && hour === 12) hour = 0;

    const targetDate = new Date(year, month, day, hour, minute, 0);

    const timerInterval = setInterval(function () {

        const now = new Date();
        const distance = targetDate - now;

        if (distance <= 0) {
            countdownEl.innerText = "00:00:00";
            clearInterval(timerInterval);
            return;
        }

        const hours = Math.floor(distance / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        countdownEl.innerText =
            String(hours).padStart(2, "0") + ":" +
            String(minutes).padStart(2, "0") + ":" +
            String(seconds).padStart(2, "0");

    }, 1000);

});
