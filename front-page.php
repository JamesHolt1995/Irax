<?php

/**
 * front-page
 *
 *
 * @package irax_2022
 */

get_header();
while (have_posts()) : the_post();
    /* grab the url for the full size featured image */
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>

    <main id="primary" class="site-main holding-page">
        <div class="grid">

            <div class="top-image">
                <img src="<?php echo $featured_img_url ?>" alt="building a website">
            </div><!-- /top-image -->

            <div class="top-section">
                <h1 class="title">
                    <?php the_title(); ?>
                </h1>
                <div class="top-section__p"><?php the_content(); ?>
                </div>
                <div class="top-section__buttons">
                    <a href="#contact" class="button">Contact us</a>
                </div>
            </div><!-- /top-section -->


            <div id="about" class="about-us">
                <h2 class="title">
                    About us
                </h2>
                <p class="top-section__p">
                    Irax have two main strands of business, one is our Xero accounts service where we help our clients with their book keeping and support them in the use of Xero, the other is doing things with information technology, that's things like Amazon Web services (AWS), Programming, Virtual Private networks, web payments and so much more stuff that happens on the web.
                </p>
                <a href="#contact" class="button">Contact us</a>
            </div>

            <div id="contact" class="contact-us">
                <h2 class="title">
                    Get in touch
                </h2>
                <p class="top-section__p">
                    <b>T.</b> <a href="tel: 0171 761 0077">0171 761 0077</a>
                    <br>
                    <b>E.</b> <a href="mailto: tellmemore@irax.com">tellmemore@irax.com</a>
                </p>
            </div>

        </div><!-- /grid -->
    </main>

<?php
endwhile;
get_footer();
