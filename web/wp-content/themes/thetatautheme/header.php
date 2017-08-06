<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>

    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php
        add_action( 'wp_enqueue_scripts', function() {
        //Link Styles
        wp_enqueue_style( 'slick-cs', get_template_directory_uri() . '/slick/slick.css', [], 'GULP_REPLACE_VERSION' );
        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/styles/normalize.css');

        //Link Scripts
        wp_enqueue_script( 'underscore' );
        wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/slick/slick.min.js', ['jquery'], 'GULP_REPLACE_VERSION' );
        wp_enqueue_script( 'site', get_template_directory_uri() . '/js/site.js', ['jquery'], 'GULP_REPLACE_VERSION' );

        //Link Mobile Detect Base Styles
        // include('includes/mobile-detect.php');
        // $detect = new Mobile_Detect;
        // if($detect->isMobile()) {
        //     if($detect->isTablet())
        //          wp_enqueue_style('tablet-styles', $t_root.'/css/tablet.css');
        //     else wp_enqueue_style('phone-styles',  $t_root.'/css/phone.css');
        // }
        });
    ?>

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>

    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
<body>
<div id="wrapper" class="hfeed">
    <div id="header">
        <div id="masthead">

            <div id="access">
				<!--<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'hbd-theme' ) ?>"><?php _e( 'Skip to content', 'hbd-theme' ) ?></a></div>-->
				<?php #wp_page_menu( 'sort_column=menu_order' ); ?>
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
                <h1>Hello Theta Tau!</h1>
            </div><!-- #access -->

        </div><!-- #masthead -->
    </div><!-- #header -->

    <div id="main">
