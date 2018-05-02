<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Moesia
 */
?>

	<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
	
	<?php tha_footer_before(); ?>
	<?php if ( is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php tha_footer_top(); ?>
		<div class="site-info container">
			<div class="craigsocial">
				<a href="https://twitter.com/cgodfrey" title="Follow Me on Twitter" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
				<a href="http://www.linkedin.com/in/craiggodfrey" title="Connect with Me on LinkedIn" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
			</div>
			&copy; <?php echo date ('Y');?> Craig Godfrey
		</div><!-- .site-info -->
		
		<?php tha_footer_bottom(); ?>
	</footer><!-- #colophon -->
	<?php tha_footer_after(); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
