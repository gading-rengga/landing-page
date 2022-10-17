
// function clicked(x) {
//     x.classList.toggle('btn-arrow-down');
//     x.classList.toggle('btn-arrow-next');
// }
$(document).ready(function () {
    $("#stadio").on("hide.bs.dropdown", function () {
        $(".stadio").html('<img class="btn-arrow-down">');
    });
    $("#stadio").on("show.bs.dropdown", function () {
        $(".stadio").html('<img class="btn-arrow-next">');
    });

    $("#board").on("hide.bs.dropdown", function () {
        $(".board").html('<img class="btn-arrow-down">');
    });
    $("#board").on("show.bs.dropdown", function () {
        $(".board").html('<img class="btn-arrow-next">');
    });

    $("#port").on("hide.bs.dropdown", function () {
        $(".port").html('<img class="btn-arrow-down">');
    });
    $("#port").on("show.bs.dropdown", function () {
        $(".port").html('<img class="btn-arrow-next">');
    });

    $("#baby-scale").on("hide.bs.dropdown", function () {
        $(".baby-scale").html('<img class="btn-arrow-down">');
    });
    $("#baby-scale").on("show.bs.dropdown", function () {
        $(".baby-scale").html('<img class="btn-arrow-next">');
    });

    $("#scale").on("hide.bs.dropdown", function () {
        $(".scale").html('<img class="btn-arrow-down">');
    });
    $("#scale").on("show.bs.dropdown", function () {
        $(".scale").html('<img class="btn-arrow-next">');
    });

    $("#lila").on("hide.bs.dropdown", function () {
        $(".lila").html('<img class="btn-arrow-down">');
    });
    $("#lila").on("show.bs.dropdown", function () {
        $(".lila").html('<img class="btn-arrow-next">');
    });
});