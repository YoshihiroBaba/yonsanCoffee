<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <main>
  <?php
  $img = get_eyecatch_with_default();
  ?>
    <section class="p-sub-mv">
      <div class="p-sub-mv__bg--blog">
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
        </div>
      </div><!-- /.l-sub-mv__inner -->
    </section><!-- /.l-sub-mv -->
<?php
  get_template_part('includes/contents-allpost');
?>


    <!-- <section class="p-pagination">
      <div class="p-pagination__box--reversal">
        <p class="p-pagination__number--reversal">1</p>
      </div>
      <div class="p-pagination__box">
        <p class="p-pagination__number">2</p>
      </div>
      <div class="p-pagination__box">
        <p class="p-pagination__number">3</p>
      </div>
      <div class="p-pagination__box--border-none">
        <p class="p-pagination__number">…</p>
      </div>
      <div class="p-pagination__box">
        <p class="p-pagination__number">5</p>
      </div>
    </section> -->
    <!-- /.p-pagination -->
    <?php get_template_part('includes/cta'); ?>
  </main>
  <?php get_template_part('includes/footer'); ?>
  <!-- /.l-footer -->
  <?php get_footer(); ?>
</body>

</html>
