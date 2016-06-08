<?php
/**
 * The front page template file
 *
 * @link https://codex.wordpress.org/Creating_a_Static_Front_Page
 *
 * @package pinkdots
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'home' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
