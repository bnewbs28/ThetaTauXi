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
    <div id="content" class="entry-content">
        <div class="row">
            <div class="eight">
				<?php the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h2 class="entry-title"><?php the_title(); ?></h2>
                    <div class="entry-meta">
                        <span class="meta-prep meta-prep-author"><?php _e('By ', 'hbd-theme'); ?></span>
                        <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link(false, $authordata->ID, $authordata->user_nicename); ?>" title="<?php printf(__('View all posts by %s', 'hbd-theme'), $authordata->display_name); ?>"><?php the_author(); ?></a></span>
                        <span class="meta-sep"> | </span>
                        <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'hbd-theme'); ?></span>
                        <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time(get_option('date_format')); ?></abbr></span>
                        <?php edit_post_link(__('Edit', 'hbd-theme'), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t") ?>
                    </div><!-- .entry-meta -->
					<div id="main-content">
                        <?php if (!empty(CFS()->get("news_story_slider"))) {
            ?>
                        <div id="blog-slider"><!-- Editable via CFS (image should be put as background image to slides below) -->
                            <?php
                                $theta_blog_images = CFS()->get("news_story_slider");
            foreach ($theta_blog_images as $theta_blog_image) :
                                    $theta_blog_image_url = $theta_blog_image['news_image']; ?>
                                <div style="background-image: url('<?php echo $theta_blog_image_url ?>');" class="slide">
                                </div>
                            <?php
                                endforeach; ?>
                        </div>
                    <?php
        } ?>
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __('Pages:', 'hbd-theme') . '&after=</div>') ?>
					</div><!-- .entry-utility -->

					<div class="entry-utility">
					                    <?php printf(__('This entry was posted in %1$s%2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>. Follow any comments here with the <a href="%5$s" title="Comments RSS to %4$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.', 'hbd-theme'),
                                            get_the_category_list(', '),
                                            get_the_tag_list(__(' and tagged ', 'hbd-theme'), ', ', ''),
                                            get_permalink(),
                                            the_title_attribute('echo=0'),
                                            comments_rss()) ?>

					<?php if (('open' == $post->comment_status) && ('open' == $post->ping_status)) : // Comments and trackbacks open?>
					                        <?php printf(__('<a class="comment-link" href="#respond" title="Post a comment">Post a comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'hbd-theme'), get_trackback_url()) ?>
					<?php elseif (!('open' == $post->comment_status) && ('open' == $post->ping_status)) : // Only trackbacks open?>
					                        <?php printf(__('Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'hbd-theme'), get_trackback_url()) ?>
					<?php elseif (('open' == $post->comment_status) && !('open' == $post->ping_status)) : // Only comments open?>
					                        <?php _e('Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'hbd-theme') ?>
					<?php elseif (!('open' == $post->comment_status) && !('open' == $post->ping_status)) : // Comments and trackbacks closed?>
					                        <?php _e('Both comments and trackbacks are currently closed.', 'hbd-theme') ?>
					<?php endif; ?>
					<?php edit_post_link(__('Edit', 'hbd-theme'), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>") ?>
                </div><!-- #post-<?php the_ID(); ?> -->

                <div id="nav-below" class="navigation">
						<?php previous_post_link('%link', '<span class="meta-nav">&laquo;</span> Previous Article') ?> <span style="color: #bbb;">&#8226;</span> <?php next_post_link('%link', 'Next Article <span class="meta-nav">&raquo;</span>') ?>
				</div><!-- #nav-below -->

 				<?php comments_template('', true); ?>

            </div>
            </div>

            <?php get_sidebar(); ?>
            <div class="clear"></div>
        </div><!-- #content -->
    </div><!-- #container -->
</div>


<?php get_footer(); ?>
