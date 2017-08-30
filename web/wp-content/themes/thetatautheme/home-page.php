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
            foreach ( $theta_hero_images as $theta_hero_image ) :
                $theta_hero_image = $theta_hero_image['home_page_image'];
        ?>
            <div style="background-image: url(<?php echo $theta_hero_image ?>);" class="slide">
                <div class="gear-container">
                    <div class="gear"><h1 class="hero-text">Dammit Ashley</h1></div>

                </div>

            </div>

        <?php
            endforeach;
        ?>
    </div>
</div>


<?php get_footer(); ?>
