<?php
/*
Template Name: Homepage
*/
?>

<?php get_header();?>

<div class="homepage">
    <?php get_template_part('template-parts/hero-section');?>
    <?php get_template_part('template-parts/who-we-are-section');?>
    <?php get_template_part('template-parts/homepage-slider');?>
    <?php get_template_part('template-parts/our-clients-section');?>
</div>
<?php get_footer(); ?>