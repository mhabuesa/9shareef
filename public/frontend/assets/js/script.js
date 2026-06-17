function getTimeRemaining(endtime) {
  let t = Date.parse(endtime) - Date.parse(new Date());
  let seconds = Math.floor((t / 1000) % 60);
  let minutes = Math.floor((t / 1000 / 60) % 60);
  let hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  let days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    total: t,
    days: days,
    hours: hours,
    minutes: minutes,
    seconds: seconds
  };
}

function initializeClock(id, endtime) {
  let clock = document.getElementById(id);
  let daysSpan = clock.querySelector(".days");
  let hoursSpan = clock.querySelector(".hours");
  let minutesSpan = clock.querySelector(".minutes");
  let secondsSpan = clock.querySelector(".seconds");

  function updateClock() {
    let t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
    minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
    secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
      playAudio();
      document.getElementById("tsparticles").style.display = "block";
      document.getElementById("headText").style.display = "block";
      document.getElementById("countdown").classList.remove("dis");
      document.getElementById("title").style.display = "none";
      document.getElementById("countdown").classList.add("volume");
      document.getElementById("countdown").style.display = "none";
      document.getElementById("mrgn").classList.add("mrgn");


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

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

function playAudio() {
  // Get the audio element from the HTML
  let audio = document.getElementById('myAudio');
  // Play the audio
  audio.play();
}


const deadline = document.querySelector('.date').innerHTML;
initializeClock("countdown", deadline);













// Particles


