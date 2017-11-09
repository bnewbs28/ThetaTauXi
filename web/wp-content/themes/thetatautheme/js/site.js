jQuery(function($) {
            "use strict"

            $('#hero-slider').slick({
                arrows: false,
                pauseOnHover: false,
                fade: true,
                autoplay: true,
                autoplaySpeed: 7000,
                speed: 1000
            });

            var menuOpen = false;
            $('#menu-button, .screen').click(function() {
                if (!menuOpen) {
                    $('#mobile-menu-wrap').addClass('menu-open');
                    $('body').addClass('fixed')
                    menuOpen = true;
                } else {
                    $('#mobile-menu-wrap').removeClass('menu-open');
                    $('body').removeClass('fixed')
                    menuOpen = false;
                }
            });

            var subMenuOpen = false;
            $("#header .mobile-menu li.menu-item-has-children").click(function() {
                if (!subMenuOpen) {
                    $(this).find(".sub-menu").stop().slideDown("slow");
                    $( this ).find(".sub-menu").addClass( 'selected' );
                    subMenuOpen = true;
                } else {
                    $(this).find(".sub-menu").stop().slideUp("slow");
                    $( this ).find(".sub-menu").removeClass( 'selected' );
                    subMenuOpen = false;
                }
            });

            function isMobile() {
                return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
            }

            //place script you don't want to run on mobile here
                $(document).ready(function() {
                    if (!isMobile()) {
                        $("#header .menu li.menu-item-has-children").mouseover(function() {
                            $(this).find(".sub-menu").stop().slideDown("slow");
                            $( this ).find(".sub-menu").addClass( 'selected' );
                        });
                        $("#header .menu li.menu-item-has-children").mouseout(function() {
                            $(this).find(".sub-menu").stop().slideUp("slow");
                            $( this ).find(".sub-menu").removeClass( 'selected' );
                        });
                    }
                    });

    });
