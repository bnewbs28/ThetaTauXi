<?php
/*
 * Template Name: Home
 * The template for displaying the home page.
 *
 * @package WordPress
 * @subpackage thetatautheme
 */

get_header();
?>
<div id="hero">
    <div id="hero-slider"><!-- Editable via CFS (image should be put as background image to slides below) -->
        <?php
            $theta_hero_images = CFS()->get("home_page_images");
            foreach ($theta_hero_images as $theta_hero_image) :
                $theta_hero_slide = $theta_hero_image['home_page_image'];
                $theta_hero_text = $theta_hero_image['home_page_tagline'];
        ?>
            <div style="background-image: url(<?php echo $theta_hero_slide ?>);" class="slide">
                <div class="gear-container">
                    <div class="gear"><h1 class="hero-text"><?php echo $theta_hero_text ?></h1></div>

                </div>

            </div>

        <?php
            endforeach;
        ?>
    </div>
</div>
<div id="News">
    <div class="row">
    <h1 class="news-title">Latest News</h1>
    <?php
       // the query
       $the_query = new WP_Query(array(
          'posts_per_page' => 3,
       ));
    ?>
    <div class="news-stories-container">
    <?php if ($the_query->have_posts()) : ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <a class="thumbnail-link" href="<?php the_permalink(); ?>">
              <div class="home-post-thumbnail background-img" style="background-image: url('<?php $thumbnail = get_the_post_thumbnail_url();
                  if (empty($thumbnail)) {
                      $str1 = "/wp-content/themes/thetatautheme";
                      $str2 = "/img/square_crest.jpg";
                      echo $str1 . $str2;
                  } else {
                      echo $thumbnail;
                  }
                  ?>');">
                  <div class="news-story-shade">
                      <div class="title-container">
                          <h2><?php the_title(); ?></h2>
                      </div>
                      <p><?php the_excerpt(); ?></p>
                  </div>
              </div>
          </a>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p><?php __('No News'); ?></p>
    <?php endif; ?>
        </div>
    </div>
</div>
<div id="about">
    <div id="about-left">
        <div class="row">
            <div class="about-text">
                <h1 class="about-title"><?php echo cfs()->get('about_us_tag'); ?></h1>
                <div class="about-content"><?php echo cfs()->get('about_us_des'); ?></div>
                <a href="<?php echo cfs()->get('about_us_button_link'); ?>" class="button-link"><?php echo cfs()->get('about_us_button_text'); ?></a>
            </div>
        </div>
    </div>
    <div id="about-pic" style="background-image: url('<?php echo cfs()->get('about_us_img'); ?>"></div>
</div>

<div id="rush">
    <div id="rush-right">
        <div class="row">
            <h1 class="rush-title"><?php echo cfs()->get('rush_tagline'); ?></h1>
            <div class="rush-content"><?php echo cfs()->get('rush_des'); ?></div>
            <a href="<?php echo cfs()->get('rush_button_link'); ?>" class="button-link"><?php echo cfs()->get('rush_button_text'); ?></a>
        </div>
    </div>
    <div id="rush-pic" style="background-image: url('<?php echo cfs()->get('rush_image'); ?>"></div>
</div>
<?php get_footer(); ?>
