<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Implosion
 */

get_header(); ?>

	<div id="primary faq" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="testimonialTitle">Testimonials</h1>
			</header><!-- .page-header -->


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="testimonialField">
					<?php the_field('testimonial'); ?>
				</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>