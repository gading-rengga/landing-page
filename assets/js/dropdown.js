$(document).ready(function () {
    // $("#stadio").click(function () {
    //     $(".nav-arrow").toggleClass("btn-arrow-next");
    //     $(".nav-arrow").toggleClass("btn-arrow-down");
    // });

    $owlTeam = $('.carousel .owl-carousel').data('owlCarousel');


    $(document).click(function () {
        $(".nav-arrow").removeClass('btn-arrow-next').addClass("btn-arrow-down");
    });

    $("#stadio").click(function (event) {
        $(".arrow-stadio").toggleClass("btn-arrow-down btn-arrow-next");
    });

    $("#board").click(function (event) {
        $(".arrow-board").toggleClass("btn-arrow-down btn-arrow-next");
    });

    $("#port").click(function (event) {
        $(".arrow-port").toggleClass("btn-arrow-down btn-arrow-next");
    });

    $("#baby-scale").click(function (event) {
        $(".arrow-baby").toggleClass("btn-arrow-down btn-arrow-next");
    });

    $("#scale").click(function (event) {
        $(".arrow-weight").toggleClass("btn-arrow-down btn-arrow-next");
    });

    $("#lila").click(function (event) {
        $owlTeam.destroy();
        $(".arrow-lila").toggleClass("btn-arrow-down btn-arrow-next");
    });


});