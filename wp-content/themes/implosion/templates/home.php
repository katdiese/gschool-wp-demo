<?php

/**
 * Template Name: Home Page
 *
 * Description: Your template's description goes here.
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="hero" style="background-image: url(<?php the_field('hero_background_image'); ?>);">
					<h1>
						<?php the_field('hero_headline'); ?>
					</h1>
					<p>
						<?php the_field('hero_subhead'); ?>
					</p>
				</div>

				<!-- Services -->
				<div class="row services">
				<h2>What We're All About...</h2>

				<?php
			    // The Arguments
			    $args = array(
			        'post_type' => 'service',
			        'posts_per_page' => 3
			    );
			    // Start Loop
			    $loop = new WP_Query( $args );
			    while ( $loop->have_posts() ) : $loop->the_post();
				?>

					<div class="column one_third">
						<img src="<?php the_field('service_icon'); ?>">
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
					</div>
					<?php
				    // End Loop
				    endwhile;
				    wp_reset_postdata();
					?>
				</div>
				<div class="row gallery">
				<h2>Photo Gallery</h2>
					<?php
				    // The Arguments
				    $args = array(
				        'post_type' => 'gallery',
				        'posts_per_page' => 3
				    );
				    // Start Loop
				    $loop = new WP_Query( $args );
				    while ( $loop->have_posts() ) : $loop->the_post();
					?>

						<a class="column one_third" href="<?php the_permalink(); ?>" style="background-image: url(<?php the_field('gallery_featured_image'); ?>);">
							<h4><?php the_title(); ?></h4>
						</a>
						<?php
					    // End Loop
					    endwhile;
					    wp_reset_postdata();
						?>
						<a href="/gallery">View More ➞</a>
				</div>


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>