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
		<main id="main" class="site-main column" role="main">


			<?php while ( have_posts() ) : the_post(); ?>
				<div class="policies"><?php get_template_part( 'template-parts/content', 'page' ); ?></div>

				<div class="row policies">
					<?php the_field('policies_text'); ?>
				</div>

				<div class="row staff">
				<h2 class="staffTitle">Staff</h2>

				<?php
			    // The Arguments
			    $args = array(
			        'post_type' => 'staff',
			        'posts_per_page' => 2
			    );
			    // Start Loop
			    $loop = new WP_Query( $args );
			    while ( $loop->have_posts() ) : $loop->the_post();
				?>

					<div class="column one_half eachStaff">
						<img src="<?php the_field('staff_image'); ?>">
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
					</div>
					<?php
				    // End Loop
				    endwhile;
				    wp_reset_postdata();
					?>
				</div>



			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>