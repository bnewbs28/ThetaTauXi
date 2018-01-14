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
                <h1>404 Not Found</h1>
            </div>
        </div>
    </div>
        <div id="container">
            <div id="content">
                <div class="row">
                    <div class="entry-content blog">
                        <h2>Oh No!</h2>
                        <p>It looks like the page you were looking for does not exist. Try seraching for it instead.</p>
		                <?php get_search_form(); ?>
                    </div>
                </div>
            </div><!-- #content -->
        </div>
    </div><!-- #container -->
<?php get_footer(); ?>
