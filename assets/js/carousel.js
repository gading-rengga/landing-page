$(".carousel").owlCarousel({
    loop: true,
    autoplay: false,
    responsive: {
        0: {
            items: 1
        },
        300: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});