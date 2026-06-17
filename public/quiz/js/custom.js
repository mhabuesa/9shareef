// next prev
var divs = $('.show-section section');
var now = 0; // currently shown div
divs.hide().first().show(); // hide all divs except first

//show active step
function showActiveStep() {
    if ($('#step1').is(':visible')) {
        $(".step-bar .fill").css('width', '0%');
        $(".sideimg").attr('src', 'assets/images/side-1.png')
    } else if ($('#step2').is(':visible')) {
        $(".step-bar .fill").css('width', '20%');
        $(".sideimg").attr('src', 'assets/images/side-2.png')

    } else if ($('#step3').is(':visible')) {
        $(".step-bar .fill").css('width', '45%');
        $(".sideimg").attr('src', 'assets/images/side-3.png')

    } else if ($('#step4').is(':visible')) {
        $(".step-bar .fill").css('width', '70%');
        $(".sideimg").attr('src', 'assets/images/side-4.png')

    } else if ($('#step5').is(':visible')) {
        $(".step-bar .fill").css('width', '100%');
        $(".sideimg").attr('src', 'assets/images/side-5.png')

    } else {
        console.log("error");
    }
}


function next() {
    divs.eq(now).hide();
    now = (now + 1 < divs.length) ? now + 1 : 0;
    divs.eq(now).show(); // show next
    console.log(now);

    showActiveStep();
}
$(".prev").on('click', function () {

    $('.radio-field').addClass('bounce-left');
    $('.radio-field').removeClass('bounce-right');
    divs.eq(now).hide();
    now = (now > 0) ? now - 1 : divs.length - 1;
    divs.eq(now).show(); // show previous
    console.log(now);

    showActiveStep();

})


// quiz validation
var checkedradio = false;

function radiovalidate(stepnumber) {
    var checkradio = $("#step" + stepnumber + " input").map(function () {
        if ($(this).is(':checked')) {
            return true;
        } else {
            return false;
        }
    }).get();

    checkedradio = checkradio.some(Boolean);
}


function textvalidate(stepnumber) {
    var inputText1 = $("#step" + stepnumber + " input[name='name']").val().trim();
    var inputText2 = $("#step" + stepnumber + " input[name='address']").val().trim();

    textFieldsValidated = inputText1 !== "" && inputText2 !== "";
}




// form validation
$(document).ready(function () {

    // check step1
    // check step0
    $("#step0btn").on('click', function () {
        textvalidate(0);

        if (!textFieldsValidated) {
            $('#error').append('<div class="reveal alert alert-danger">আপনার তথ্য দিন!</div>');
            setTimeout(function () {
                $('#error').children('.reveal').remove();
            }, 3000);
        } else {
            $('#step0 .radio-btn').removeClass('bounce-left').addClass('bounce-right');
            setTimeout(function () {
                next();
            }, 200);
        }
    });

    // check step1
    $("#step1btn").on('click', function () {
        radiovalidate(1);

        if (checkedradio == false) {

            (function (el) {
                setTimeout(function () {
                    el.children().remove('.reveal');
                }, 3000);
            }($('#error').append('<div class="reveal alert alert-danger">একটি উত্তর বাছাই করুন!</div>')));

            radiovalidate(1);

        } else {
            $('#step1 .radio-field').removeClass('bounce-left');
            $('#step1 .radio-field').addClass('bounce-right');
            setTimeout(function () {
                next();
            }, 900)
            countresult(1);

        }


    })

    // check step2
    $("#step2btn").on('click', function () {
        radiovalidate(2);

        $('#step2 .radio-field').removeClass('bounce-left');
        $('#step2 .radio-field').addClass('bounce-right');
        setTimeout(function () {
            next();
        }, 200)
        countresult(2);
    })

    // check step3
    $("#step3btn").on('click', function () {
        radiovalidate(3);

        $('#step3 .radio-field').removeClass('bounce-left');
        $('#step3 .radio-field').addClass('bounce-right');
        setTimeout(function () {
            next();
        }, 200)
        countresult(3);
    })

    // check step4
    $("#step4btn").on('click', function () {
        radiovalidate(4);

        $('#step4 .radio-field').removeClass('bounce-left');
        $('#step4 .radio-field').addClass('bounce-right');
        setTimeout(function () {
            next();
        }, 200)
        countresult(4);
    })

})



var countdownDateStr1 = document.getElementById("date").textContent.trim();

// Date format পরিবর্তন করা (YYYY.MM.DD HH:MM -> YYYY-MM-DDTHH:MM:SS)
countdownDateStr1 = countdownDateStr1.replace(/\./g, "-"); // "." -> "-"
countdownDateStr1 = countdownDateStr1.replace(" ", "T") + ":00"; // " " -> "T" এবং সেকেন্ড যোগ করা

var countDownDate1 = new Date(countdownDateStr1).getTime();
var hasReloaded1 = false; // একবার reload আটকানোর জন্য flag

var x = setInterval(function() {
  var now1 = new Date().getTime();
  var distance1 = countDownDate1 - now1;

  if (isNaN(countDownDate1)) {
    console.error("Invalid Date Format:", countdownDateStr1);
    document.querySelectorAll(".countdown-timer").forEach(function(el) {
      el.innerHTML = "Invalid Date";
    });
    clearInterval(x);
    return;
  }

  var days1 = Math.floor(distance1 / (1000 * 60 * 60 * 24));
  var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);

  document.querySelectorAll(".countdown-timer").forEach(function(el) {
    el.innerHTML = '<div class="text-center" style="vertical-align-middle">' + hours1 + ":" + minutes1 + ":" + seconds1 + '</div>';
  });

  if (distance1 <= 0 && !hasReloaded1) {
    clearInterval(x);
    document.querySelectorAll(".countdown-timer").forEach(function(el) {
      el.innerHTML = "সমাপ্ত";
    });

    hasReloaded1 = true; // একবারই রিলোড করবে
    setTimeout(function() {
      window.location.reload();
    }, 500);
  }
}, 1000);


