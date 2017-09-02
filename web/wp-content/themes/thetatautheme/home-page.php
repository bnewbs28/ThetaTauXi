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

<div id="about">
    <div id="about-left">
        <div class="row">
            <div class="about-text">
                <h1 class="about-title">About Us</h1>
                <p class="about-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lorem felis. Nam pulvinar nunc non tellus molestie vulputate. Pellentesque sollicitudin urna non nisi rhoncus, vitae tincidunt lorem molestie. In eu sapien id nisl lacinia vulputate. Sed auctor orci accumsan tempus imperdiet. In vitae iaculis sem, in lacinia leo. Praesent in fringilla risus, vitae luctus nibh. Nunc ac tincidunt libero. Nunc suscipit, mauris eu tempus rutrum, elit est faucibus nisi, et vehicula lacus risus nec erat. Duis quis sem quam.</p>
                <a href="/about-us/" class="button-link">Learn More</a>
            </div>
        </div>
    </div>
    <div id="about-pic"></div>
</div>

<div id="rush">
    <div id="rush-pic"></div>
    <div id="rush-right">
        <div class="row">
            <h1 class="rush-title">Rush</h1>
            <p class="rush-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lorem felis. Nam pulvinar nunc non tellus molestie vulputate. Pellentesque sollicitudin urna non nisi rhoncus, vitae tincidunt lorem molestie. In eu sapien id nisl lacinia vulputate. Sed auctor orci accumsan tempus imperdiet. In vitae iaculis sem, in lacinia leo. Praesent in fringilla risus, vitae luctus nibh. Nunc ac tincidunt libero. Nunc suscipit, mauris eu tempus rutrum, elit est faucibus nisi, et vehicula lacus risus nec erat. Duis quis sem quam.</p>
            <a href="/rush/" class="button-link">Learn More</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>
