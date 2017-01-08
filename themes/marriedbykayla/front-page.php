<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class="hero" id="hero">
      </section>
      <section class="about" id="about">
				<h2>About Us</h2>
				<h3>Who are we?</h3>
				<div class="about-image">
					<img src="<?php echo CFS()->get( 'about_us_picture' ); ?>" alt="About Us Picture" />
				</div>
				<div class="about-blurb">
					<div class="about-blurb-wrap">
						<?php echo CFS()->get( 'about_us_blurb' ); ?>
					</div>
				</div>
      </section>
      <section class="services" id="services">
				<div class="container">
					<h2>Services</h2>
					<ul class="services-list">
						<li class="basic">
							<a href="#"><h3>Basic</h3></a>
							<div class="service-desc">
								<p><?php echo CFS()->get( 'basic_service' ); ?></p>
								<p class="price">Price: <?php echo CFS()->get( 'basic_price' ); ?></p>
							</div>
						</li>
						<li class="simple">
							<a href="#"><h3>Simple</h3></a>
							<div class="service-desc">
								<p><?php echo CFS()->get( 'simple_service' ); ?></p>
								<p class="price">Price: <?php echo CFS()->get( 'simple_price' ); ?></p>
							</div>						</li>
						<li class="rehearsal">
							<a href="#"><h3>Rehearsal</h3></a>
							<div class="service-desc">
								<p><?php echo CFS()->get( 'rehearsal_service' ); ?></p>
								<p class="price">Price: <?php echo CFS()->get( 'rehearsal_price' ); ?></p>
							</div>						</li>
						<li class="custom">
							<a href="#"><h3>Custom</h3></a>
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
      <section class="calendar" id="calendar">
				<div class="container">
					<h2>Calendar</h2>
					<h3>Request a date</h3>
					<?php echo do_shortcode("[booking type=1 nummonths=1]"); ?>
				</div>
      </section>
      <section>
      </section>
      <section>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
