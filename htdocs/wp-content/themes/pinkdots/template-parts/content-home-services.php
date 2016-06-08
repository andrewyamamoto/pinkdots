<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pinkdots
 */

?>
<section class='section-title' id="service">
   <div class="container">
      <span>
          <?php
          if ( get_field('service_title') ) {
              the_field('service_title');
          }
          ?>
      </span>
   </div>
</section>
<section class='service-content'>

   <div class="container">

      <div class="row service">

        <?php if( have_rows('service_item') ): ?>
            <?php while( have_rows('service_item') ) : the_row(); ?>
            <?php
                $itemTitle = get_sub_field('item_title');
                $itemDesc = get_sub_field('item_description');
                $itemImage  = get_sub_field('item_icon');
                $itemClass  = get_sub_field('item_class');
            ?>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 service-item">
                   <div class='service-item-content'>
                      <div class=<?php echo $itemClass ?>><img src=<?php echo $itemImage; ?> alt=""/></div>
                      <div class='title'><?php echo $itemTitle; ?></div>
                      <div class='tag'><?php echo $itemDesc; ?></div>
                   </div>
                </div>
            <?php endwhile; ?>

        <?php endif; ?>

      </div>

   </div>

</section>
