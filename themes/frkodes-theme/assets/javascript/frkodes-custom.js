$("#about-anchor").click(function() {
    $('html, body').animate({
        scrollTop: $("#About").offset().top
    }, 300);
});

$("#work-anchor").click(function() {
    $('html, body').animate({
        scrollTop: $("#Work").offset().top
    }, 300);
});

$("#contact-anchor").click(function() {
    $('html, body').animate({
        scrollTop: $("Contact").offset().top
    }, 300);
});