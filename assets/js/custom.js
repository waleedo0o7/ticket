const swiper = new Swiper('.swiper', {
    // Optional parameters 
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },

    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

});

function showMobileMenu() {
    $("#show-menu-btn").on("click", function () {
        $(".top-nav-wrapper").addClass("show-menu");
        $("body").css("overflow-y", "hidden");

    })
}

function hideMobileMenu() {
    $("#hide-menu-btn").on("click", function () {
        $(".top-nav-wrapper").removeClass("show-menu");
        $("body").css("overflow-y", "auto");
    })
}

hideMobileMenu();
showMobileMenu();


$(function () {

    $("#hijri-date-input").hijriDatePicker({
        locale: "ar-sa",
        format: "YYYY-MM-DD",
        hijriFormat: "iYYYY-iMM-iDD",
        dayViewHeaderFormat: "MMMM YYYY",
        hijriDayViewHeaderFormat: "iMMMM iYYYY",
        showSwitcher: true,
        allowInputToggle: true,
        useCurrent: true,
        isRTL: true,
        viewMode: 'days',
        keepOpen: true,
        hijri: false,
        debug: true,
        showTodayButton: true,
        minDate: new Date(),
    });

    setTimeout(() => {
        $('#hijri-date-input').trigger('focus');
    }, 50)

});

$(document).ready(function() {
    if (window.location.href.indexOf("home.php") > -1) {
        console.log("your url contains the name home.php");
        $(".body-wrapper").addClass("homepage")
    }
});

let input = document.querySelector("#phone");
if ($('.phone').length > 0) {
    window.intlTelInput(input, {
        // allowDropdown: true,
        // autoInsertDialCode: true,
        // autoPlaceholder: "on",
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   fetch("https://ipapi.co/json")
        //     .then(function(res) { return res.json(); })
        //     .then(function(data) { callback(data.country_code); })
        //     .catch(function() { callback("us"); });
        // },
        // hiddenInput: "full_number",
        initialCountry: "sa",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        preferredCountries: ['sa'],
        // separateDialCode: true,
        showFlags: true,
        utilsScript: "assets/vendors/tel-input/js/utils.js"
    });

}

// Top Header cart popup --> increaseCount and decreaseCount START 
let increaseCount = (event, b) => {
    var input = b.previousElementSibling;
    var value = parseInt(input.value, 10);

    value = isNaN(value) ? 0 : value;
    value++;
    input.value = value;
}

// Top Header cart popup --> increaseCount and decreaseCount END
let decreaseCount = (event, b) => {
    var input = b.nextElementSibling;
    var value = parseInt(input.value, 10);
    if (value > 1) {
        value = isNaN(value) ? 0 : value;
        value--;
        input.value = value;
    }
    calcItemsPrice();
}

if ($(".date").length) {

    $(".date").flatpickr();

}

if ($(".select2").length) {

    $('.select2').select2();

}

//////////// Activate page start

$(document).on("click", ".activate-inputs input", function() {
    $(this).select();
})

$(".activate-inputs input").on("keyup", function() {

    if ($(this).val()) {
        $(this).next().focus();
        $(this).next().select();
    }

    if ($(this).index() == 3) {
        $(this).blur();

        let activateCode = '';

        $(".activate-inputs input").each(function() {
            // console.log($(this).val());
            activateCode += $(this).val();
        });

        $("#activate-code-input").val(activateCode);

        setTimeout(() => {
            $("#activate-code").submit();
        }, 200);

    }
})

//////////// Activate page end

$(document).ready(function() {
    // select country
    $(".country-code-container .dropdown a").on("click", function() {
        $("#country").val($(this).data("value"));
        $(this).parents(".dropdown").children("button.dropdown-toggle").html(`<img alt="" src="${$(this).children("img").attr("src")}" /> ${$(this).text()} <i class="fa fa-chevron-down"></i>`)
    });

    let onErrorCountryCodeValues = () => {
        let selectedIndex = $(".country-code-container #country option:selected").index() + 1;
        let selectedHTML = $(`.country-code-container .choose-country-list a:nth-child(${selectedIndex})`).html();
        $(".country-code-container button.dropdown-toggle").html(selectedHTML);
    }

    // auth change phone number page
    if ($('.country-code-container').length > 0) {
        onErrorCountryCodeValues();
    }



    new DataTable('#example');


});

$(document).ready(function() {


    let countDown = (sec) => {

        if ($('.count-down').length) {

            let countDownInSeconds = $('.count-down').data("seconds");

            let minutesLabel = document.getElementById("minutes");
            let secondsLabel = document.getElementById("seconds");
            let totalSeconds = countDownInSeconds;

            setInterval(setTime, 1000);

            function setTime() {
                if (totalSeconds > 0) {
                    --totalSeconds;
                    secondsLabel.innerHTML = pad(totalSeconds % 60);
                    minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
                }
            }

            function pad(val) {
                var valString = val + "";
                if (valString.length < 2) {
                    return "0" + valString;
                } else {
                    return valString;
                }
            }
        }
    }

    if ($('.count-down').length) {
        countDown()
    }

});