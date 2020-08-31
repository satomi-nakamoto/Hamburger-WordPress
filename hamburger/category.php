<?php
/*
Template Name: category
*/
?>

<?php get_header('head'); ?>

<body id="category" <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="l-category__wrap">

    <?php get_header('common'); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="category-container u-category__container">
          <div class="category-header p-category__header u-category__header">
            <h1>Menu:</h1>
            <p><?php the_title(); ?></p>
          </div>
          <div class="p-detailed u-detailed">
            <?php the_content(); ?>
          </div>
        </article>

        <nav class="l-category__nav p-category__nav u-category__nav">

        <div class="c-category__ul p-category__ul u-category__ul">

          <?php
            $args = array(
              'before'           => '',
              'after'            => '',
              'link_before'      => '',
              'link_after'       => '',
              'next_or_number'   => 'next',
              'separator'        => ' ',
              'nextpagelink'     => __('<span class="nextPage">次へ &raquo;</span>'),
              'previouspagelink' => __('<span class="prevPage">&laquo; 前へ</span>'),
              'pagelink'         => '%',
              'echo'             => 1
            );
            ?>
            <?php wp_link_pages($args); ?>
          
          </div>
          <div class="l-number__nav c-number__nav u-number__nav post-nav-links">

            <?php
            $args = array(
              'before'           => '',
              'after'            => '',
              'link_before'      => '',
              'link_after'       => '',
              'next_or_number'   => 'number',
              'separator'        => ' ',
              'nextpagelink'     => __('&raquo;'),
              'previouspagelink' => __('&laquo;'),
              'pagelink'         => '%',
              'echo'             => 1
            );
            ?>
            <?php wp_link_pages($args); ?>

          </div>
        </nav>

      <?php endwhile;
    else : ?>
      <h2>ページがありません</h2>
      <p>お探しのページは見つかりませんでした。</p>
    <?php endif; ?>

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>