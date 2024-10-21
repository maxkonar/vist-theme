document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu
    jQuery('.hamburger-button-open').on('click', function() {
        jQuery('.mobile-menu-section').addClass('active');
    });
    jQuery('.hamburger-button-close').on('click', function() {
        jQuery('.mobile-menu-section').removeClass('active');
    });

    // Hero section
    if(jQuery(".hero-section").length > 0) {
        jQuery(".hero-section__tree").addClass('hero-section__tree--show');
        jQuery(".hero-section__budda").addClass('hero-section__budda--show');
    }

    // Homepage slider
    if(jQuery(".homepage-slider").length > 0) {
        const homepageSlider = new Swiper('.homepage-slider', {
            loop: true,
            spaceBetween: 50,
            pagination: {
                el: '.homepage-slider__pagination',
                clickable: true,
            },
        });
    }
});
