<?php
/*
Template Name: サイドバーなし
Template Post type: post
*/
?>

<head>
<html <?php language_attributes(); ?>>
  <?php get_header(); ?>
</head>
  <body>
    <?php get_template_part('/includes/header'); ?>
    <main>
      <section class="p-sub-mv">
        <div class="p-sub-mv__bg--detail"></div>
        <div class="p-sub-mv__breadcrumbs">
          <div class="p-sub-mv__breadcrumbs__inner">
          <div class="p-sub-mv__breadcrumbs__txt">
                  <?php
                  if (function_exists('bcn_display')):
                  bcn_display();
                  endif;
                  ?>
          </div>
        </div>
        <!-- /.l-sub-mv__inner -->
      </section>
      <!-- /.l-sub-mv -->
      <section class="l-blog-detail">
        <div class="l-blog-detail__inner">
          <div class="l-blog-detail__main">
            <p class="c-label--detail">カテゴリ１</p>
            <h3 class="l-blog-detail__main__ttl">
              ブログタイトルテキストテキストテキストテキスト
            </h3>
            <div class="l-blog-detail__main__labels">
              <p class="c-label--like">
                <img src="./images/like.png" />Lile！ 0
              </p>
              <p class="c-label--share">Share</p>
              <p class="c-label--tweet">
                <img src="./images/tweet.png" />ツイート
              </p>
              <time datetime="2020-01-01">2020-01-01</time>
            </div>
            <div class="l-blog-detail__main__img">
              <?php the_post_thumbnail('large'); ?>
            </div>
            <article class="l-blog-detail__main__sub-h2">
              <h2>見出しh2</h2>
              <p>
                親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。
              </p>
            </article>
            <article class="l-blog-detail__main__sub-h3">
              <h3 class="c-ttl__v-border">見出しh3</h3>
              <p>
                本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
            </article>
            <div class="l-blog-detail__main__box">
              <p class="l-blog-detail__main__box__quotation">“</p>
              <p class="l-blog-detail__main__box__txt">
                引用文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
            </div>
            <div class="l-blog-detail__main__img">
              <?php the_post_thumbnail('large'); ?>
            </div>
            <div class="l-blog-detail__main__list">
              <p>リストリストリストリストリスト</p>
              <p>リストリストリストリストリストリストリストリストリスト</p>
              <p>リストリストリストリストリストリストリストリストリストリストリストリストリストリスト</p>
            </div>
            <a href="" class="l-blog-detail__main__txtlink"
              >テキストリンクテキストリンク</a
            >
            <div class="l-blog-detail__main__recommend">
              <h3 class="l-blog-detail__main__recommend__ttl">
                おすすめの記事
              </h3>
              <article class="l-blog-detail__main__recommend__media">
                <figure class="l-blog-detail__main__recommend__media-thumb">
                  <p class="c-media__badge--la">
                    <span class="c-media__badge-txt">カテゴリ1</span>
                  </p>
                  <img
                    src="./images/sample01.png"
                    alt=""
                    class="l-blog-detail__main__recommend__media__img"
                  />
                </figure>
                <figcaption class="l-blog-detail__main__recommend__media-body">
                  <time datetime="0000-00-00">0000-00-00</time>
                  <a href="" class="l-blog-detail__main__recommend__media-txt"
                    >ブログタイトルテキストテキストテキストテキスト</a
                  >
                </figcaption>
              </article>
              <!-- /.l-blog-detail__main__recommend__media -->
              <article class="l-blog-detail__main__recommend__media">
                <figure class="l-blog-detail__main__recommend__media-thumb">
                  <p class="c-media__badge--la">
                    <span class="c-media__badge-txt">カテゴリ3</span>
                  </p>
                  <img
                    src="./images/sample02.png"
                    alt=""
                    class="l-blog-detail__main__recommend__media__img"
                  />
                </figure>
                <figcaption class="l-blog-detail__main__recommend__media-body">
                  <time datetime="0000-00-00">0000-00-00</time>
                  <a href="" class="l-blog-detail__main__recommend__media-txt"
                    >ブログタイトルテキストテキストテキストテキストテキストテキストテキスト</a
                  >
                </figcaption>
              </article>
              <!-- /.l-blog-detail__main__recommend__media -->
              <article class="l-blog-detail__main__recommend__media">
                <figure class="l-blog-detail__main__recommend__media-thumb">
                  <p class="c-media__badge--la">
                    <span class="c-media__badge-txt">カテゴリ2</span>
                  </p>
                  <img
                    src="./images/sample03.png"
                    alt=""
                    class="l-blog-detail__main__recommend__media__img"
                  />
                </figure>
                <figcaption class="l-blog-detail__main__recommend__media-body">
                  <time datetime="0000-00-00">0000-00-00</time>
                  <a href="" class="l-blog-detail__main__recommend__media-txt"
                    >ブログタイトルテキストテキストテキストテキスト</a
                  >
                </figcaption>
              </article>
              <!-- /.l-blog-detail__main__recommend__media -->
            </div>
            <!-- /.l-blog-detail__main__recommend -->
          </div>
          <!-- /.l-blog-detail__main -->

        </div>
        <!-- /.loblog-detail__inner -->
      </section>
      <!-- /.l-blog-detail -->

<?php get_template_part('/includes/cta'); ?>
    </main>
   <?php get_template_part('/includes/footer'); ?>
    <!-- /.l-footer -->
    <?php get_footer(); ?>
  </body>
</html>
