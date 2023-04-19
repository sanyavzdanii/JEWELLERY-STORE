jQuery('.menu-toggle').on( 'click', function(){
    const $this = jQuery(this);

    $this.toggleClass('touch');
    jQuery('.header-menu').toggleClass('show');
});

jQuery('.search__btn').on( 'click', function(){
    jQuery('.search').toggleClass('open');
    jQuery('.hide-when-search').toggleClass('hide');
});