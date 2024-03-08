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
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'knee-replacement/' ?>">Knee Replacement</a></td>
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
                                    <td class="cs-hover active"> <a href="<?php echo $page_link . 'arthrolysis-elbow/' ?>">Arthrolysis - Elbow</a></td>
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
        <h2 class="text-center"><span>Arthrolysis - Elbow</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>Movements Before Surgery</b>
                </p>
                <p class="text-justify">
                    This 17 year old girl had stiff elbow as a result of an open inter-condylar fracture of humerus following side swipe injury. She underwent multiple surgeries for the same. When she presented to us the fracture had healed, skin graft was healthy but she had only of 50 degrees of arc of motion (40-90)
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems23.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>Movements 2 days after surgery</b>
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems24.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>X-rays at the end of 6 months</b>
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems25.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    The excellent functional outcome with a sustained improvement in function as seen at 6 months followup. The arc of motion improved to 110 degrees (20 degrees of extension to 130 degrees of flexion).
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems26.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <h2>Fused Elbow</h2>
                <p class="text-justify">
                    <b>Xray before surgery</b>
                </p>
                <p class="text-justify">
                    This 30 year gentleman had been through a lot. He had multiple fractures after a road traffic accident about 5 years ago. He fracture of the right femur, right tibia, both bones of right forearm with fracture of proximal humerus. All open fractures. When he came to us he had a near fused elbow – just a jog of movements.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems27.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems28.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    <b>Just before surgery</b>
                </p>
                <p class="text-justify">
                    The skin over the elbow was bad. So first a flap was done to get a good soft tissue cover.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>Movements after surgery</b>
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems29.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems30.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    <b>Xrays after surgery</b>
                </p>
                <p class="text-justify">
                    The distal humerus has been shaped into a notch with the olecranon shaped into a hook creating two congruent surfaces and a flexion-extension axis.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    The functional outcome after 2 months of surgery. The post surgery arc of motion was 120 degrees with an extension of 20 degrees and flexion up to 130degrees.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems31.webp" alt="" class="w-80 img-c">
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();