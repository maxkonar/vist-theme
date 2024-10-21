<?php use App\Helpers; ?>

<div class="who-we-are">
    <div class="container">
        <div class="who-we-are__section">
            <h2 class="who-we-are__title"><?php echo esc_html__("Who We Are", "vist"); ?></h2>
            <p class="who-we-are__text"><?php echo esc_html__("We're a team of passionate web enthusiasts who love what we do. From creative designers to tech-savvy developers, our experts work together to build websites and apps that not only look great but also perform brilliantly. We stay on top of the latest trends and technologies to ensure your site is modern, secure, and easy to use. At Webvist, we turn visionary ideas into cutting-edge software solutions. Our team is passionate about technology and committed to excellence, partnering with businesses to drive innovation and success.", "vist"); ?></p>
            <img class="who-we-are__image" src="<?php echo Helpers::getImage('who-we-are-image.png'); ?>" alt="icon" width="304" height="304">
        </div>     
    </div>
</div>