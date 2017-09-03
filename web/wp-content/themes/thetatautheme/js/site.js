jQuery(function( $ ) {
    "use strict"

    $( '#hero-slider' ).slick({
                arrows: false,
                pauseOnHover: false,
                fade: true,
                autoplay: true,
                autoplaySpeed: 7000,
                speed: 1000
            });

    var menuOpen = false;
    $( '#menu-button, .screen' ).click(function(){
        if (!menuOpen) {
            $( '#mobile-menu-wrap' ).addClass( 'menu-open' );
            $('body').addClass('fixed')
            menuOpen = true;
        } else {
            $( '#mobile-menu-wrap' ).removeClass( 'menu-open' );
            $('body').removeClass('fixed')
            menuOpen = false;
        }
    });
});
