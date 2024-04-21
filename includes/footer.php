<?php
$menu_name = 'place_global';
$locations = get_nav_menu_locations();
$menu =  wp_get_nav_menu_object($locations[$menu_name]);
$menu_items = wp_get_nav_menu_items($menu->term_id);
?>
<footer class="l-footer">
    <div class="l-footer__inner">
        <nav class="l-footer__gnav">
            <?php foreach ($menu_items as $item) : ?>
                <a href="<?php echo esc_attr($item->url); ?>" class="l-footer__gnav__item"><?php echo esc_html($item->title); ?></a>
            <?php endforeach; ?>
        </nav><!-- /.l-footer-gnav -->
        <div class="l-footer__info">
            <div class="l-footer__info__logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/beensLogo.png" alt=""></div>
            <div class="l-footer__info__body">
                <div class="c-tel--footer">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/tel16.png" alt="" class="c-tel__logo" />
                    <p class="c-tel__number--white">0123-456-7890</p>
                </div>
                <p class="l-footer__info__time">WEEKDAYS 08:00〜20:00</p>
            </div>
        </div>
    </div><!-- /.l-footer__inner -->
    <div class="l-footer__copyright">
        <small class="l-footer__copyright__txt">© 2024 YonsanCoffee</small>
    </div>
</footer><!-- /.l-footer -->
