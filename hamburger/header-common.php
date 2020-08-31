

<header class="l-common__header">

      <p class="menu l-menu u-menu"><button type="button" class="l-menu-btn c-menu-btn u-menu-btn"
          onclick="myFunc()">Menu</button></p>
      <p class="l-logo u-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo( 'name' ); ?></a></p>

      <?php get_search_form(); ?>

    </header>
