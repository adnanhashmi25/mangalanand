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
        <h2 class="text-center"><span>Pharmacy</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row">
            <div class="col-md-9">
                <p class="text-justify">
                    Mangal Anand Hospital pharmacy operates at the hospital and makes quality medicine available and affordable.  The Pharmacy stocks well known branded drugs and medical consumables.  Though most of the drugs/consumables are sold at MRP, There are certain items sold below MRP since the procurement price is much lower than the MRP and the benefit is passed on to the patients.  Private Ward patients can opt for drugs and consumables to be indented by the ward nursing staff after paying a suitable Pharmacy Deposit.  Any surplus drugs / injections / syringes etc, at the time of discharge can be returned to the Pharmacy. This applies only to whole, sealed containers or strips.
                </p>
                <p class="text-justify">
                    Pharmacy accepts cash or credit cards only. The Pharmacy is under electronic surveillance. <br>
                    We accept returns of medicines purchased at the hospital pharmacy within 30 days of purchase, on presenting the bill and with a valid reason. 
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