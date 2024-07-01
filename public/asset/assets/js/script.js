var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    slidesPerGroupSkip: 3,
    loop: false,
    centeredSlides: true,
    grabCursor: true,
    fade: true,
    pagination: {
        el: "swiper-button-next",
        clickable: true,
        dynamicBuullets: true,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 1,
        },
    },
});

function showHide() {
    document.getElementById('myform');
    var h = document.getElementById('kankor-link');
    h.removeAttribute('hidden');
}