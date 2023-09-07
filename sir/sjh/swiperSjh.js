// 스와이퍼
window.onload = function () {
    var swiper = new Swiper(".topad", {
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        direction: "vertical",
    });


    var swiper1 = new Swiper("#mainslide", {
        slidesPerView: 1.2,
        spaceBetween: 10,
        slideToClickedSlide: true,
        loop: true,
        loopFillGroupWithBlank: true,
        // loopedSlides: 1,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            991: {
                slidesPerView: 1.7,
            },
        },
    })
}