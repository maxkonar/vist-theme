<?php use App\Helpers; ?>

<div class="why-choose-us">
    <div class="container">
        <h2 class="why-choose-us__title"><?php echo esc_html__("Why Choose Us?", "vist"); ?></h2>
        <div class="why-choose-us__section">
            <div class="why-choose-us__content">
                <img class="why-choose-us__image" src="<?php echo Helpers::getImage('person.png'); ?>" alt="icon" width="45" height="100">
                <p class="why-choose-us__subtitle"><?php echo esc_html__("Experienced Team", "vist"); ?></p>
                <p class="why-choose-us__details"><?php echo esc_html__("Our team of seasoned professionals brings years of industry experience, ensuring we understand and meet your specific needs.", "vist"); ?></p>
            </div>
            <div class="why-choose-us__content">
                <img class="why-choose-us__image" src="<?php echo Helpers::getImage('star.png'); ?>" alt="icon" width="100" height="100">
                <p class="why-choose-us__subtitle"><?php echo esc_html__("Proven Track Record", "vist"); ?></p>
                <p class="why-choose-us__details"><?php echo esc_html__("With numerous successful projects, we have established a reputation for delivering high-quality solutions on time and within budget.", "vist"); ?></p>
            </div>
             <div class="why-choose-us__content">
                <img class="why-choose-us__image" src="<?php echo Helpers::getImage('thunder.png'); ?>" alt="icon" width="45" height="100">
                <p class="why-choose-us__subtitle"><?php echo esc_html__("Innovative Technology", "vist"); ?></p>
                <p class="why-choose-us__details"><?php echo esc_html__("We leverage the latest technologies and methodologies to create scalable, robust, and future-proof solutions for our clients.", "vist"); ?></p>
            </div>
        </div>
    </div>
</div>