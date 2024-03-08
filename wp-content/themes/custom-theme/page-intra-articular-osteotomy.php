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
                                    <td class="cs-hover active"> <a href="<?php echo $page_link . 'intra-articular-osteotomy/' ?>">Intra Articular Osteotomy </a></td>
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
        <h2 class="text-center"><span>Intra Articular Osteotomy</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    This 43 year old gentleman had an accident about one & a half years back. He presented to us with pain in the right knee. The plate & screws had been removed about 2 months prior to his visit here. The new x-ray showed malunited fracture (fracture united in wrong position) of the upper tibia as shown in the picture above – the red lines show the fracture lines with the step (yellow arrow) in the articular portion of lateral condyle.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems10.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems11.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">                  
                    <b>Post Surgery</b>
                </p>
                <p class="text-justify">                  
                    An intra-articular osteotomy was performed. In this procedure the fracture is recreated along the original fracture configuration and then it is fixed in the corrected and desired position. In this instance the fixation was done using Locking Plate (the screws lock with the plate, providing additional hold & stability) and cancellous screws.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>1 Year</b>
                </p>
                <p class="text-justify">
                    The x-ray picture at 1 year after reconstruction. The fracture is healed well. There is no articular step now. The osteoporosis of the bones has reduced markedly.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems12.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    The clinical pictures showing excellent alignment and function at the end of 1 year.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/joint-problems/joint-problems13.webp" alt="" class="w-80 img-c">
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();