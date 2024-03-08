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
                                <tr >
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'hip-replacement/' ?>">Hip Replacement</a></td>
                                    <td class="cs-hover active"> <a href="<?php echo $page_link . 'knee-replacement/' ?>">Knee Replacement</a></td>
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'intra-articular-osteotomy/' ?>">Intra Articular Osteotomy </a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr >
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'high-tibial-osteotomy/' ?>">High Tibial Osteotomy</a></td>
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'arthrolysis-elbow/' ?>">Arthrolysis - Elbow</a></td>
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'illizarov-hip-reconstruction/' ?>"> Ilizarov Hip Reconstruction </a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="heading mt-40">
        <h2 class="text-center"><span>Knee Replacement</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    70 year old lady, presents with pain in both the knees right more than left, difficulty in walking, bowing of both legs. The x-rays show osteoarthritis of knee joint, destruction of joint cartilage, varus deformity. The pictures on the right show the clinical appearance. When looking from the front there was severe bowing of the legs and on looking from the side there was flexion deformity (knees bent). Both the deformities adding mechanical disadvantage to the destroyed joint cartilage.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems6.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems7.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">                  
                    <b>Post Surgery</b>
                </p>
                <p class="text-justify">                  
                    The x-ray pictures after the surgery. A cemented PFC sigma total knee replacement (involves a metallic component sitting on the lower femur, a metallic tibial tray & a polyethylene insert in between) was done. The patella (knee cap) was not replaced as the articular surface didn’t show much damage. The skin staples are still seen. The picture on the right shows the reduction of flexion deformity, but not the complete resolution. That is because only part of the flexion deformity was from the bone, the rest of it was from the soft tissue, which gradually stretch out with exercises.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>3 months post surgery</b>
                </p>
                <p class="text-justify">
                    The appearance 3 months after surgery. The deformities are resolved, compare with the un-operated side . The range of motion is good and more importantly there is no pain.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems8.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>3 months post surgery</b>
                </p>
                <p class="text-justify">
                The x-rays after 3 months of surgery. The flexion deformity has resolved. The un-operated side also shows damage, but the patient is not symptomatic on that side so no need for surgery till such time.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems9.webp" alt="" class="w-80 img-c">
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();