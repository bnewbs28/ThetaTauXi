jQuery(function( $ ) {
    "use strict"

    $( '#hero-slider' ).slick({
                arrows: false,
                pauseOnHover: true,
                fade: true,
                autoplay: true,
                autoplaySpeed: 7000,
                speed: 1000
            });

    var menuOpen = false;
    $( '#menu-button' ).click(function(){
        if (!menuOpen) {
            $( '#mobile-menu-interior' ).addClass( 'menu-open' );
            menuOpen = true;
        } else {
            $( '#mobile-menu-interior' ).removeClass( 'menu-open' );
            menuOpen = false;
        }
    });
});
