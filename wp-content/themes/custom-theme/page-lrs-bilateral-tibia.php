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
<?php $page_link = get_permalink( $post->post_parent );?>

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
                                    <td class="cs-hover active"> <a href="<?php echo $page_link . 'lrs-bilateral-tibia/' ?>"> LRS - Bilateral Tibia</a></td>
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

    <div class="heading mt-40">
        <h2 class="text-center"><span>LRS - Bilateral Tibia</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    In certain situations with an angular deformity in a single plane correction can be done acutely (i.e. the deformity is corrected in the surgery itself and then the bone is held in the corrected position either by an external fixator or internal fixation). So the patient comes out of the operation theater with the limb in corrected position.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-3">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity1.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-9">
                <p class="text-justify">
                    In the example shown here, the patient had a varus deformity of both tibiae (bow legs - reduced angle at the bone below the knee) with slight external rotation deformity of the tibiae (the feet pointing outward while the patellae [knee caps] face forward).
                </p>
                <p class="text-justify">
                    The deformities were corrected on both the sides acutely (at one go during surgery) and LRS (Limb Reconstruction System) fixator was applied on each side.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-7">
                <p class="text-justify">
                    The full length x-ray shows the seat of deformity as the upper tibial diaphysis (shaft). Femur on both the sides is normal.
                </p>
                <p class="text-justify">
                    A rotational profile CT scan is also done to find out the relationships of femoral neck axis, distal femoral condylar axis, proximal tibial axis and the intermalleolar axis. This helps in identifying any rotational deformity.
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity2.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity3.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    The x-ray picture here shows the fibular and tibial osteotomies.
                </p>
                <p class="text-justify">
                    Both the deformities, angulation and rotation were corrected acutely on the operating table. Since the osteotomy was made at the level of CORA there was no translation at the osteotomy site.
                </p>
                <p class="text-justify">
                    The bone is held in the corrected position with a LRS fixator.
                </p>
                <p class="text-justify">
                    The corrected bone axis is shown by the yellow line.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-7">
                <p class="text-justify">
                    The pictures here show the clinical appearance on completion of surgery.
                </p>
                <p class="text-justify">
                    The picture on the left shows how the fixators are applied in staggered manner, so as not to clash with each other. It also shows the corrected rotation – when the patellae are facing forward the feet are also facing forward (the feet were facing outward when placed in similar position).
                </p>
                <p class="text-justify">
                    The picture on the right shows the small incision for making the percutaneous osteotomy, skin staples have been applied.
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity4.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity5.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    The final x-ray pictures after fixator removal, showing excellent correction and a good bony union.
                </p>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();