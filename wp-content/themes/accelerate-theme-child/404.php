<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="error-404" class="site-content">
		<div class="main-content" role="main">
      <figure class="error-404-img">
      <img src="<?php echo THEME_IMG_PATH; ?>/yoda.png" />
      </figure>
      <section class="error-404-message">
        <h1>404</h1>
        <p>The page you are looking for, this is not.</p>
        <p>Return to the <a href="<?php echo site_url('/') ?>">homepage</a>, you may.</p>
      </section>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
