<?php use App\Helpers; ?>

<div class="homepage-slider">
    <div class="homepage-slider__wrapper swiper-wrapper">
        <div class="homepage-slider__slide swiper-slide">
            <img class="homepage-slider__image homepage-slider__image--desktop" src="<?php echo Helpers::getImage('desktop-slider-placeholder.png'); ?>">
            <img class="homepage-slider__image homepage-slider__image--mobile" src="<?php echo Helpers::getImage('mobile-slider-placeholder.png'); ?>">
        </div>
        <div class="homepage-slider__slide swiper-slide">
            <img class="homepage-slider__image homepage-slider__image--desktop" src="<?php echo Helpers::getImage('desktop-slider-placeholder.png'); ?>">
            <img class="homepage-slider__image homepage-slider__image--mobile" src="<?php echo Helpers::getImage('mobile-slider-placeholder.png'); ?>">
        </div>
        <div class="homepage-slider__slide swiper-slide">
            <img class="homepage-slider__image homepage-slider__image--desktop" src="<?php echo Helpers::getImage('desktop-slider-placeholder.png'); ?>">
            <img class="homepage-slider__image homepage-slider__image--mobile" src="<?php echo Helpers::getImage('mobile-slider-placeholder.png'); ?>">
        </div>
    </div>
    <div class="homepage-slider__pagination swiper-pagination"></div>
    </div>
</div>