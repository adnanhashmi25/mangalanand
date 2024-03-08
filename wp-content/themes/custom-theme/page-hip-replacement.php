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
                                    <td class="cs-hover active"> <a href="<?php echo $page_link . 'hip-replacement/' ?>">Hip Replacement</a></td>
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
        <h2 class="text-center"><span>Hip Replacement</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>Injury</b>
                </p>
                <p class="text-justify">
                    This 54 year old lady, smoker, had a slip and fell on her hip. There was a fracture of the neck of femur on the left side. The options in such a situation are to either fix the fracture or replace the joint either half (Hemiarthroplasty-only the ball of the joint is replaced) or complete (Total Hip Replacement-boththe ball & socket are replaced).
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems1.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>Post surgery</b>
                </p>
                <p class="text-justify">
                    Since the hip joint was normal before the fracture, it was decided (with patient’s consultation) to do a fixation and try and salvage the hip. A closed reduction and percutaneus cancellous screw fixation (minimally invasive) was done.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems2.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>2 months post surgery</b>
                </p>
                <p class="text-justify">
                    The fracture seemed to be well on its way to heal. She was walking well though still with the walker.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems3.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>3 months post surgery</b>
                </p>
                <p class="text-justify">
                    In her sleep one day she suddenly felt a sudden sharp pain in the hip joint, afterwards she was ok, so she continued to walk on the leg. She came back to us after a few days of limping and not being able to walk as earlier. The x-rays at that time showed this picture – where the screws had cut out of the ball (femoral head) and were even pinching on the socket. This was the cause of her pain, limp & shortening.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems4.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>Post Total Hip Replacement</b>
                </p>
                <p class="text-justify">
                    The xray picture after total hip replacement. The socket (acetabular cup) was fixed with bone cement whereas the femoral stem is uncemented. The length of the limb has been restored.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems4.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>2 months after THR</b>
                </p>
                <p class="text-justify">
                    2 months on the patient is walking well.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems5.webp" alt="" class="w-80 img-c">
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();