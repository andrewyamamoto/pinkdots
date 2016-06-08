<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pinkdots
 */

?>
<section class='information-content'>

   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="about">

         <div class="info pull-right">
            <h2>
                <?php
                    if ( get_field('about_title') ) {
                        the_field('about_title');
                    }
                ?>
            </h2>
            <p>
                <?php
                    if ( get_field('about_desc') ) {
                        the_field('about_desc');
                    }
                ?>
            <h2>Follow us on Facebook and Instagram!</h2>
            <a href="https://www.facebook.com/pinkdotspapercrafts" class='fa fa-facebook-official' target="_blank"></a>
            <a href="https://www.instagram.com/pinkdots_papercrafts/" class='fa fa-instagram'></a>

         </div>

   </div>

   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="contact">

         <div class="info">

            <h2>Contact</h2>

            <?php echo do_shortcode( '[pirate_forms]' ) ?>
            
         </div>

   </div>

</section>
