/** this is javascript page  */
jQuery(document).ready(function ($) {
    
    $(window).click(function () {
        $("#category-navigation").removeClass("open");
        $("#categoryTab li a").removeClass("active");
    });

    $("#category-navigation").click(function (e) {
        e.stopPropagation();
        $(this).addClass("open");
    });

    $(".close-category-item").click(function (e) {
        e.stopPropagation();
        $("#category-navigation").removeClass("open");
    });


});
