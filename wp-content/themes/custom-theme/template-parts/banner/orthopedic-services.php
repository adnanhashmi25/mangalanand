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
    if($slug == "elbow")
    {
        $cllr_image = "elbow.webp";
    }
    else if($slug == "knee")
    {
        $cllr_image = "knee.webp";
    }
    else if($slug == "foot-ankle")
    {
        $cllr_image = "foot-ankle.webp";
    }
    else if($slug == "shoulder")
    {
        $cllr_image = "shoulder.webp";
    }
    else if($slug == "hand-wrist")
    {
        $cllr_image = "wrist.webp";
    }
    else if($slug == "spine")
    {
        $cllr_image = "spine.webp";
    }
    else if($slug == "sports-medicine")
    {
        $cllr_image = "sport-medicine.webp";
    }
    else if($slug == "hip")
    {
        $cllr_image = "hip.webp";
    }
    else if($slug == "trauma-fracture")
    {
        $cllr_image = "trauma-fracture.webp";
    }
    else if($slug == "paediatric-orthopedics")
    {
        $cllr_image = "banner5.webp";
    }
?>  
<div class="crel">
    <img src="<?php bloginfo('template_directory') ?>/assets/images/banner/<?php echo $cllr_image; ?>" alt="">
    
</div>