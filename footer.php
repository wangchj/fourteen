<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php /*</div><!-- #body_wrap2 -->*/?>
</div><!-- #body_wrap1 -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">Site designed and build by <a href="http://github.com/wangchj" target="_blank">Jeff Wang</a> with inspiration from <a href="http://getbootstrap.com/2.3.2" target="_blank">Twitter Bootstrap</a>. 
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	<?php wp_footer(); ?>
</body>
</html>