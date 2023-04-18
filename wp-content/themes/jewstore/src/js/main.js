jQuery('.menu-toggle').on( 'click', function(){
    const $this = jQuery(this);

    $this.toggleClass('touch');
    jQuery('.header-menu').toggleClass('show');
});