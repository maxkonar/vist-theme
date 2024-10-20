<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<?php use App\Helpers; ?>
<body <?php body_class(); ?>>
    
<header class="main-header">
    <div class="container main-header__inner">
        <div class="main-header__left-column">
            <a href="<?php echo esc_url(home_url()); ?>" class="main-header__logo">
                <img width="155" height="49" src="<?php echo Helpers::getImage('logo.png'); ?>" alt="Logo Vist">
            </a>
            <div class="main-header__nav">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'main-header__menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    ));  
                ?>
            </div>
        </div>
        <div class="main-header__right-column">
            <a href="#contact-us" class="btn header-contact-button"><?php echo esc_html__("Contact us", "vist"); ?></a>
            <button class="hamburger-button-open">
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
            </button>
        </div>
    </div>
</header>
<?php
    get_template_part('template-parts/mobile-menu-section');
?>