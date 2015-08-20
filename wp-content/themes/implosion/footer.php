<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Implosion
 */

?>
	</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="row">
				<div class="footer column one_half">
					<h3>Pet Appearance Grooming</h3>
					<h3>556 Daly Rd, Coventry, CT</h3>
					<p>Hours:</p>
					<p>Monday-Friday: 9am - 4pm</p>
					<p>Saturday: 9am-3pm</p>
					<p>Sunday: Closed</p>
					<p>Or by appointment</p>
				</div>
				<div class="footer column one_half secondHalf">
					<h3>Phone: (860)-742-9831</3>
					<div class="row socialMenu">
						<?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_id' => 'social' ) ); ?>
					</div>
		</div>
		<p>Copyright  <?php echo date("Y"); ?> <?php bloginfo('name'); ?> All Rights Reserved	
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
