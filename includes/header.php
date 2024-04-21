<?php wp_body_open(); ?>

<header class="l-header">
<div id="burger-open--bg"></div>
    <div class="l-header__inner">
        <div class="l-header__left">
            <h1 class="l-header__logo">
                <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/beensLogo.png" alt="" class="l-header__logo__img" /></a>
            </h1>
            <?php
            $menu_name = 'place_global';
            $locations = get_nav_menu_locations();
            $menu =  wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            ?>
            <nav class="l-header__gnav">
                <?php foreach ($menu_items as $item) : ?>
                    <a href="<?php echo esc_attr($item->url); ?>" class="l-header__gnav__item"><?php echo esc_html($item->title); ?></a>
                    <?php endforeach; ?>
                </nav><!-- /.c-gnav -->
            </div><!-- /.l-header__left -->
            <div class="l-header__burger" id="js-header__burger" aria-hidden="true">
                <nav class="l-header__gnav--burger">
                    <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/beensLogo.png" alt="" class="l-header__logo__img--burger" /></a>
                    <?php foreach ($menu_items as $item) : ?>
                        <a href="<?php echo esc_attr($item->url); ?>" class="l-header__gnav__item"><?php echo esc_html($item->title); ?></a>
                        <?php endforeach; ?>
                    </nav><!-- /.c-gnav -->
                    <div class="l-header__right--burger">
                        <a href="<?php echo esc_url(home_url('/home/contact')); ?>" type="button" class="c-btn__doc-request c-btn__doc-request--header">CART</a>
                        <a href="<?php echo esc_url(home_url('/home/contact')); ?>" type="button" class="c-btn__contact">CONTACT</a>
                        <div class="l-header__info">
                            <p class="l-header__info__time">WEEKDAYS 08:00〜20:00</p>
                            <div class="c-tel">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/tel29.png" alt="" class="c-tel__logo" />
                                <p class="c-tel__number">0123-456-7890</p>
                            </div>
                        </div><!-- /.l-header__info -->
                    </div> <!-- /.l-header__right -->
                </div> <!-- /.l-header__burger -->
                <div class="l-header__right">
                    <div class="l-header__info">
                        <p class="l-header__info__time">WEEKDAYS 08:00〜20:00</p>
                        <div class="c-tel">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/tel29.png" alt="" class="c-tel__logo" />
                            <p class="c-tel__number">0123-456-7890</p>
                        </div>
                    </div><!-- /.l-header__info -->
                    <a href="<?php echo esc_url(home_url('/home/contact')); ?>" type="button" class="c-btn__doc-request c-btn__doc-request--header">CART</a>
                    <a href="<?php echo esc_url(home_url('/home/contact')); ?>" type="button" class="c-btn__contact">CONTACT</a>
                </div> <!-- /.l-header__right -->
                <button class="c-burger-icon" id="c-burger-icon" aria-expanded="false" aria-controls="js-header__burger" aria-label="メニューを開閉する">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <!-- /.l-header__inner -->

        </header>
