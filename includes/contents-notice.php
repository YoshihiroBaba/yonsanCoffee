<section class="l-notice">
    <h2 class="l-notice__ttl">お知らせ一覧</h2>
    <div class="l-notice__inner">
        <ul>
            <?php
            $args = array(
                'paged' => $paged,
                'post_type' => 'notice',
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="l-notice__item"><time class="l-notice__item__date"><?php the_time('Y-m-d'); ?></time><a href="<?php the_permalink(); ?>" class="l-notice__item__txt"><?php echo get_flexible_title(45); ?></a></li>
            <?php
                endwhile;
            endif;
            ?>
        </ul>
    </div><!-- /.l-blog__inner -->
</section><!-- /.l-blog -->
