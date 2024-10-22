<?php use App\Helpers; ?>

<div class="hero-section">
    <div class="container">
        <div data-aos="fade-left" data-aos-duration="1000" class="hero-section__wrapper">
            <h1 class="hero-section__title"><?php echo esc_html__("Your partner in digital transformation", "vist"); ?></h1>
            <a href="#contact-us" class="btn hero-section__contact-button"><?php echo esc_html__("Get in touch", "vist"); ?></a>
            <img class="hero-section__spinner" width="100" height="100" src="<?php echo Helpers::getImage('spinner.png'); ?>" alt="Vist spinner">
        </div>
        <picture><img class="hero-section__tree" src="<?php echo Helpers::getImage('tree.png'); ?>" alt="tree-image"></picture>
        <picture><img class="hero-section__budda" src="<?php echo Helpers::getImage('budda.png'); ?>" alt="budda-image"></picture>
        <picture><img class="hero-section__sphere" src="<?php echo Helpers::getImage('sphere.png'); ?>" alt="sphere-image"></picture>
    </div>
</div>