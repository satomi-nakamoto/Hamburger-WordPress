<?php
/*
Template Name: page
*/
?>

<?php get_header('head'); ?>

<body id="page" <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="l-page__wrap">

    <?php get_header('common'); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <main class="l-main">
          <div class="l-shopMain__header p-shopMain__header u-shopMain__header">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="u-main__detailed">
          <?php the_content(); ?>
      </div>
    </main>    

        <?php endwhile;
    else : ?>
        <h2>ページがありません</h2>
        <p>お探しのページは見つかりませんでした。</p>
      <?php endif; ?>

      <?php get_sidebar(); ?>

      <?php get_footer(); ?>