<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pinkdots
 */

?>
<section class='section-title' id="projects">
   <div class="container">
      <span>See what we've done</span>
   </div>
</section>
<section class='project-content'>
   <div class="container">
        <?php if( have_rows('sample_image') ): ?>
            <?php while( have_rows('sample_image') ) : the_row(); ?>
            <?php
                $itemDesc = get_sub_field('item_desc');
                $itemImage  = get_sub_field('item_image');
            ?>
                <div class="col-md-2 col-sm-2 col-lg-2">
                    <a href=<?php echo $itemImage; ?> data-lightbox="image" data-title="">
                        <img src=<?php echo $itemImage; ?> alt="" class='img-responsive'>
                    </a>
                </div>
            <?php endwhile; ?>

        <?php endif; ?>
   </div>
</section>
