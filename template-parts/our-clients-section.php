<?php use App\Helpers; ?>

<div class="our-clients">
    <div data-aos="fade-up" data-aos-duration="1000" class="container">
        <div class="our-clients__heading">
            <h2 class="our-clients__title"><?php echo esc_html__("Some of our cooperation", "vist"); ?></h2>
            <img class="our-clients__icon" src="<?php echo Helpers::getImage('our-client-star.png'); ?>" alt="icon" width="100" height="100">
        </div>     
        <div class="our-clients__clients">
            <?php for($i=0; $i < 11; $i++): ?>
                <div class="our-clients__client">
                    <img class="our-clients__client-image" src="<?php echo Helpers::getImage('our-client-image.png'); ?>" alt="client" width="60" height="60">
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>