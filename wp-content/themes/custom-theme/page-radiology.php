<?php
/**
 * Template Name: Service
 * 
 * 
 * @package custom-theme
 */

//


 get_header();
?>

<div>
    <?php get_template_part('template-parts/banner/other-services') ?>
    
    <div class="heading mt-40">
        <h2 class="text-center"><span>Radiology</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row">
            <div class="col-md-9">
                <p class="text-justify">
                    The radiology services available at Mangal Anand Hospital are X-ray and Ultrasound.  The services are accessible to our patients for investigations.  We are equipped with cutting-edge technologies to provide comprehensive lab tests, radiology tests and other advanced tests.  Our state-of-the-art diagnostics with a full suite of pathology investigation and radiology imaging services ensure quick and accurate results. Our radiologists and technologists work closely with our medical experts to offer high-quality diagnoses so that you can seek the right treatment at the right time. We are aware that helping you understand diagnostic results is as important as the quality and accuracy of our diagnosis and investigations.
                </p>
                <p class="text-justify">
                    <b>X-ray</b> <br>
                    An X-ray uses high-frequency radiations to produce images of the inside of your body. Detailed, real-time X-rays images are produced for the diagnosis of a wide range of conditions such as fractures, infections, tumours, arthritis in joints, bone loss and dental issues.
                </p>
                <p class="text-justify">
                    <b>Ultrasound</b><br>
                    Diagnostic ultrasound scans are also known as sonography. It is a procedure that captures live images of your internal organs using high-frequency sound waves. Ultrasound scans are used to study detailed investigations of a person’s abdomen, pelvic organs, muscles, tendons and heart vessels.
                </p>
            </div>
            <div class="col-md-3">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Radiology-.webp" alt="">
            </div>
        </div>
        <div class="row illizarov-deformity">
            <div class="col-md-12">
                <p class="text-center">
                    <button type="submit" class="btn btn-primary ">Make an Appointment</button>
                </p>
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();