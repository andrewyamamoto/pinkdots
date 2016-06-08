<?php
/**
 * The template for displaying site navigation
 *
 * @package suitlessattorney
 */
?>
<nav class="navbar navbar-default navbar-fixed-top">

  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" data-offset="111">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand"><img src=<?php echo get_bloginfo('template_directory') . '/img/pinkdots-logo.png' ?> alt="" class="img-responsive"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'primary',
            'menu_id'         => 'primary-menu',
            'menu_class'      => 'nav navbar-nav navbar-right',
            'container'       => 'ul',
            'container_class' => 'collapse navbar-collapse',
        ) );

        ?>

    </div>

  </div>
</nav>
