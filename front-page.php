<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('./includes/header'); ?>
  <main>
    <section class="l-fv">
      <div class="l-fv--1"></div>
      <div class="l-fv--2"></div>
      <div class="l-fv--3"></div>

        <h2 class="l-fv__main-copy">Your coffee journey begins here!!</h2>
        <p class="l-fv__sub-copy">コーヒーの旅が<br>ここから始まります</p>
        <!-- <a href="<?php echo esc_url(home_url('/home/contact')); ?>" type="button" class="c-btn__doc-request c-btn__doc-request--fv">資料請求</a>
        <a href="<?php echo esc_url(home_url('/home/contact')); ?>" class="l-fv__contact">お問い合わせ</a> -->
    </section><!-- /.l-fv -->
    <section class="l-fv-content">
      <div class="l-fv-content__inner">
        <h3 class="l-fv-content__ttl">至福の一杯を、<br>あなたのもとへ</h3>
        <div class="l-fv-content__txt">
          <p>新鮮な風味<br>濃厚な体験</p>
          <p>世界中から<br>厳選した豆を</p>
          <p>特別な時間を彩る<br>心地よい一杯を</p>
        </div>
        <article class="l-fv-content__box">
          <div class="l-fv-content__box__border">
            <h3 class="l-fv-content__box__ttl">YONSAN COFFEEは<br><span class="u-underLine">スペシャリティコーヒー</span>の<br>焙煎専門店です</h3>
            <p class="l-fv-content__box__txt">カフェ店舗を持たず、現在オンラインでの販売がメインとなっています。世界中から厳選された最高品質の豆を使用し、熟練した焙煎士が最高の味わいを引き出します。</p>
          </div>
        </article>
      </div><!-- /.l-fv__inner -->
    </section><!-- /.fv-content -->
    <section class="l-features">
      <h2 class="l-features__ttl">FEATURES</h2>
      <div class="l-features__inner">
        <article class="l-features__media u--reverse">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/feature01.jpeg" class="l-features__media__thumb" alt="">
          <div class="l-features__media__body">
            <p class="l-features__media__label"></p>
            <h3 class="l-features__media__ttl u-dis--none-min-ms">10ヵ国30種類の<br>コーヒー豆から選ぶ</h3>
            <p class="l-features__media__txt u--mg-right">Choose from 30 types of coffee beans from 10 countries.</p>
          </div>
        </article>
        <article class="l-features__media">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/feature02.jpeg" class="l-features__media__thumb" alt="">
          <div class="l-features__media__body">
            <p class="l-features__media__label"></p>
            <h3 class="l-features__media__ttl u-dis--none-min-ms">ご注文ごとに<br>生豆から焙煎</h3>
            <p class="l-features__media__txt u--mg-right">Roast from raw beans for each order.</p>
          </div>
        </article>
        <article class="l-features__media u--reverse">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/feature03.jpeg" class="l-features__media__thumb" alt="">
          <div class="l-features__media__body">
            <div class="l-features__media__label"></div>
            <h3 class="l-features__media__ttl u-dis--none-min-ms">焙煎したての新鮮な<br>コーヒー豆をお届け</h3>
            <p class="l-features__media__txt u--mg-right">We will deliver fresh coffee beans just after roasting.</p>
          </div>
        </article>
        <div class="l-features__to-price">
          <h4 class="l-features__to-price__copy">サブスクをはじめました</h4>
          <a href="<?php echo esc_url(home_url('/home/price/')); ?>" class="c-btn__to-price">詳しくはこちら</a>
        </div>
        <!-- /.l-featers__to-plan -->
      </div><!-- /.l-features__inner -->
    </section><!-- /.l-features -->
    <section class="l-success-case">
      <h2 class="l-success-case__ttl">BEENS</h2>
      <div class="l-success-case__inner">
        <div class="l-success-case__wrapper">
          <?php
          $args = array(
            'post_type' => 'case',
            'post_per_page' => 9
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
              $the_query->the_post();
          ?>
              <div class="l-success-case__card">
                <h4 class="l-success-case__card__ttl"><?php the_field('comment'); ?></h4>
                <figure class="l-success-case__card__img">
                  <div class="l-success-case__card__model"><?php if(has_post_thumbnail()): the_post_thumbnail('item'); endif;?></div>
                </figure>
                <div class="l-success-case__card__body">
                  <p class="l-success-case__card__status"><?php the_field('status'); ?></p>
                  <p class="l-success-case__card__name"><?php the_field('name'); ?></p>
                </div>
                <p class="l-success-case__card__txt"><?php the_field('summary'); ?></p>
              </div>
          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>

        </div><!-- /.l-success-case__wrapper -->
      </div><!-- /.l-success-case__inner -->
    </section><!-- /.l-success-case -->
    <section class="l-flow">
      <h2 class="l-flow__ttl">HOW TO</h2>
      <div class="l-flow__inner">
        <dl class="l-flow__box">
          <p class="l-flow__box__number">01</p>
          <div class="l-flow__box__boader"></div>
          <dt class="l-flow__box__ttl">グラム数/袋</dt>
          <dd class="l-flow__box__txt">100g単位で小分け袋にお詰めします。</dd>
        </dl>
        <dl class="l-flow__box">
          <p class="l-flow__box__number">02</p>
          <div class="l-flow__box__boader"></div>
          <dt class="l-flow__box__ttl">焙煎度合い</dt>
          <dd class="l-flow__box__txt">お好みにより焙煎の深さも選べます。</dd>
        </dl>
        <dl class="l-flow__box">
          <p class="l-flow__box__number">03</p>
          <div class="l-flow__box__boader"></div>
          <dt class="l-flow__box__ttl">粉の粗さ</dt>
          <dd class="l-flow__box__txt">お使いになる抽出方法などにより粉の粗さを<br>お選びいただけます。</dd>
        </dl>
        <dl class="l-flow__box">
          <p class="l-flow__box__number">04</p>
          <div class="l-flow__box__boader"></div>
          <dt class="l-flow__box__ttl">個数</dt>
          <dd class="l-flow__box__txt">ご希望の個数をお選びください。</dd>
        </dl>
        <dl class="l-flow__box">
          <p class="l-flow__box__number">05</p>
          <div class="l-flow__box__boader"></div>
          <dt class="l-flow__box__ttl">カートに入れる</dt>
          <dd class="l-flow__box__txt">CARTボタンをクリックしていただくとカートが表示されます。</dd>
        </dl>
      </div><!-- /.l-flow__box -->
    </section><!-- /.l-flow -->
    <section class="l-faq">
      <h2 class="l-faq__ttl">FAQ</h2>
      <div class="l-faq__inner">
        <dl class="l-faq__content">
          <dt class="l-faq__content__ttl"><button class="l-faq__content__btn">豆の保存について教えて下さい。<span class="c-close c-open"></span></button></dt>
          <dd class="l-faq__content__body --open">
            <p class="l-faq__content__txt">お買い上げいただいたコーヒー豆は密閉できる袋・容器に入れて、冷凍庫での保存をおすすめしています。</p>
          </dd>
        </dl>
        <dl class="l-faq__content">
          <dt class="l-faq__content__ttl"><button class="l-faq__content__btn">メッセージカードを付けたいのですが。<span class="c-close"></span></button></dt>
          <dd class="l-faq__content__body">
            <p class="l-faq__content__txt">ギフトにメッセージを添えてお送りしたい場合は、無料にて メッセージカードをお付けいたします。</p>
          </dd>
        </dl>
        <dl class="l-faq__content">
          <dt class="l-faq__content__ttl"><button class="l-faq__content__btn">ネット通販は安全ですか？<span class="c-close"></span></button></dt>
          <dd class="l-faq__content__body">
            <p p class="l-faq__content__txt">お客様の情報は完全な暗号化が図られておりますので安心してショッピングをお楽しみ下さい。</p>
          </dd>
        </dl>
        <dl class="l-faq__content">
          <dt class="l-faq__content__ttl"><button class="l-faq__content__btn">海外発送はできますか？<span class="c-close"></span></button></dt>
          <dd class="l-faq__content__body">
            <p class="l-faq__content__txt">申し訳ございませんが、海外への発送はしておりません。</p>
          </dd>
        </dl>
      </div><!-- /.l-question__inner -->
    </section><!-- /.question -->
    <section class="l-blog-info">
      <div class="l-blog-info__inner">
        <div class="l-blog-info__blog">
          <h2 class="l-blog-info__blog__ttl">BLOG</h2>
          <?php
          query_posts('posts_per_page=3');
          if (have_posts()) : while (have_posts()) : the_post(); ?>

              <article class="l-blog-info__blog__media">
                <figure class="l-blog-info__blog__media-thumb">
                  <p class="c-media__badge"><span class="c-media__badge-txt"><?php echo get_category_name();  ?></span></p>
                  <div class="l-blog-info__blog__media__img"><?php if(has_post_thumbnail()): the_post_thumbnail('front'); else: ?><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/dummy-front.png"><?php endif; ?></div>
                </figure>
                <figcaption class="l-blog-info__blog__media-body">
                  <a href="<?php the_permalink(); ?>" class="l-blog-info__blog__media-txt"><?php echo get_flexible_title(40); ?></a>
                  <time datetime="2020-12-27"><?php the_time('Y-m-d'); ?></time>
                </figcaption>
              </article><!-- /.l-blog-info__blog__media -->
          <?php endwhile;
          endif;
          ?>

        </div><!-- /.l-blog-info__blog -->
        <div class="l-blog-info__info">
          <h2 class="l-blog-info__info__ttl">INFO</h2>
          <?php
          $args = array(
            'post_type' => 'notice',
            'posts_per_page' => 3,
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
              $the_query->the_post();
          ?>
              <article class="l-blog-info__info__media">
                <time datetime="2020-12-01"><?php the_time('Y-m-d'); ?></time>
                <a href="<?php the_permalink(); ?>" class="l-blog-info__info__media-txt"><?php echo get_flexible_title(50); ?></a>
              </article>
          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div><!-- /.l-blog-info__info -->
      </div><!-- /.l-blog-info__inner -->
    </section><!-- /.blog-info -->
    <?php get_template_part('./includes/cta'); ?>
  </main>
  <?php get_template_part('./includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>
