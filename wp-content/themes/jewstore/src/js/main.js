jQuery('.menu-toggle').on( 'click', function(){
    const $this = jQuery(this);

    $this.toggleClass('touch');
    jQuery('.header-menu').toggleClass('show');
});

jQuery('.search-form__btn').on( 'click', function(){
    jQuery('.search-form').toggleClass('open');
    jQuery('.hide-when-search').toggleClass('hide');
});

jQuery(document).ready(function(){
    jQuery('.slider').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<div class="slider__prev d-flex"><svg class="svg-icon"><use xlink:href="./wp-content/themes/jewstore/assets/sprite.svg#prev-icon" /></svg></div>',
        nextArrow: '<div class="slider__next d-flex"><svg class="svg-icon"><use xlink:href="./wp-content/themes/jewstore/assets/sprite.svg#next-icon" /></svg></div>',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});