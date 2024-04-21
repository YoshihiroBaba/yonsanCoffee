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
        <h2 class="p-sub-mv__ttl">ブログ</h2>
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
  get_template_part('includes/contents-cat');
?>

<div class="p-pagination">
<?php
the_posts_pagination(array(
  'mid_size' => 2,
  'end_size' => 1,
  'prev_text' => false,
  'next_text' => false,
  'show_all' => false,
));
?>
</div>
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
