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
                                    <td class="cs-hover"><a href="<?php echo $page_link . 'lrs-rotational-deformity-femur/' ?>">LRS - Rotational Deformity Femur(with Shortening)</a></td>
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


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();