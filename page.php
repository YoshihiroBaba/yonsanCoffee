<head>
  <html <?php language_attributes(); ?>>
  <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
  <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
  ?>
  <?php
  $img = get_eyecatch_with_default();
  ?>
      <main>
        <section class="p-sub-mv">
          <div class="p-sub-mv__bg--price" style="background-image: url('<?php echo $img[0]; ?>');">
            <h2 class="p-sub-mv__ttl"><?php the_title(); ?></h2>
          </div>
          <div class="p-sub-mv__breadcrumbs">
            <div class="p-sub-mv__breadcrumbs__inner">

            <div class="p-sub-mv__breadcrumbs__txt">
                  <?php
                  if (function_exists('bcn_display')):
                  bcn_display();
                  endif;
                  ?>

              <!-- <p class="p-sub-mv__breadcrumbs__txt">ホーム > 料金体系</p> -->
            </div>

          </div><!-- /.l-sub-mv__inner -->
        </section><!-- /.l-sub-mv -->
        <?php
        if(is_page('SUBSCRIPTION')):
        get_template_part('/includes/price-page');
        else:
          the_content();
        endif;
        ?>
      </main>
  <?php
    endwhile;
  endif;
  ?>
      <?php
        if(is_page('SUBSCRIPTION')):
          get_template_part('includes/cta');
        else:
        endif;
        ?>
  <?php get_template_part('includes/footer'); ?>
  <!-- /.l-footer -->
  <?php get_footer(); ?>
</body>

</html>
