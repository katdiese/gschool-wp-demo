<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Implosion
 */

get_header(); ?>

	<div id="primary contact-info" class="content-area">
		<main id="main" class="site-main row" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>


		<?php endwhile; // End of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>