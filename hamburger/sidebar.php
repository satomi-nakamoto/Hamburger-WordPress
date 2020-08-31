<aside class="sidebar l-sidebar p-sidebar">
    <div class="p-hamburgerMenu u-hamburgerMenu">
      <button type="button" class="c-menu-btn-close u-menu-btn-close" onclick="myFunc()">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/close-icon.png" alt="メニューを閉じる">
      </button>

      <p class="u-menu">Menu</p>
  
      <?php register_nav_menu( 'side-nav', 'サイドナビゲーション', ); ?>

      <?php wp_nav_menu( array( 'theme_location' => 'side-nav' ) ); ?>

    </div>
</aside>