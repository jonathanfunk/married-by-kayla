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
      <section>
      </section>
      <section>
      </section>
      <section>
      </section>
      <section>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
