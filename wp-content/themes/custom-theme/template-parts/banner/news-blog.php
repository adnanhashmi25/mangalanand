<?php
/**
 * News and Blog page file.
 * 
 * @package custom-theme
 */
?>

<div class="crel">
    <img src="<?php bloginfo('template_directory') ?>/assets/images/banner/contact-us-banner.webp" alt="">
    <div class="bluebox">
        <h2 class="text-center">Make an Appointment</h2>
        <div class="container">    
            <?php echo do_shortcode('[contact-form-7 id="197" title="Contact form 1"]') ?>
        </div>
    </div>
</div>