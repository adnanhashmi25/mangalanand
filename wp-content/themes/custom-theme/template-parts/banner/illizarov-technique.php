<?php
/**
 * Illizarov Technique page file.
 * 
 * @package custom-theme
 */


?>
<?php
    $cllr_image='';
    $slug = basename(get_permalink());
    if($slug == "deformity")
    {
        $cllr_image = "deformity.webp";
    }
    else if($slug == "lengthening")
    {
        $cllr_image = "lengthening.webp";
    }
    else if($slug == "knee-preservation")
    {
        $cllr_image = "HTO.webp";
    }
    else if($slug == "myths-about-illizarov")
    {
        $cllr_image = "ilizarov-technique.webp";
    }
    else if($slug == "ilizarov-technique")
    {
        $cllr_image = "ilizarov-technique.webp";
    }
    else if($slug == "bone-joint-infection")
    {
        $cllr_image = "bone-joint-infection.webp";
    }
    else if($slug == "non-union")
    {
        $cllr_image = "non-union.webp";
    }
?>  

<div class="crel">
    <img src="<?php bloginfo('template_directory') ?>/assets/images/banner/<?php echo $cllr_image; ?>" alt="">
    <div class="bluebox">
        <h2 class="text-center">Make an Appointment</h2>
        <div class="container">    
            <?php echo do_shortcode('[contact-form-7 id="197" title="Contact form 1"]') ?>
        </div>
    </div>
</div>