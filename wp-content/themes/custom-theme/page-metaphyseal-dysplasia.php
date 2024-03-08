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
                                    <td class="cs-hover active"> <a href="<?php echo $page_link . 'metaphyseal-dysplasia/' ?>">Metaphyseal Dysplasia </a></td>
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

    <div class="heading mt-40">
        <h2 class="text-center"><span>Metaphyseal Dysplasia</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    This young girl from Nigeria had a complex deformity of the upper tibia. There was a valgus (outward bend), recurvatum (forward bend) and internal rotation (in-toeing - the foot faces inwards when the knee cap is facing is facing forward).
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity9.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    The correction was done using Hexapod external fixator system - which is a six-axis correction system. Six struts are connected to the Ilizarov ring fixator and the values are entered in a computer software. The software then gives a program on the correction process. The picture on extreme right is a screenshot of the software. The picture in the center (second from left) shows the fixator with Hexapod struts.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity10.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    The x-ray and clinical appearance after full correction. The right leg looks similar to the left one in appearance. On x-ray the axis is well corrected.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity11.webp" alt="" class="w-80 img-c">
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();