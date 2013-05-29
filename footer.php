<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage JellyBean
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'JellyBean_credits' ); ?>
			
			<div id="copyright">
			<p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?> | <span class="site-description"><?php bloginfo( 'description' ); ?></span> </p>
			<p>Powered by <a href="<?php echo esc_url( __('http://www.WordPress.org/', 'WordPress') ); ?>" title="Semantic Personal Publishing Platform" target="_blank">WordPress </a> | Theme by <a href="<?php echo esc_url( __('http://www.techmantra.org/', 'TechMantra') ); ?>" title="TechMantra.org" target="_blank">Swapnil V. Patil </a></p>
			</div><!-- // copyright -->
			          			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
<script type="text/javascript">
    var home_url="<?php echo esc_url(home_url('/')); ?>";
    var is_mobile="<?php if(is_mobile()){echo 'true';}?>";
</script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/JellyBean.js?201302051332"></script>
</body>
</html>