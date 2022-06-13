$(function () {
$(document).scroll(function () {
    var $nav = $(".site-navbar");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
});
});

$(function () {
$(document).scroll(function () {
    var $nav = $(".link-da-navbar");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
});
});

$(function () {
$(document).scroll(function () {
    var $nav = $(".logo");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
});
});


$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.site-navbar').find('img').attr('src', 'images/logo-dark.png')
    } else {
        $('.site-navbar').find('img').attr('src', 'images/logo.png')
    }
});