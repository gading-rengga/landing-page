$(".carousel").owlCarousel({
    startPosition: 0,
    items: 1,
    loop: true,
    autoplay: false,
    responsiveClass: true,
    nav: true,
    navText: ["<img src='assets/img/arrow-prev.png'>", "<img src='assets/img/arrow-next.png'>"],
    navContainer: '.owl-nav',
    responsive: {
        300: {
            items: 2
        },
        700: {
            items: 3
        },
        1000: {
            items: 3
        },
    }
});