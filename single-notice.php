<head>
  <html <?php language_attributes(); ?>>
<?php get_header(); ?>

</head>
<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
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
    <section class="l-notice-detail">
      <div class="l-notice-detail__inner">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
        <?php
        if (has_post_thumbnail()):
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, 'large');
        else:
          $img = array(get_template_directory_uri() . '/images/sample4@2x.png');
        endif;
        ?>
            <h3 class="l-notice-detail__ttl">
              <?php the_title(); ?>
            </h3>
            <time class="l-notice-detail__time" datetime="2020-01-01"><?php the_time('Y-m-d'); ?></time>
        <div class="my-post">
          <?php the_content(); ?>
        </div>

        <?php
          endwhile;
        endif;
        ?>

      </div>
      <!-- /.loblog-detail__inner -->
    </section>
    <!-- /.l-notice-detail -->

    <?php get_template_part('includes/cta'); ?>
  </main>
  <?php get_template_part('includes/footer'); ?>
  <!-- /.l-footer -->
  <?php get_footer(); ?>
</body>

</html>
