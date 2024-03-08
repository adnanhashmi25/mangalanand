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
        <h2 class="text-center"><span>Gynecology</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row">
            <div class="col-md-9">
                <p class="text-justify">
                    Gynecology is the specialized field of medicine that deals with the medical care of women and the physical care of the female reproductive system. It also includes the treatment of various diseases and disorders related to women in multiple areas of female health. It is essential to ensure appropriate care and management during each phase of the female reproductive cycle that includes puberty, reproductive age, menopause and post-menopausal stage. 
                </p>
                <p>
                    <b>Gynecology Services offered at Mangal Anand Hospital</b>
                    <ol>
                        <li>Adolescent gynecology</li>
                        <li>Annual gynecological examination</li>
                        <li>Management of abnormal pap smears</li>
                        <li>Colposcopy and LEEP procedures</li>
                        <li>Contraception and family planning, now providing Nexplanon</li>
                        <li>HPV Vaccine</li>
                        <li>Gynecologic surgery</li>
                        <li>Endometrial ablation</li>
                        <li>Minimally invasive gynecologic surgery</li>
                        <li>Treatment of fibroids and heavy periods</li>
                    </ol>
                </p>
            </div>
            <div class="col-md-3">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Gynecology-.webp" alt="">
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