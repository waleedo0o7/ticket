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
        $(".top-nav-wrapper").show();
    })
}

function hideMobileMenu() {
    $("#hide-menu-btn").on("click", function () {
        $(".top-nav-wrapper").hide();
    })
}

hideMobileMenu();
showMobileMenu();