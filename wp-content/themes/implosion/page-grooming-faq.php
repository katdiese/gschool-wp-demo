<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Implosion
 */

get_header(); ?>

	<div class="content-area">
		<main id="main" class="site-main" role="main">

			

			<div class="row">

			<div class="column one_half">
			<h2 class="faqTitle">FAQ for Cats</h2>

			<?php 			    // The Arguments
			    $args = array(
			        'post_type' => 'catfaq'
			    );
			    // Start Loop
			    $loop = new WP_Query( $args );
			    while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="faq-question">
					<?php the_field('faq_question'); ?>
				</div>
				<div class="faq-answer hide">
					<?php the_field('faq_answer'); ?>
				</div>

			<?php endwhile; // End of the loop. ?>


			</div>

			<div class="column one_half">
			<h2 class="faqTitle">FAQ for Dogs</h2>

			<?php 			    // The Arguments
			    $args = array(
			        'post_type' => 'dogfaq'
			    );
			    // Start Loop
			    $loop = new WP_Query( $args );
			    while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="faq-question">
					<?php the_field('faq_question'); ?>
				</div>
				<div class="faq-answer hide">
					<?php the_field('faq_answer'); ?>
				</div>

			<?php endwhile; // End of the loop. ?>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
