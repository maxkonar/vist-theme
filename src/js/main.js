document.addEventListener('DOMContentLoaded', () => {
    jQuery('.hamburger-button-open').on('click', function() {
        jQuery('.mobile-menu-section').addClass('active');
    });
    jQuery('.hamburger-button-close').on('click', function() {
        jQuery('.mobile-menu-section').removeClass('active');
    });
});
