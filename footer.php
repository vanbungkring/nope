<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Blain
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container row reset-size" role="contentinfo">
	<?php if ( of_get_option('credit1', true) == 0 ) { ?>
		<div class="site-info col-md-5">
			<?php do_action( 'blain_credits' ); ?>
			<?php printf( __( 'Copyright 2014 %1$s.', 'blain' ), '<a href="http://houseofperempuan.org/" rel="designer">HOPE</a>' ); ?>
		</div><!-- .site-info -->
	<?php } ?>	
		<div id="footertext" class="col-md-7">
        	<?php
			if ( (function_exists( 'of_get_option' ) && (of_get_option('footertext2', true) != 1) ) ) {
			 	echo of_get_option('footertext2', true); } ?>
        </div>   
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php		
	if ( (function_exists( 'of_get_option' ) && (of_get_option('footercode1', true) != 1) ) ) {
			 	echo of_get_option('footercode1', true); } ?>
<?php wp_footer(); ?>
</body>
</html>