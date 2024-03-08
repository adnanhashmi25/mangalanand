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
                                    <td class="cs-hover"><a href="<?php echo $page_link . 'lrs-rotational-deformity-femur/' ?>">LRS - Rotational Deformity Femur(with Shortening)</a></td>
                                    <td class="cs-hover active"><a href="<?php echo $page_link . 'distal-femur/' ?>"> Distal Femur</a></td>
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
        <h2 class="text-center"><span>Distal Femur</span></h2>
    </div>
    <div class="container containspacing">
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity22.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    A patient with Hypophosphatemic Rickets, having deformities in both femur (thigh bone) and tibia (leg bone) on both the sides. This is like a wind-swept deformity - valgus alignment on one side and varus alignment on the other.
                </p>
                <p class="text-justify">
                    The full length xray helps in identifying the individual bone segment deformity e.g the xray picture on the right side shows a valgus in the distal femur (the outer angle of the thigh bone close to the knee is smaller than the normal range).
                </p>
                <p class="text-justify">
                    The green lines mark the joint lines of the hip & knee.
                </p>
                <p class="text-justify">
                    The red line marks the mechanical axis (load bearing axis) of the femur.
                </p>
                <p class="text-justify">
                    The blue line marks the normal angle of the distal femur to the knee joint.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-7">
                <p class="text-justify">                  
                    The rings are applied in a crooked fashion to mimic the bone inside. It is fixed to the bone using wires and threaded pins.
                </p>
                <p class="text-justify">                  
                    The juxta-articular hings has been fixed to the distal ring centering on the knee joint.
                </p>
                <p class="text-justify">                  
                    A distraction rod or motor is applied on the cancave side of the deformity, and distraction is done at the rate of 1mm/day.                            
                </p>
                <p class="text-justify">                  
                    The rule of similar triangles is applied and a rate of distraction of 1mm/day is calculated at the bone,  requiring more distraction at the motor.
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity23.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity24.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    At the completion of correction the mechanical axis(load bearing axis) has returned to normal.
                </p>
                <p class="text-justify">
                    The shift in the bone segments (translation) at the osteotomy has occured according to the osteotomy rule 2 i.e. when the osteotomy is away from the ACA (angulation correction axis - the plane of the hinges here), it results in some translation at the osteotomy.
                </p>
                <p class="text-justify">
                    The gap at the osteotomy site is filling up with new bone (regenerate).
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-7">
                <p class="text-justify">                  
                    When correction is required in both the limbs, we plan the correction of one bone at a time so that patient can continue to walk.
                </p>
                <p class="text-justify">                  
                    To cut short patient's total treatment time the general rule followed is to operate on one side femur and once the distraction is finished then operate the other side tibia, so that the patient can start weight bearing on the side operated first while the distraction goes on for the side operated later.
                </p>
                <p class="text-justify">                  
                    The excellent functional results at the end of treatment should be the goal in every patient.
                </p>
                <p class="text-justify">                  
                    The scars seen are the sites of pin insertion. The actual incision for cutting the bone is about 1-1.5 cm and requires just two sutures. With time even these pin site scars become lighter.
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-deformity/bone-deformity25.webp" alt="" class="w-80 img-c">
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();