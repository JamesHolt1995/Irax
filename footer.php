<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package irax_2022
 */

$img_url = get_template_directory_uri() . '/assets/img/background.svg';

?>
<footer style="background-image: url(<?php echo $img_url ?>);" id="colophon" class="site-footer">
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>