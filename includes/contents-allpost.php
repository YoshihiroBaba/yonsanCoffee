<section class="l-blog">
  <h2 class="l-blog__ttl">新着一覧</h2>
  <div class="l-blog__inner">

    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
      'post_type' => 'post',
      'paged' => $paged,
      // 'posts_per_page' => 3
    );
    $posts = new WP_Query($args);
    ?>
    <?php if ($posts->have_posts()): while($posts->have_posts()): $posts->the_post(); ?>
        <?php
        $img = get_eyecatch_with_default_sm();
        ?>
        <article class="l-blog__media">
          <figure class="l-blog__media__thumb">
            <p class="c-media__badge--la"><span class="c-media__badge-txt"><?php echo get_category_name();  ?></span></p><img src="<?php echo $img[0]; ?>" alt="" class="l-blog__media__img">
          </figure>
          <figcaption class="l-blog__media__body">
            <time datetime="2020-12-01"><?php the_time('Y-m-d'); ?></time>
            <a class="l-blog__media__ttl" href="<?php the_permalink(); ?>"><?php echo get_flexible_title( 30 ); ?></a>
            <p href="" class="l-blog__media__txt"><?php echo get_flexible_excerpt( 50 ); ?></p>
          </figcaption>
        </article><!-- /.l-blog__media -->

      <?php
      endwhile;
      ?>
  </div><!-- /.l-blog__inner -->
</section><!-- /.l-blog -->
<div class="p-pagination">
<?php
echo paginate_links(array(
  'total' => $posts->max_num_pages,
  'current' => $paged,
  'mid_size' => 2,
  // 'prev_text' => '&laquo; Previous',
  // 'next_text' => 'Next &raquo;',
));
?>
</div>
<?php endif ?>

