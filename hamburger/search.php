<?php
global $wp_query;
$total_results = $wp_query->found_posts;
$search_query = get_search_query();
?>

<?php get_header('head'); ?>


<body id="search" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="l-category-search__wrap">

        <?php get_header('common'); ?>

        <article class="serach-container u-search__container">

            <div class="search-header p-search__header u-search__header">
                <h1>Search:</h1>
                <p><?php the_title(); ?></p>
            </div>
            <div class="p-detailed u-detailed">
                <p><span><?php echo $search_query; ?>の検索結果（<?php echo $total_results; ?>件）</span></p>
                <?php if (have_posts()) : ?>
                    <ul class="mainArea-list u-mainArea-list">
                        <?php while (have_posts()) : the_post() ?>
                            <li>
                                <div class="imgArea">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('post-thumbnails', array('width' => 'auto', 'alt' => the_title_attribute('echo=0'))); ?>
                                    </a>
                                </div>
                                <div class="textArea">
                                    <span class="m-category">
                                        <?php $arr = get_the_tags();
                                        foreach ((array)$arr as $tag) {
                                            echo $tag->name;
                                        } ?>
                                    </span>
                                    <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="lead"><?php echo get_the_excerpt(); ?></p>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php else : ?>
                    <div class="post">
                        <p>申し訳ございません。<br>該当する記事がございません。</p>
                    </div>
                <?php endif; ?>

                <?php
                if ($wp_query->max_num_pages > 1) : ?>

                    <div class="navigation">
                        <div class="leftNav"><?php previous_posts_link('&laquo; 前へ'); ?></div>
                        <div class="rightNav"><?php next_posts_link('次へ &raquo;') ?></div>

                        <div class="wp-pageNavi">

                            <?php wp_pagenavi(); ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </article>

        <?php get_sidebar(); ?>

        <?php get_footer(); ?>