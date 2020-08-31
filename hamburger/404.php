<?php
/*
Template Name: 404
*/
?>

<?php get_header( 'head' ); ?>

<body id="front-page" <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="l-frontPage__wrap">

    <header class="frontPage-header l-frontPage__header">
      <div class="frontPage__header-head l-frontPage__header-head">
        <h1 class="l-header__title p-header__title u-header__title"><?php bloginfo('name'); ?></h1>

        <?php get_search_form(); ?>

        <p class="menu l-menu"><button type="button" class="l-menu-btn c-menu-btn u-menu-btn" onclick="myFunc()">Menu</button></p>
      </div>
      <div class="l-frontPage__sub p-frontPage__sub u-frontPage__sub">
        <h2><?php the_title(); ?></h2>
        <figure class="hero-img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/hero.png" alt="" class="c-hero">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/heroBig.png" alt="" class="c-heroBig">
        </figure>
      </div>

    </header>
        
 <?php wp_footer(); ?>        
