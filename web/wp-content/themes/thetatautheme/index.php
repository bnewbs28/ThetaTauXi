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
                <h1>News</h1>
            </div>
        </div>
    </div>
    <div id="blog">
        <div id="container">
            <div id="content" class="entry-content blog">
                <div class="row">
                    <div class="eight">
    		<?php /* Top post navigation */ ?>
    		<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>

    		<?php } ?>

    		<?php /* The Loop — with comments! */ ?>
    		<?php while ( have_posts() ) : the_post() ?>

    		<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>
    		                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    		<?php /* an h2 title */ ?>
            <a class="thumbnail-link" href="<?php the_permalink(); ?>">
                <div class="post-thumbnail" style="background-image: url('<?php $thumbnail = get_the_post_thumbnail_url();
                    if (empty($thumbnail)) {
                        $str1 = "/wp-content/themes/thetatautheme";
                        $str2 = "/img/square_crest.jpg";
                        echo $str1 . $str2;
                    } else {
                        echo $thumbnail;
                    }
                    ?>');">
                    <div class="thumbnail-shade"><h1 class="read-more">READ MORE</h1></div>
                </div>
            </a>

                            <div class="post-info">


    		                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

    		<?php /* Microformatted, translatable post meta */ ?>
    		                    <div class="entry-meta">
    		                        <span class="meta-prep meta-prep-author"><?php _e('By ', 'hbd-theme'); ?></span>
    		                        <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'hbd-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
    		                        <span class="meta-sep"> | </span>
    		                        <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'hbd-theme'); ?></span>
    		                        <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
    		                        <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
    		                    </div><!-- .entry-meta -->

    		<?php /* The entry content */ ?>
    		                    <div class="entry-content excerpt">
    		<p>
                <?php echo get_the_excerpt(); ?>
            </p>
    		<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
    		                    </div><!-- .entry-content -->
                            </div>
                        <div class="clear"></div>
    		<?php /* Microformatted category and tag links along with a comments link */ ?>
    		                    <div class="entry-utility">
    		                        <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'hbd-theme' ); ?></span><?php echo get_the_category_list(', '); ?></span>
    		                        <span class="meta-sep"> | </span>
    		                        <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'hbd-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
    		                        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'hbd-theme' ), __( '1 Comment', 'hbd-theme' ), __( '% Comments', 'hbd-theme' ) ) ?></span>
    		                        <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
    		                    </div><!-- #entry-utility -->
    		                </div><!-- #post-<?php the_ID(); ?> -->

    		<?php /* Close up the post div and then end the loop with endwhile */ ?>

    		<?php endwhile; ?>

    		<?php /* Bottom post navigation */ ?>
    		<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
    		                <div id="nav-below" class="navigation">
    		                    <?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )) ?> <span style="color: #bbb;">&#8226;</span> <?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )) ?>
    		                </div><!-- #nav-below -->
    		<?php } ?>
            </div>
                <div class="clear-mobile"></div>
            	<?php get_sidebar(); ?>
                <div class="clear"></div>
            </div>
        </div><!-- #content -->
    </div><!-- #container -->
</div>

<?php get_footer(); ?>
