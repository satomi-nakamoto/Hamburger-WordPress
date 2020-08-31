<?php
/*
Template Name: single
*/
?>


<?php get_header('head'); ?>

<body id="single" <?php body_class(); ?>>

<?php wp_body_open(); ?>

  <div class="l-single__wrap">

    <?php get_header('common'); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <main class="l-main u-main">

          <!-- サムネイルがあればヘッダー画像として表示する -->
          <div class="l-main__header p-main__header u-main__header header-image bg_thumbnails" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">
            <h1><?php the_title(); ?></h1>
          </div>

          <div class="u-main__detailed">

            <?php the_content(); ?>

          </div>
        </main>

<!-- <nav> -->
<nav class="postNavi-sp">
<?php the_post_navigation(array(
    'prev_text'           => '&laquo; 前へ',
    'next_text'           => '次へ &raquo;',
    'in_same_term'        => 'true',
  )  );
 ?>  
</nav>

<nav class="postNavi">
<?php 
  the_post_navigation( array(
    'prev_text'           => '<< %title',
    'next_text'           => '%title >>',
    'in_same_term'        => 'true',
  ) ); 
?>
</nav>
<!-- </nav> -->

<?php endwhile;
    else : ?>
      <h2>ページがありません</h2>
      <p>お探しのページは見つかりませんでした。</p>
    <?php endif; ?>
    

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>