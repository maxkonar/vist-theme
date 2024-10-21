<?php use App\Helpers; ?>

<div class="homepage-slider">
    <div class="homepage-slider__wrapper swiper-wrapper">
        <div class="homepage-slider__slide swiper-slide">
            <img class="homepage-slider__slide--image" src="<?php echo Helpers::getImage('slider-placeholder.png'); ?>">
        </div>
        <div class="homepage-slider__slide swiper-slide">
            <img class="homepage-slider__slide--image" src="<?php echo Helpers::getImage('slider-placeholder.png'); ?>">
        </div>
        <div class="homepage-slider__slide swiper-slide">
            <img class="homepage-slider__slide--image" src="<?php echo Helpers::getImage('slider-placeholder.png'); ?>">
        </div>
    </div>
    <div class="homepage-slider__pagination swiper-pagination"></div>
    </div>
</div>