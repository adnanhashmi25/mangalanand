<?php
/**
 * 
 * Template Name: Front Page
 * 
 * Main template file.
 * 
 * @package custom-theme
 */


 get_header();
?>

<div>
    <?php get_template_part('template-parts/bg-carousel') ?>
    <?php get_template_part('template-parts/aboutus') ?>
    <?php get_template_part('template-parts/orthopedic-services') ?>
    <?php get_template_part('template-parts/ilizarov-technique') ?>
    <?php get_template_part('template-parts/other-services') ?>
    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    <?php get_template_part('template-parts/review') ?>
    <!--  -->
</div>
    

<?php
    get_footer();