<?php
/**
 * Template Name: Our Management
 * 
 * 
 * @package custom-theme
 */

//


 get_header();
?>

<div>

    <?php get_template_part('template-parts/about-us') ?>
        <div class="heading mt-40">
            <h2 class="text-center"><span>Our Management</span></h2>
        </div>
    <div class="container containspacing">
        <div class="row mt-3">
            <div class="col-md-5 ">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/mangal-parihar.webp" alt="" class="w-50">
            </div>
            <div class="col-md-7">
                <h2 class="colb">Dr. Mangal Parihar</h2>
                <p style="font-size: 14px;">Director, Mangal Anand Hospital</p>
                <p class="text-justify">
                    Dr. Mangal Parihar is an Orthopedic Surgeon, whose area of specialization includes Deformity Correction, Limb Lengthening using Ilizarov techniques and Orthofix fixators and Joint Replacement.<br>
                    <span style="color: #0290d5;text-decoration: underline;"> <a href="#">View More...</a></span>
                </p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-5 ">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/dr-anand-parihar.webp" alt="" class="w-50">
            </div>
            <div class="col-md-7">
                <h2 class="colb">Dr. Anand Parihar</h2>
                <p style="font-size: 14px;">Director, Mangal Anand Hospital</p>
                <!-- <p>
                Dr. Mangal Parihar is an Orthopedic Surgeon, whose area of specialization includes Deformity Correction, Limb Lengthening using Ilizarov techniques and Orthofix fixators and Joint Replacement. <br>
                    <span style="color: #0290d5;text-decoration: underline;"> <a href="#">View More...</a></span>
                </p> -->
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-5 ">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/Dr-Maya.webp" alt="" class="w-50">
            </div>
            <div class="col-md-7">
                <h2 class="colb">Dr. Maya Parihar Malhotra</h2>
                <p style="font-size: 14px;">Director, Mangal Anand Hospital</p>
                <!-- <p>
                Dr. Mangal Parihar is an Orthopedic Surgeon, whose area of specialization includes Deformity Correction, Limb Lengthening using Ilizarov techniques and Orthofix fixators and Joint Replacement. <br>
                    <span style="color: #0290d5;text-decoration: underline;"> <a href="#">View More...</a></span>
                </p> -->
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>

<?php
    get_footer();