<?php
/*
Template Name: Full Width(No Sidebar)
*/

get_header(); ?>

	<div id="primary" class="full-width content-area .col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
