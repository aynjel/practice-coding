$(document).ready(function () {
    $("#signin-cta").click(function () {
        $(".hero").hide();
        $(".signup-section").hide();
        $(".signin-section").show();
    });

    $("#signup-cta").click(function () {
        $(".hero").hide();
        $(".signin-section").hide();
        $(".signup-section").show();
    });
});