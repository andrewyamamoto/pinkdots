<?php
/**
 * Template Name: Tasks
 *
 * @link https://codex.wordpress.org/Creating_a_Static_Front_Page
 *
 * @package pinkdots
 */
get_header(); ?>

	<?php

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'tasks' );

		endwhile; // End of the loop.
		
	?>

<?php
get_footer();
