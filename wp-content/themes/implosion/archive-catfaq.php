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
				<h1>Grooming FAQ</h1>
			</header><!-- .page-header -->
					<div class="row faqMenu">
						<?php wp_nav_menu( array( 'theme_location' => 'faq', 'menu_id' => 'faq' ) ); ?>
					</div>
					<h2 class="faqTitle">FAQ For Cats</h2>


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="faq-question">
					<?php the_field('catfaq_question'); ?>
				</div>
				<div class="faq-answer">
					<?php the_field('catfaq_answer'); ?>
				</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>