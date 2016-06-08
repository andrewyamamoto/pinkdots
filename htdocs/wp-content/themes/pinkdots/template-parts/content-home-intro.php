<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pinkdots
 */

?>
<section class="hero">

   <div class="container">

      <div class="jumbotron">

         <h1 class='opaque-0'>
            <?php
				if ( get_field('homepage_title') ) {
					the_field('homepage_title');
				}
			?>
         </h1>

         <div class="banner-top opaque-0"></div>
         <div class="banner-bot opaque-0"></div>

      </div>

   </div>

</section>
