<?php

//テーマサポート
    
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); 
    add_theme_support( 'automatic-feed-links' );

    
 //カスタムナビメニュー

 function sample_setup_theme() {
  register_nav_menu( 'side-nav', 'サイドナビゲーション' );
  }
  
  add_action( 'after_setup_theme', 'sample_setup_theme' );

/*//add action
<?php add_action( $hook, $function_to_add ); ?>
$hook
（文字列） （必須） $function_to_add がフックされるアクション名。
初期値： なし
$function_to_add
（コールバック） （必須） フックする関数名。
初期値： なし
*/

 //タイトル出力   

 function title( $title ) {
  if ( is_front_page() && is_home() ) { //トップページなら
      $title = get_bloginfo( 'name' );
  } elseif ( !is_front_page() && is_home() ) { //トップページ以外なら
      $title = single_post_title( '/' );
  } 
  return $title;
}
add_filter( 'pre_get_document_title', 'title' );

/*//add_filter
<?php add_filter( $tag, $function_to_add ); ?>
$tag
（文字列） （必須） $function_to_add 引数で指定した関数を登録するフィルターフックの名前。フィルターフックの一覧はここにあります。
初期値： なし
$function_to_add
（コールバック） （必須） フィルターが適用されたときに呼び出される関数の名前。
初期値： なし
*/




function hamburger_script() {
  wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300;400;700&family=Roboto:wght@400;700&display=swap', array() ); 
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/hamburger.css', array(), '1.0.0' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
  wp_enqueue_script( 'javascript', get_template_directory_uri() . '/js/javascript.js', array(), '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'hamburger_script' );

//   //スタイルシートの読み込み
//   wp_enqueue_style( $handle, $src, $deps, $ver, $media);
 
//   //JavaScript の読み込み
//   wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
// }
// //アクションフック（wp_enqueue_scripts）への登録
// add_action('wp_enqueue_scripts', 'add_my_files');
// remove_filter( ‘the_content’, ‘wpautop’ );


//wp_body_open()

if ( ! function_exists( 'wp_body_open' ) ) {
  function wp_body_open() {
      do_action( 'wp_body_open' );
  }
}



//カスタムヘッダーを有効にする

$args = array(
  'width' => 940,
  // 'flex-height' => true,
  'height' => 250,
  'header-text' => false, //imgはfalse,背景画像はtrue
  'default-text-color' => 'ffffff',
  'default-image' => get_template_directory_uri() . '/img/hero.png, /img/heroBig.png', 
  // 'wp-head-callback' => 'header_style',
  // 'admin-preview-callback' => 'admin_header_image',
);
add_theme_support( 'custom-header', $args );
add_image_size( 'header-image', 940, 250, true );


//カスタム背景

$args = array(
  'default-color'          => '#fffdfa',
	// 'default-image'          => '',
	// 'wp-head-callback'       => '_custom_background_cb',
	// 'admin-head-callback'    => '',
	// 'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $args );


/*==============================
固定ページカテゴリ追加用コード
==============================*/
 
add_action('init','add_categories_for_pages'); 
function add_categories_for_pages(){ 
   register_taxonomy_for_object_type('category', 'page'); 
} 
add_action( 'pre_get_posts', 'nobita_merge_page_categories_at_category_category' ); 
function nobita_merge_page_categories_at_category_category( $query ) { 
 
if ( $query->is_category== true && $query->is_main_query() ) { 
$query->set('post_type', array( 'post', 'page', 'nav_menu_item')); 
} 
} 

//現在のページ番号と総ページ番号を表示するコード

function show_page_number() {  
  global $wp_query;  

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;  
  $max_page = $wp_query->max_num_pages;  

  echo $paged.' / '.$max_page;  
} 

//投稿ページのみ検索されるように設定

function my_posy_search($search) {
  if(is_search()) {
  $search .= " AND post_type = 'post'";
  }
  return $search;
  }
  add_filter('posts_search', 'my_posy_search');
  

//何も記入せずに検索をすると、TOPページにリダイレクトされる設定

function empty_search_redirect( $wp_query ) {
  if ( $wp_query->is_main_query() && $wp_query->is_search && ! $wp_query->is_admin ) {
  $s = $wp_query->get( 's' );
  $s = trim( $s );
  if ( empty( $s ) ) {
  wp_safe_redirect( home_url('/') );
  exit;
  }
  }
  }
  add_action( 'parse_query', 'empty_search_redirect' );

  //コンテンツ幅の指定

  if ( ! isset( $content_width ) ) {
    $content_width = 960;
}

/**
 * Registers an editor stylesheet for the theme.
 */

function wpdocs_theme_add_editor_styles() {
  add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );


//


