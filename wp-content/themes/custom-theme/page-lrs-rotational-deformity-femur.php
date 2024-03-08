<?php
/**
 * Template Name: Case Studies
 * 
 * 
 * @package custom-theme
 */

//


 get_header();
?>
<?php $page_link = get_permalink( $post->post_parent ); ?>

<div>
    <?php get_template_part('template-parts/banner/case-studies') ?>
    
    <div class="heading mt-40">
        <h2 class="text-center"><span>Bone Deformity</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row">
            <div class="col-md-12">
                <table class="cs-table">
                    <tr>
                        <td>
                            <table>
                                <tr class="cs-bl">
                                    <td>  Acute Correction </td>
                                    <td>  Ilizarov Correction </td>
                                    <td> Hexapod Correction </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr >
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'lrs-bilateral-tibia/' ?>"> LRS - Bilateral Tibia</a></td>
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'proximal-tibia1/' ?>">Proximal Tibia</a></td>
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'metaphyseal-dysplasia/' ?>">Metaphyseal Dysplasia </a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td class="cs-hover active"><a href="<?php echo $page_link . 'lrs-rotational-deformity-femur/' ?>">LRS - Rotational Deformity Femur(with Shortening)</a></td>
                                    <td class="cs-hover"><a href="<?php echo $page_link . 'distal-femur/' ?>"> Distal Femur</a></td>
                                    <td class="no-br"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td class="cs-hover"><a href="<?php echo $page_link . 'lrs-oblique-plane-deformity-femur/' ?>">LRS - Oblique Plane Deformity Femur</a></td>
                                    <td class="no-br"></td>
                                    <td class="no-br"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td class="cs-hover"><a href="<?php echo $page_link . 'nailing/' ?>"> Nailing </a></td>
                                    <td class="no-br"></td>
                                    <td class="no-br"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="heading mt-40">
        <h2 class="text-center"><span>LRS - Rotational Deformity Femur (with Shortening)</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    In the example that follows, the patient had a short limb gait with intoeing (walks with foot turned inwards) on the left side. Examination revealed an intorsion (internal rotation deformity) of about 90º and shortening of about 6cms in the femur. The deformity had developed as a result of osteomyelitis in early childhood. <br>
                    Since it was a large internal rotation deformity, it was decided to correct the deformity in a staged manner and correct the shortening with gradual distraction. Hence, LRS (Limb Reconstruction System) fixator was applied, acute correction of about 45º internal rotation deformity was done and gradual distraction was started after 10 days.
                </p>
                <p class="text-justify">
                    The distraction process was largely uneventful, whereas the consolidation process took some time. At the time of fixator removal, the regenerate fractured when the rail was removed and patient made to walk. As a result the fixator was reassembled. The regenerated healed well ultimately in another 8 weeks.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity12.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    The x-ray picture here shows the antero-posterior projection of pelvis with both the hips and sacro-iliac joints. The left hip appeared as is seen in lateral view - the lesser trochanter is not visible and the greater trochanter is overlapping the neck of femur.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-7">
                <p class="text-justify">                  
                    These are the x-ray pictures of the knee joint.
                </p>
                <p class="text-justify">
                    The picture on left is a lateral view of knee joint. While the tibia is seen in true profile the distal femur appears oblique.
                </p>
                <p class="text-justify">
                The picture on the right is the antero-posterior view of the knee joint. The tibia is seen as frontal, the distal femur appears oblique.
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity13.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity14.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    The full length x-ray showing the difference in lengths between the two limbs. The shortening was measured clinically using blocks and palpation of both ASIS (anterior superior iliac spines) and then tallied with the difference on the full length x-ray.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-7">
                <p class="text-justify">                  
                    These pictures were taken in the operating room for better understanding of the rotational deformity. The picture on the left was taken with the foot forward. The picture on the right shows the c-arm picture of the hip joint in the same position. The hip was in extreme internal rotation (normally this would have been in the mid-position, with both the lesser and greater trochanters visible).
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity15.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity16.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    This picture on left shows that the knee has been bent to 90º and the hip has been externally rotated to the maximum extent possible.
                </p>
                <p class="text-justify">
                    The c-arm picture on the right was taken with the limb in the position as described above. The appearance of the hip joint is as would be in the frontal (antero-posterior) projection. The lesser trochanter is visible maximally and the greater trochanter is also seen without any overlap.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-7">
                <p class="text-justify">                  
                    This is how it was done.
                </p>
                <p class="text-justify">                  
                    The schanz screws were put perpendicular to the axis of bone, but at an angle of about 45º to each other. The proximal group was inserted postero-laterally and the distal group laterally.
                </p>
                <p class="text-justify">                  
                    Percutaneous osteotomy was then performed between the two groups of schanz screws. The schanz screws were then brought in the same plane correcting 45º of rotational deformity.
                </p>
                <p class="text-justify">                  
                    Distraction was started after 10 days at the rate of 1mm per day, to correct the shortening of 6cms.
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity17.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity18.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    The x-ray picture on the left was taken after the surgery. It shows the osteotomy in the compressed state.
                </p>
                <p class="text-justify">
                    The x-ray picture in the middle was taken after distraction of around 14 days. The gap created at the osteotomy site gradually fills up with new bone called regenerate.
                </p>
                <p class="text-justify">
                    The x-ray picture on the right was done after completion of distraction of 6cms, which took a little more than 60 days. The distraction gap is showing some fluffy kind of shadow, this is the regenerate which has not mineralized completely yet and hence doesn't show up well on the x-ray.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-7">
                <p class="text-justify">                  
                    These x-rays show the progress of consolidation. The regenerate solidifies into stronger bony tissue during this process.
                </p>
                <p class="text-justify">                  
                    The criteria for removal of the fixator is formation of at least three cortices (out of four-anterior, posterior, medial & lateral). The fixator is removed after gradual disassembly. First the CD unit is removed and clamps are loosened. Patient is then asked to walk for about 10-15 minutes. If there is no pain or trouble then the next step is to remove the rail and clamps, the schanz screws remain in position. Again the patient is asked to walk for 10-15 minutes. Once this step is done comfortably, the schanz screws are removed usually in the out patient department itself.
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity19.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity20.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    In this particular case, when the patient was made to walk during the second stage of fixator removal i.e. after the rail and clamps were removed, there was pain after a few steps. The LRS assembly was reapplied connecting the clamps with rail and fresh x-rays taken.
                </p>
                <p class="text-justify">
                    The radio-lucent line seen here (red arrow) in the middle of the regenerate depicts the fracture in the regenerate. This is a known complication and is seen rarely. The further treatment is to continue with the fixator till union, which generally takes 8-10 weeks. During this time the patient continues to bear full weight.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-7">
                <p class="text-justify">                  
                    The final x-ray picture 6 weeks after fixator removal. The regenerate has healed and remodeled well. The pin sites have also healed well. The regenerate would get recanalized in another 2 months time.
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity21.webp" alt="" class="w-80 img-c">
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();