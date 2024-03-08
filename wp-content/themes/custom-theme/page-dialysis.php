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
        <h2 class="text-center"><span>Dialysis</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row">
            <div class="col-md-9">
                <p class="text-justify">
                    Mangal Anand Hospital provides convenient dialysis therapy for patients with kidney (renal) failure, also called end-stage renal disease. A dedicated team of leading dialysis experts provides comprehensive and compassionate dialysis care. Nephrologists, registered nurses, patient care technicians certified in dialysis, social workers, and dietitians make up your dialysis team.
                </p>
                <p class="text-justify">
                    Through our dialysis services, you have access to the full range of the Mangal Anand Hospital’s state-of-the-art treatments, including vascular surgery, urology, interventional radiology, diabetes and high blood pressure (hypertension) management programs. 
                </p>
                <p class="text-justify">
                    <b>Why Dialysis</b> <br>
                    The purpose of dialysis is to clean your blood when your kidneys are unable to do their job due to end-stage renal disease or kidney failure.
                    When your kidneys fail to function properly, waste products that are normally cleared by the kidneys build up in your bloodstream. As the levels of these toxins rise, you may begin to feel sluggish and nauseated. If left untreated, kidney failure can result in seizures, coma, and premature death. Dialysis removes these waste products when kidneys can no longer do so.
                </p>
            </div>
            <div class="col-md-3">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Pathology-.webp" alt="">
            </div>
        </div>
        <div class="row illizarov-deformity">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>Treatments We Offer</b><br>
                    Our nephrology experts have extensive experience with all types of dialysis. We also treat people under 18 years of age and visitors from out of town and around the world. <br>
                    Our team works with you to ensure that you have as much choice as possible in the type of dialysis that you receive. 
                </p>
                <p class="text-justify">
                    <b>Hemodialysis</b> <br>              
                    Hemodialysis circulates your blood through a fine needle (catheter) in your arm or leg to a highly specialized dialysis machine that filters out waste products and excess water. The process takes between three and four hours to clean the blood and return the healthy blood to your body. Typically, you will be scheduled for hemodialysis therapy three days a week on an outpatient basis. <br>
                    Our dialysis center and dialysis unit are equipped with the newest state-of-the-art technology. The center is a spacious, calm, and comfortable environment for outpatient hemodialysis treatment.
                </p>
                <p class="text-justify">
                    <b>Peritoneal dialysis</b> <br>
                    Peritoneal dialysis filters blood by flowing a cleansing solution into your abdominal cavity through a surgically inserted catheter to remove waste and excess fluid. With this type of dialysis, your body’s peritoneal tissue does the filtering. The process takes a few hours.
                </p>
                <p class="text-justify">
                    <b>Pediatric dialysis services</b> <br>
                    We provide dialysis to children and young adults under the age of 18 in an area separated from adults. Your child’s care team includes a pediatric dialysis director, dietitian, and social worker, as well as a child life specialist, who routinely meets with our young patients to coordinate games and direct creative projects during treatment.
                </p>
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