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
    if($slug == "gynecology")
    {
        $cllr_image = "gynecology.webp";
    }
    else if($slug == "radiology")
    {
        $cllr_image = "radiology.webp";
    }
    else if($slug == "lab-services")
    {
        $cllr_image = "Lab.webp";
    }
    else if($slug == "physiotherapy")
    {
        $cllr_image = "physiotherapy.webp";
    }
    else if($slug == "pathology")
    {
        $cllr_image = "pathology.webp";
    }
    else if($slug == "dialysis")
    {
        $cllr_image = "dialysis.webp";
    }
    else if($slug == "pharmacy")
    {
        $cllr_image = "pharmacy.webp";
    }
?> 

<div class="crel">
    <img src="<?php bloginfo('template_directory') ?>/assets/images/banner/<?php echo $cllr_image; ?>" alt="">
    
</div>