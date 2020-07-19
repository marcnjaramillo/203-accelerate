<?php
/**
 * Template Name: About page
 * The template for displaying the About page
 *
 * This is the template that displays the About page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

  <div id="about-page" class="about-page hero-content">
		<div class="about-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div><!-- .about-content -->
  </div><!-- #about-page -->

	<section id="about-content" class="site-content">
		<div class="about-content-detail" role="main">
      <?php while ( have_posts() ) : the_post();
        $heading = get_field("heading");
        $services = get_field("services");
        $service_1_title = get_field("service_1_title");
        $service_1 = get_field("service_1");
        $service_2_title = get_field("service_2_title");
        $service_2 = get_field("service_2");
        $service_3_title = get_field("service_3_title");
        $service_3 = get_field("service_3");
        $service_4_title = get_field("service_4_title");
        $service_4 = get_field("service_4");
        $link = get_field("site_link");
        $image_1 = get_field("image_1");
        $image_2 = get_field("image_2");
        $image_3 = get_field("image_3");
        $image_4 = get_field("image_4");
        $size = "full";
      ?>
        <h2 id="about"><?php echo $heading; ?></h2>
        <p class="services-text"><?php echo $services; ?></p>
        <div class="service-right">
          <h1><?php echo $service_1_title; ?></h1>
          <p><?php echo $service_1; ?></p>
        </div>
        <figure class="image-left">
          <?php echo wp_get_attachment_image($image_1, $size); ?>
        </figure>
        <div class="service-left">
          <h1><?php echo $service_2_title; ?></h1>
          <p><?php echo $service_2; ?></p>
        </div>
        <fgure class="image-right">
          <?php echo wp_get_attachment_image($image_2, $size); ?>
        </fgure>
        <div class="service-right">
          <h1><?php echo $service_3_title; ?></h1>
          <p><?php echo $service_3; ?></p>
        </div>
        <figure class="image-left">
          <?php echo wp_get_attachment_image($image_3, $size); ?>
        </figure>
        <div class="service-left">
          <h1><?php echo $service_4_title; ?></h1>
          <p><?php echo $service_4; ?></p>
        </div>
        <figure class="image-right">
          <?php echo wp_get_attachment_image($image_4, $size); ?>
        </figure>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .about-content -->
  </section><!-- #about-page -->

  <section id="contact-link">

      <span id="contact-text">Interested in working with us?</span>
      <span id="contact-url">
        <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
      </span>
  </section>
  

<?php get_footer(); ?>
