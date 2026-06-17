function getTime(endtime) {
    let time = Date.parse(endtime) - Date.parse(new Date());
    let seconds = Math.floor((time / 1000) % 60);
    let minutes = Math.floor((time / 1000 / 60) % 60);
    let hours = Math.floor((time / (1000 * 60 * 60)) % 24);
    let days = Math.floor(time / (1000 * 60 * 60 * 24));
    return {
        total: time,
        days: days,
        hours: hours,
        minutes: minutes,
        seconds: seconds
    };
}

function initializeTime(id, endtime) {
    let clocks = document.getElementById(id);
    let daysSpan = clocks.querySelector(".days2");
    let hoursSpan = clocks.querySelector(".hours2");
    let minutesSpan = clocks.querySelector(".minutes2");
    let secondsSpan = clocks.querySelector(".seconds2");

    function updateTime() {
        let time = getTime(endtime);

        daysSpan.innerHTML = time.days;
        hoursSpan.innerHTML = ("0" + time.hours).slice(-2);
        minutesSpan.innerHTML = ("0" + time.minutes).slice(-2);
        secondsSpan.innerHTML = ("0" + time.seconds).slice(-2);

        if (time.total <= 0) {
            clearInterval(timeIntervals);
            playAudios();
            document.getElementById("tsparticles").style.display = "block";

            // Set all timer elements to "00"
            daysSpan.innerHTML = "00";
            hoursSpan.innerHTML = "00";
            minutesSpan.innerHTML = "00";
            secondsSpan.innerHTML = "00";
        }

        else {
            // Time is not yet ended, add class
            document.getElementById("countdown").classList.add("dis");
        }
    }

    updateTime();
    var timeIntervals = setInterval(updateTime, 1000);
}

function playAudios() {
    // Get the audio element from the HTML
    let audio = document.getElementById('myAudio');
    // Play the audio
    audio.play();
  }

// Get the deadline from the HTML
const deadlineString = document.querySelector('.date2').innerHTML;
// Parse the deadline string into a Date object
const deadlines = new Date(deadlineString);

// Initialize the clock with the correct ID and deadline
initializeTime("countdown2", deadlines);
