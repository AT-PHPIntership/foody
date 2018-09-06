$(function () {
    var cw = $('.camnhan-img').width();
    $('.camnhan-img').css({ 'height': cw + 'px' });

    $('[data-toggle="tooltip"]').tooltip();
    $(".backtotop").addClass("hidden");
    $('.fa-navicon').click(function () {
        $('.list-menu').toggleClass("active");
    });
    $(window).scroll(function () {

        if ($(this).scrollTop() === 0) {
            $(".backtotop").addClass("hidden")
        } else {
            $(".backtotop").removeClass("hidden")
        }
        //an hien header-top
        //if (window.pageYOffset >= 100) {
        //    $('.header-top').addClass('hidden');
        //    $('header').css({ "position": "fixed" });
        //    $('.left-banner').css({ "top": "75px" });
        //    $('.right-banner').css({ "top": "75px" });
        //}
        //else {
        //    $('.header-top').removeClass('hidden');
        //    $('header').css({ "position": "relative" });
        //    $('.left-banner').css({ "top": "185px" });
        //    $('.right-banner').css({ "top": "185px" });
        //}
    });
    $('#linkTop').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 1200);
        return false;
    });
    owlCarousel(".carousel_new", 4, 4500);
    owlCarousel(".carousel_best_buy", 4, 4500);

    $('.btn-reg').click(function () {
        $('#modalLogin').modal('hide');
        $('#modalForgot').modal('hide');
        SignupPopup();
    });
    // $('.shopping-cart-show').click(function () {
    //     $('.box-cart').toggleClass("active");
    // });
    // $('.thugon-cart').click(function () {
    //     $('.box-cart').toggleClass("active");
    // });

});
function popupForgot() {
    $('#modalLogin').modal('hide');
    $('#modalForgot').modal('show');
}
function owlCarousel(i, n, s) {
    $(i).owlCarousel({
        items: n,
        navigation: true,
        slideSpeed: 800,
        autoPlay: s,
        autoplayHoverPause: true,
        stopOnHover: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: true
            },
            1024: {
                items: 4,
                nav: true,
                loop: true
            }

        }
    });
}
function LoginPopup() {
    $('#modalLogin').modal('show');
}
function SignupPopup() {
    $('#modalSignup').modal('show');
}
function ModalRequestLogin() {
    $('#modalRequestLogin').modal('show');
}
function ModalMessageCart() {
    $('#modalMessageCart').modal('show');
}
function showMark() {
    $('.body-mark').addClass("active");
}
function hideMark() {
    $('.body-mark').removeClass("active");
}
function CheckNumber(i) {
    var flag = true;
    if ($(i).val() != "") {
        var value = $(i).val().replace(/^\s\s*/, '').replace(/\s\s*$/, '');
        var intRegex = /^\d+$/;
        if (!intRegex.test(value) || value == 0) {
            $('.sl-validate').html("Quantity is a number larger 0");
            //$(i).val(1);
            flag = false;
        }
    } else {
        $('.sl-validate').html("Please input quantity need buy");
        //$(i).val(1);
        flag = false;
    }

    if (flag) {
        $('.sl-validate').removeClass('active');
        $('#btn-muangay').removeClass('disabled');
    } else {
        //disible button addtocart
        $('.sl-validate').addClass('active');
        $('#btn-muangay').addClass('disabled');
    }
    return flag;
}