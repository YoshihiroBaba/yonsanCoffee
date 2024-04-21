<head>
  <html <?php language_attributes(); ?>>
  <?php get_header(); ?>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v18.0" nonce="T8loUi3J"></script>
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
            if (function_exists('bcn_display')) :
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
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
          ?>
              <p class="c-label--detail"><?php echo get_category_name(50); ?></p>
              <h3 class="l-blog-detail__main__ttl">
                <?php echo get_flexible_title(30); ?>
              </h3>
              <div class="l-blog-detail__main__labels">
                <!-- <p class="c-label--like">
                <img src="./images/like.png" />Lile！ 0
              </p>
              <p class="c-label--share">Share</p>
              <p class="c-label--tweet">
                <img src="./images/tweet.png" />ツイート
              </p> -->
              <?php
              $url_encode = urlencode(get_permalink());
              ?>
              <div class="fb-like" data-href="<?php $url_encode; ?>" data-width="50px" data-layout="button_count" data-action="" data-size="small" data-share="true"></div>
              <?php echo do_shortcode('[addtoany]'); ?>
              <time datetime="2020-01-01"><?php the_time('Y-m-d'); ?></time>
              </div>
              <?php $img = get_eyecatch_with_default_lg(); ?>
              <div class="l-blog-detail__main__img">
              <img src="<?php echo $img[0]; ?>" alt="">
              </div>
              <div class="my-post">
                <?php the_content(); ?>
              </div>
          <?php
            endwhile;
          endif;
          ?>
          <div class="l-blog-detail__main__recommend">
            <h3 class="l-blog-detail__main__recommend__ttl">
              おすすめの記事
            </h3>
            <?php
            $args = array(
              'post_type' => 'post',
              'tag' => 'pickup',
              'posts_per_page' => 3,
            );
            $recommend = new WP_Query($args);
            if ($recommend->have_posts()) :
              while ($recommend->have_posts()) :
                $recommend->the_post();
            ?>
                <article class="l-blog-detail__main__recommend__media">
                  <figure class="l-blog-detail__main__recommend__media-thumb">
                    <p class="c-media__badge--la">
                      <span class="c-media__badge-txt"><?php echo get_category_name(); ?></span>
                    </p>
                    <div class="l-blog-detail__main__recommend__media__img"><?php the_post_thumbnail('recommend'); ?></div>
                  </figure>
                  <figcaption class="l-blog-detail__main__recommend__media-body">
                    <time datetime="0000-00-00"><?php the_time('Y-m-d'); ?></time>
                    <a href="<?php the_permalink(); ?>" class="l-blog-detail__main__recommend__media-txt"><?php echo get_flexible_title(40); ?></a>
                  </figcaption>
                </article>
                <!-- /.l-blog-detail__main__recommend__media -->
            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>

          </div>
          <!-- /.l-blog-detail__main__recommend -->
        </div>
        <!-- /.l-blog-detail__main -->
        <aside class="l-blog-detail__sidebar">
          <p class="c-label--sidebar">関連記事</p>
          <?php
          $current_category = get_the_category();
          $current_category_id = $current_category[0]->cat_ID;
          $args = array(
            'cat' => $current_category_id,
            'post__not_in' => array(get_the_ID()),
            'posts_per_page' => 3,
          );
          $related_posts = new WP_Query($args);
          if ($related_posts->have_posts()) :
            while ($related_posts->have_posts()) :
              $related_posts->the_post();
          ?>
              <div class="l-blog-detail__sidebar__media">
                <?php $img = get_eyecatch_with_default_sm(); ?>
                <img class="l-blog-detail__sidebar__media__img" src="<?php echo $img[0]; ?>" alt="">
                <a href="<?php the_permalink(); ?>" class="l-blog-detail__sidebar__media__txt"><?php echo get_flexible_title(40) ?></a>
              </div>
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>

          <p class="c-label--sidebar">カテゴリー</p>
          <?php
          $categories = get_categories();
          foreach ($categories as $category) {
            echo '<a href="' . get_category_link($category->term_id) . '" class="l-blog-detail__sidebar__category">' . '・' . $category->name . '</a>';
          }
          ?>

        </aside>
        <!-- /.l-blog-detail__sidebar -->
      </div>
      <!-- /.loblog-detail__inner -->
    </section>
    <!-- /.l-blog-detail -->

    <?php get_template_part('/includes/cta'); ?>
  </main>
  <?php get_template_part('/includes/footer'); ?>
  <!-- /.l-footer -->
  <?php get_footer(); ?>
  <div id="fb-root"></div>

</body>

</html>
