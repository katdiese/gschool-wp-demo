<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Implosion
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main row" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php
			/**
			 * Template part for displaying single posts.
			 *
			 * @link https://codex.wordpress.org/Template_Hierarchy
			 *
			 * @package Implosion
			 */

			?>

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<div class="entry-meta">
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->

				<p class="intro-text"><img class="featured-image" src="<?php the_field('gallery_featured_image'); ?>"></p>

				<div class="entry-content">

				<?php the_field('gallery_intro_text'); ?>

					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'implosion' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php implosion_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->

			<?php the_post_navigation(); ?>

			<!-- Related Posts -->
<?php 
$orig_post = $post;

global $post;

$categories = get_the_category($post->ID); // Get the current post's categories

if ($categories) {

    $category_ids = array();

    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

    // Related Post Loop Settings
    $args=array(
        'post_type' => 'gallery', // Post type to include
        'category__in' => $category_ids, // Categories to include (the categories associated with the current post)
        'post__not_in' => array($post->ID), // Posts to exclude (the current post)
        'posts_per_page'=> 3, // Number of related posts that will be shown.
        'caller_get_posts'=>1
    );

    $my_query = new wp_query( $args ); 

    if( $my_query->have_posts() ) { ?>

        <div class="gallery"> <!-- Using the .gallery class to inherit styles -->
            <h3>Related Work</h3> <!-- Section Headline -->

            <div class="row">

            <?php while( $my_query->have_posts() ) { $my_query->the_post();  // Begin Loop ?>

            <!-- Begin Related Post -->
            <a class="column one_third gallery-picture" href="<?php the_permalink(); ?>" style="background-image: url(<?php the_field('gallery_featured_image'); ?>);">
						</a>
            <!-- End Related Post -->

            <?php } // End Loop ?>

        </div>

<?php } }  // Closing `if categories` and `if query`

    // Resetting query for the rest of the page.
    $post = $orig_post;
    wp_reset_query(); 
?>


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
