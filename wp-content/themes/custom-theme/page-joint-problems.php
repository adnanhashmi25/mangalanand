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
<?php $page_link = get_page_link(); ?>

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
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'illizarov-hip-reconstruction/' ?>"> Ilizarov Hip Reconstruction </a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();