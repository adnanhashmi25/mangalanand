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
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'arthrolysis-elbow/' ?>">Arthrolysis - Elbow</a></td>
                                    <td class="cs-hover active"> <a href="<?php echo $page_link . 'illizarov-hip-reconstruction/' ?>"> Ilizarov Hip Reconstruction </a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="heading mt-40">
        <h2 class="text-center"><span>Ilizarov Hip Reconstruction</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems32.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    <b>Before Surgery</b>
                </p>
                <p class="text-justify">
                    As a result of infection and surgeries in childhood this 27 year old girl had destruction of the femoral head. As a result of that she had a very bad limp and shortening of the left leg. She also had a hyper-extension deformity at the proximal tibia (the knee would go back every time she would walk) and fixed equinus deformity of the ankle due to long standing shortening. An Ilizarov Hip Reconstruction was done for the left hip and in the 2nd stage the deformity in the knee & equinus were tackled.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-7">
                <p class="text-justify">
                    <b>X-ray after surgery</b>
                </p>
                <p class="text-justify">
                    The Ilizarov Hip Reconstruction consists of a double osteotomy. One at the level of ischial tuberosity giving support to the pelvis and one at distal level to correct the valgus deformity and shortening. Though the bone looks zigzag, the load bearing axis is centralized and the leg looks straight from outside. More importantly it takes care of the unsightly limp.
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems33.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    The xray on the left shows the distraction gap (red arrow) to compensate for the shortening. The x-ray on the right shows formation of new bone in the distraction gap (green arrow).
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems34.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems35.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    <b>Before Removal</b>
                </p>
                <p class="text-justify">
                    Both the ostetomies have healed. The distraction gap is well consolidated.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-7">
                <p class="text-justify">
                    <b>After Fixator Removal</b>
                </p>
                <p class="text-justify">
                    The full length x-ray after removal is showing good correction. The tibia also has some shortening, which was addressed in the 2nd stage.
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems36.webp" alt="" class="w-80 img-c">
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();