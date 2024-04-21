<section class="l-blog">
      <h2 class="l-blog__ttl"><?php
        if(is_page('ブログ')):
          echo '新着';
        else:
          echo get_category_name();
        endif;
        ?>一覧</h2>
      <div class="l-blog__inner">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
            <?php
            $img = get_eyecatch_with_default_sm();
            ?>
            <article class="l-blog__media">
              <figure class="l-blog__media__thumb">
                <p class="c-media__badge--la"><span class="c-media__badge-txt"><?php echo get_category_name();  ?></span></p><img src="<?php echo $img[0]; ?>" alt="" class="l-blog__media__img">
              </figure>
              <figcaption class="l-blog__media__body">
                <time datetime="2020-12-01"><?php the_time('Y-m-d'); ?></time>
                <a class="l-blog__media__ttl" href="<?php the_permalink(); ?>"><?php echo get_flexible_title(30); ?></a>
                <p href="" class="l-blog__media__txt"><?php echo get_the_excerpt(); ?></p>
              </figcaption>
            </article><!-- /.l-blog__media -->
            <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div><!-- /.l-blog__inner -->
    </section><!-- /.l-blog -->
