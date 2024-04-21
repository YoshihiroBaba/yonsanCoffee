<?php
function my_enqueue_scripts()
{
    $uri = esc_url(get_template_directory_uri());
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.3.min.js', array(), '3.6.3');
    wp_enqueue_script('main_js', $uri . '/dist/js/main.js', array());
    wp_enqueue_style('my_styles', $uri . '/style.css', []);
    wp_enqueue_style('main-stylesheet', get_template_directory_uri() . '/dist/main.css', array(), '1.0', 'all');
    wp_enqueue_style('post-style', get_theme_file_uri('my-post.css'), array(),wp_get_theme()->get("Version"));
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

add_action('init', function () {
    add_theme_support('post-thumbnails');
    //ブログ詳細ページ用さい
    add_image_size('large', 590, 370, true);
    add_image_size('small', 240, 148, true);
    add_image_size('front', 150, 110, true);
    add_image_size('recommend', 210, 128, true);
    add_image_size('dummy', 100, 70, true);
    add_image_size('item', 280, 171, true);

    //ヘッダー、フッターのカスタムメニュー化
    register_nav_menus(array(
        'place_global' => 'グローバル',
        // 'place_footer' => 'フッターナビ',
    ));
});

// アイキャッチ画像がなければ、標準画像を取得する
function get_eyecatch_with_default()
{
    if (has_post_thumbnail()) :
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, 'large');
    else :
        $img = array(get_template_directory_uri() . '/dist/images/volodymyr-proskurovskyi.jpg');
    endif;

    return $img;
}
function get_eyecatch_with_default_lg()
{
    if (has_post_thumbnail()) :
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, 'large');
    else :
        $img = array(get_template_directory_uri() . '/dist/images/dummy-590X370.png');
    endif;

    return $img;
}
function get_eyecatch_with_default_sm()
{
    if (has_post_thumbnail()) :
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, 'small');
    else :
        $img = array(get_template_directory_uri() . '/dist/images/dummy.png');
    endif;

    return $img;
}

add_action('init', function () {
    // register_post_type('blog', [
    //     'label' => 'ブログ',
    //     'public' => true,
    //     'supports' => ['thumbnail', 'title', 'editor', 'page-attributes', 'custom-fields'],
    //     'has_archive' => true,
    //     'hierarchical' => true,
    //     'show_in_rest' => true,
    // ]);
    // register_taxonomy('blog_category', 'blog', [
    //     'label' => 'カテゴリー',
    //     'hierarchical' => 'false',
    //     'show_in_rest' => true,
    // ]);
    register_post_type('case', [
        'label' => '商品',
        'public' => true,
        'supports' => ['thumbnail', 'title', 'editor', 'custom-fields'],
        'has_archive' => false,
        'show_in_rest' => true,
    ]);
});



//カテゴリー名取得
function get_category_name()
{
    //カスタム分類の場合
    // $cats = get_the_terms(get_the_ID(), 'blog_category');
    // if ($cats) {
    //     $cat_name = $cats[0]->name;
    //     return $cat_name;
    // }
    $cats = get_the_category();
    $cats = $cats[0];
    return $cats->name;
}

//ブロックエディターに追加のスタイルを設定する
function post_styles(){
    global $post_type;
    if('notice'===$post_type || 'post' === $post_type){
        wp_enqueue_style('post-style', get_theme_file_uri('my-post.css'), array(),wp_get_theme()->get("Version"));
    }
}
add_action('enqueue_block_editor_assets','post_styles');


// パンくずリストの中間に追加
function bcn_add($bcnObj){
    if (is_singular('post')&&!is_post_type_archive()){
        $bcnObj->add(new bcn_breadcrumb('BLOG', null,
        array('page-allpost'), home_url('/allpost'),null,true));
        $trail_tmp = clone $bcnObj->trail[1];
        $bcnObj->trail[1] = clone $bcnObj->trail[2];
        $bcnObj->trail[2] = $trail_tmp;
    }
    return $bcnObj;
}
add_action('bcn_after_fill','bcn_add');

//特定の記事を抽出する関数
function get_specific_posts($post_type, $taxonomy = null, $term = null, $tag_slug = null,  $number = -1 ){
    $args = array(
        'post_type' => $post_type,
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'field' => 'slug',
                'terms' => $term,
            ),
        ),
        'tag' => $tag_slug,
        'posts_per_page' => $number,
    );
    $specific_posts = new WP_Query($args);
    return $specific_posts;
}

//抜粋の文字数を制限する
function cms_excerpt_more(){
    return '...';
}
add_filter('excerpt_more', 'cms_excerpt_more');

function cms_excerpt_length(){
    return 30;
}
add_filter('excerpt_mblength', 'cms_excerpt_length');


function get_flexible_excerpt($number){
    $value = get_the_excerpt();
    $value = wp_trim_words($value, $number,'…');
    return $value;
}

//タイトルの文字数を制限する
function get_flexible_title($number){
    $value = get_the_title();
    $value = wp_trim_words($value, $number,'…');
    return $value;
}

