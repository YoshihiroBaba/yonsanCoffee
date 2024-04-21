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

      <main>
        <section class="p-sub-mv">
          <div class="p-sub-mv__bg--detail">
        </div>
          <div class="p-sub-mv__breadcrumbs">
            <div class="p-sub-mv__breadcrumbs__inner">
              <div class="p-sub-mv__breadcrumbs__txt">
                <?php
                if (function_exists('bcn_display')) :
                  bcn_display();
                endif;
                ?>

                <!-- <p class="p-sub-mv__breadcrumbs__txt">ホーム > 料金体系</p> -->
              </div>
            </div>
          </div><!-- /.l-sub-mv__inner -->
        </section><!-- /.l-sub-mv -->
        <section class="l-contact-completely">
          <p class="l-contact-completely__txt">お問い合わせいただきありがとうございます<br>内容を確認した後、担当者よりご連絡いたします</p>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="l-contact-completely__to-home">ホームへ戻る</a>
        </section>
        <!-- /.l-contact-completely -->
        <?php
        if (is_page('コース・料金')) :
          get_template_part('/includes/price-page');
        else :
          the_content();
        endif;
        ?>
      </main>
  <?php
    endwhile;
  endif;
  ?>
  <?php
  if (is_page('コース・料金')) :
    get_template_part('includes/cta');
  else :
  endif;
  ?>
  <?php get_template_part('includes/footer'); ?>
  <!-- /.l-footer -->
  <?php get_footer(); ?>
</body>

</html>
