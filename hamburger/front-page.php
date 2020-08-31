<?php
/*
Template Name: front-page
*/
?>

<?php get_header(); ?>


<article class="frontPage__article l-frontPage__article u-frontPage__article">
  
  <ul class="l-branchMenu p-branchMenu u-branchMenu">
    <li class="take-out l-takeOut p-takeOut">
      <a href="<?php echo get_permalink(245); ?>" class="l-branchLink">
        <h2>Take Out<br><span>__</span></h2>
        
        <dl class="detailed detail01">
          <dt class="title">小見出しが入ります</dt>
          <dd class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
        <dl class="detailed detail02">
          <dt class="title">小見出しが入ります</dt>
          <dd class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
      </a>
    </li>

    <li class="eat-in l-eatIn p-eatIn">
      <a href="<?php echo get_permalink(254); ?>" class="l-branchLink">
        <h2>Eat In<br><span>__</span></h2>
        
        <dl class="detailed detail01">
          <dt class="title">小見出しが入ります</dt>
          <dd class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
        <dl class="detailed detail02">
          <dt class="title">小見出しが入ります</dt>
          <dd class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </dl>
      </a>
    </li>
  </ul>
</article>

<section class="frontPage-section l-frontPage__section">
  <div class="l-access p-access u-access">
    <h2>見出しが入ります<br>_____</h2>
    <p>
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </p>
  </div>
</section>


<?php get_sidebar(); ?>

<?php get_footer(); ?>