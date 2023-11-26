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
    });

    setTimeout(() => {
        $('#hijri-date-input').trigger('focus');
    }, 100)

});