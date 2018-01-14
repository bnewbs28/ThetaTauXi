<?php get_header(); ?>
        <div id="interior-hero">
            <div style="background-image: url('<?php
                $heroImage = CFS()->get('interior_hero_image');
                if (!empty($heroImage)) {
                    echo $heroImage;
                } else {
                    $str1 = "/wp-content/themes/thetatautheme";
                    $str2 = "/img/roof.jpg";
                    echo $str1 . $str2;
                }
                ?>')"  class="interior-image">
            </div>
            <div class="hero-title-container">
                <div class="hero-title">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
            </div>
        </div>
        <div id="container">
            <div id="content">
                <div class="row">



    <?php the_post(); ?>

                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
    <?php the_content(); ?>
    <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
    <?php edit_post_link( __( 'Edit', 'your-theme' ), '<span class="edit-link">', '</span>' ) ?>
                        </div><!-- .entry-content -->
                    </div><!-- #post-<?php the_ID(); ?> -->

    <?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>

                </div><!-- #content -->
            </div>
        </div><!-- #container -->

<?php get_footer(); ?>
