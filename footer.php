<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pegasus
 */
$options = get_fields( 'options' );
?>

<div class="top-footer">
	<div class="container">			
		<div class="sidebar">
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>			
				<?php dynamic_sidebar( 'footer-1' ); ?>			
			<?php endif; ?>
		</div>
	</div>
</div>

<footer id="colophon" class="site-footer " role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="footer_logo">
					<span>Powered by</span>
					<img src="<?php echo $options["copyright_logo"]; ?>">
				</div>
			</div>
			<div class="col-md-8">
				<p class="copyright"><?php echo $options["copyright_text"]; ?></p>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>