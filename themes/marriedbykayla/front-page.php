<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class="hero" id="hero"><!-- HERO SECTION -->
      </section>
      <section class="about" id="about"><!-- ABOUT SECTION -->
				<div class="container">
					<h2>About Us</h2>
					<h3>Who are we?</h3>
					<div class="about-wrap">
						<div class="about-image">
							<img src="<?php echo CFS()->get( 'about_us_picture' ); ?>" alt="About Us Picture" />
						</div>
						<div class="about-blurb">
							<div class="about-blurb-wrap">
								<?php echo CFS()->get( 'about_us_blurb' ); ?>
							</div>
						</div>
					</div>
				</div>
      </section>
      <section class="services" id="services"><!-- SERVICES SECTION -->
				<div class="container">
					<h2>Services</h2>
					<ul class="services-list">
						<li class="basic">
							<input type="checkbox" checked>
							<h3>Basic</h3>
							<div class="service-desc">
								<p><?php echo CFS()->get( 'basic_service' ); ?></p>
								<p class="price">Price: <?php echo CFS()->get( 'basic_price' ); ?></p>
							</div>
						</li>
						<li class="simple">
							<input type="checkbox" checked>
							<h3>Simple</h3>
							<div class="service-desc">
								<p><?php echo CFS()->get( 'simple_service' ); ?></p>
								<p class="price">Price: <?php echo CFS()->get( 'simple_price' ); ?></p>
							</div>						</li>
						<li class="rehearsal">
							<input type="checkbox" checked>
							<h3>Rehearsal</h3>
							<div class="service-desc">
								<p><?php echo CFS()->get( 'rehearsal_service' ); ?></p>
								<p class="price">Price: <?php echo CFS()->get( 'rehearsal_price' ); ?></p>
							</div>						</li>
						<li class="custom">
							<input type="checkbox" checked>
							<h3>Custom</h3>
							<div class="service-desc">
								<p><?php echo CFS()->get( 'custom_service' ); ?></p>
								<p class="price">Price: <?php echo CFS()->get( 'custom_price' ); ?></p>
							</div>						</li>
					</ul>
					<div class="note">
						<p>*If you require travel outside of Saskatoon, we request an additional $0.412/km</p>
					</div>
				</div>
      </section>
      <section class="calendar" id="calendar"><!-- CALENDAR SECTION -->
				<div class="container">
					<h2>Calendar</h2>
					<h3>Request a date</h3>
					<?php echo do_shortcode("[booking type=1 nummonths=1]"); ?>
				</div>
      </section>
      <section class="faq" id="faq">
				<h2>FAQ</h2>
				<ul>
					<li>
					</li>
				</ul>
      </section>
      <section class="testimonials" id="testimonials"><!-- TESTIMONIAL SECTION -->
				<h2>Testimonials</h2>
				<ul data-flickity='{ "cellAlign": "left", "contain": true, "autoPlay": true, "prevNextButtons": false }'>
					<?php
						$args = array(
							'post_type' => 'testimonial',
							'order' => 'DESC',);
							$testimonial_posts = get_posts( $args ); // returns an array of posts
							?>
							<?php foreach ( $testimonial_posts as $post ) : setup_postdata( $post ); ?>
								<li class="carousel-cell">
									<div class="testimonial-pic"><?php the_post_thumbnail('medium'); ?>
									</div>
									<div class="testimonial-text">
										<?php the_content(); ?>
										<p class="client-name"><?php the_title(); ?></h3>
									</div>
								</li>
							<?php endforeach; ?>
				</ul>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
