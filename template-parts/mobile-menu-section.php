<?php use App\Helpers; ?>

<div class="mobile-menu-section">
    <div class="mobile-menu-section__inner">
        <div class="top-section">
            <a href="<?php echo esc_url(home_url()); ?>" class="mobile-menu-section__logo">
                <img width="155" height="49" src="<?php echo wp_kses_post(Helpers::getImage('logo.png')); ?>" alt="Logo Vist">
            </a>
            <button class="hamburger-button-close">
                <?php echo wp_kses_post(Helpers::printSvg("close.svg")); ?>
            </button>
        </div>
        <div class="mobile-menu-section__wrapper">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'mobile-menu-section__menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ));  
            ?>
        </div>
    </div>
    <div class="mobile-menu-section__bottom-section">
        <p class="mobile-menu-section__title"><?php echo esc_html__("Office", "vist");?></p>
        <a href="tel:+48728088504" class="btn mobile-menu-section__phone-button--office"><?php echo esc_html__("+48 728 088 504", "vist"); ?></a>
        <a href="mailto:biuro@advist.pl" class="btn mobile-menu-section__email-button--office"><?php echo esc_html__("biuro@advist.pl", "vist"); ?></a>
        <p class="mobile-menu-section__title"><?php echo esc_html__("Sales department", "vist");?></p>
        <a href="tel:+48535276487" class="btn mobile-menu-section__phone-button--sales"><?php echo esc_html__("+48 535 276 487", "vist"); ?></a>
    </div>

</div>