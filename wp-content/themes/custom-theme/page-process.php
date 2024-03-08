<?php
/**
 * Template Name: Process
 * 
 * 
 * @package custom-theme
 */

//


 get_header();
?>

<div>
    <?php get_template_part('template-parts/banner/process') ?>
    
    <div class="heading mt-40">
        <h2 class="text-center"><span>Process</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row illizarov-deformity">
            <div class="col-md-12 ">
                <p class="text-justify">
                    Virtually all medical services a patient might need — doctor visits, testing, radiology, surgery, hospital care — are available "under one roof" at Center for Limb Lengthening & Reconstruction, Mangal Anand Hospital. The scheduling of these services is done in a coordinated and efficient way, so that patient need not run around.
                </p>
                <p class="text-justify">
                    On the first consultation patient needs to get all the previous records including any old x-ray films.
                </p>
                <p class="text-justify">
                    One of the team members of Center for Limb Lengthening & Reconstruction meets you and reviews the patient history. Any new x-rays including digital full length x-rays can be done in-house and the films are ready for immediate review.
                </p>
                <p class="text-justify">
                    Dr Parihar goes through every detail and does an unhurried examination.  By the time one comes out of the consultation room one has a fairly certain plan in his mind regarding the diagnosis, treatment and further course of action.
                </p>
                <p class="text-justify">
                    Most of our outstation patients go back to their hometown within 7-10 days. They follow up with us via email or phone and the followup x-rays are sent via mail, courier or email. A repeat visit is required at the end of the distraction process or while planning for the next stage of the procedure. An outstation patient may be asked to remain in Mumbai for more than the usual period in certain situations where weekly or frequent visits are needed. We suggest staying with a relative or in a rented apartment rather than at the hospital, if an extended stay is recommended.
                </p>
                <p class="text-justify">
                    Clinical picture and full length xray not only help in identifying the seat of deformity and any other deformities which may be masked, but also help in planning the kind and amount of correction, the overall biomechanics of the limb and also serve as a reference for future follow ups.
                </p>
                <p class="text-justify">
                    Here in this particular patient the deformity is only in the proximal tibia (the leg bone close to knee), albeit on both the sides.
                </p>
                <p>
                    Scans & special tests – Not every patient needs these. The scans & special test as and when required are generally scheduled after the first visit and can be scheduled as per convenience of the patient.
                </p>
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    <div class="heading">
        <h2 class="text-center"><span>Latest News &amp; Blog</span></h2>
    </div>
    <img src="<?php bloginfo('template_directory') ?>/assets/images/blog.webp" alt="" >
</div>


<?php
    get_footer();
