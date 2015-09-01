<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Implosion
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">Gallery</h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<a class="column one_third gallery-preview" href="<?php the_permalink(); ?>" style="background-image: url(<?php the_field('gallery_featured_image'); ?>);">
			</a>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>



		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>