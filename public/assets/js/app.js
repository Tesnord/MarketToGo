'use strict';

$(function () {
    $('.lk__menu, .order__right').theiaStickySidebar({
        additionalMarginTop: 10
    });
    $(".catalog__item .catalog__item-fav").click(function (e) {
        $(this).parent().parent().toggleClass('catalog__item-favorites');
    });

    $(".js-cart").click(function (e) {
        $(this).parent().addClass('am');
    });
    $(".js-buy-cart").click(function (e) {
        $(this).parent().addClass('ct');
    });

    /*$('.down').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.up').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });*/

    $(".js-card-product").click(function (e) {
        $(this).parent().addClass('open').children('.card-product__product-row').removeClass('d-none');
    });
    $(".js-card-product-reviews").click(function (e) {
        $(this).parent().addClass('open').children('.card-product__reviews-item').removeClass('d-none');
    });
    $(".js-orders-btn").click(function (e) {
        $(this).parent().addClass('open').children('.orders__item-product-row').removeClass('d-none');
    });

    $('body').delegate('.form__input-effect, .form__textarea-effect', 'focusout', function () {
        if ($(this).val() != "") {
            $(this).addClass("has-content");
        } else {
            $(this).removeClass("has-content");
        }
    });

    $(".menu .logo + ul > li").click(function (e) {
        $(this).toggleClass('open');
    });

    $(".js-text-mob-btn").click(function (e) {
        $(this).addClass('open').prev().addClass('open');
    });

    $('.filter__title').on('click', function (event) {
        $(this).toggleClass('open').parent('.filter__item').toggleClass('open');
        $(this).next().slideToggle();
    });

    $(window).on('load resize', function () {
        if ($(window).width() < 768) {
            $('.catalog-min-tw .row:not(.slick-initialized)').slick({
                dots: true,
                arrows: false,
                infinite: true,
                speed: 100,
                slidesToShow: 2
            });
        } else {
            $(".catalog-min-tw .row.slick-initialized").slick("unslick");
        }
    });

    $(".filter__item-list .filter__holder").niceScroll(".filter__container", { autohidemode: false });

    $(".js-filter-close").click(function (e) {
        $('.filter').removeClass('open');
    });
    $(".filter__btn").click(function (e) {
        $(this).parent().addClass('open');
    });

    $(".js-toggler").click(function (e) {
        $('.header').toggleClass('open');
        $('body').toggleClass('overfl');
    });
    $(".js-menu-btn-catalog").click(function (e) {
        $('.menu').addClass('open');
    });
    $(".js-top-arrow, .js-top-close").click(function (e) {
        $('.menu').removeClass('open');
    });

    $('.card-product__all-lnk').on('click', function (event) {

        event.preventDefault();
        var target = $('[data-toggle="tab"][href="' + this.hash + '"]');
        target.trigger('click');
        target[0].scrollIntoView(true);

        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({
            scrollBottom: destination
        }, 800);
        return false;
    });

    $('.js-banner-big').slick({
        dots: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.js-actions-slider').slick({
        dots: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                variableWidth: true,
                arrows: false,
                infinite: true
            }
        }]
    });

    $('.card-product__slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        fade: true,
        asNavFor: '.card-product__slider-nav'
    });
    $('.card-product__slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.card-product__slider-for',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        vertical: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                vertical: false,
                variableWidth: true
            }
        }]
    });

    $(".polzunok-5").slider({
        range: "min",
        value: 13,
        step: 1,
        min: 0,
        max: 100,
        slide: function slide(event, ui) {
            $(".polzunok-input-5-left").val(ui.value);
        }
    });
    $(".polzunok-input-5-left").change(function () {
        $(".polzunok-5").slider("value", this.value);
    });

    $(".polzunok-6").slider({
        min: 0,
        max: 1200,
        values: [300, 11870],
        range: true,
        animate: true,
        slide: function slide(event, ui) {
            $(".polzunok-input-6-left").val(ui.values[0]);
            $(".polzunok-input-6-right").val(ui.values[1]);
        }
    });
    $(".polzunok-input-6-left").val($(".polzunok-6").slider("values", 0));
    $(".polzunok-input-6-right").val($(".polzunok-6").slider("values", 1));
    $(document).focusout(function () {
        var input_left = $(".polzunok-input-6-left").val(),
            opt_left = $(".polzunok-6").slider("option", "min"),
            where_right = $(".polzunok-6").slider("values", 1),
            input_right = $(".polzunok-input-6-right").val(),
            opt_right = $(".polzunok-6").slider("option", "max"),
            where_left = $(".polzunok-6").slider("values", 0);
        if (input_left > where_right) {
            input_left = where_right;
        }
        if (input_left < opt_left) {
            input_left = opt_left;
        }
        if (input_left == "") {
            input_left = 0;
        }
        if (input_right < where_left) {
            input_right = where_left;
        }
        if (input_right > opt_right) {
            input_right = opt_right;
        }
        if (input_right == "") {
            input_right = 0;
        }
        $(".polzunok-input-6-left").val(input_left);
        $(".polzunok-input-6-right").val(input_right);
        $(".polzunok-6").slider("values", [input_left, input_right]);
    });
    $('.polzunok-6').draggable();
});
//# sourceMappingURL=app.js.map
