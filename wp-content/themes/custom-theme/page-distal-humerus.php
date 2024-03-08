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
    
    <div class="container containspacing ">
        <div class="row">
            <div class="col-md-12">
                <table class="cs-table">
                    <tr>
                        <td>
                            <table>
                                <tr class="cs-bl">
                                    <td > Acute Fracture </td>
                                    <td> Nonunion </td>
                                    <td> Malunion </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr >
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'comminuted-fracture-distal-humerus/' ?>">Comminuted Fracture Distal Humerus </a></td>
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'proximal-tibia/' ?>">Proximal Tibia </a></td>
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'femur/' ?>">Femur </a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td class="cs-hover"><a href="<?php echo $page_link . 'compound-fracture-vac/' ?>">Compound Fracture & VAC</a></td>
                                    <td class="cs-hover"><a href="<?php echo $page_link . 'tibia/' ?>">Tibia</a></td>
                                    <td class="no-br"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td class="no-br"></td>
                                    <td class="cs-hover active"><a href="<?php echo $page_link . 'distal-humerus/' ?>">Distal Humerus</a></td>
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
        <h2 class="text-center"><span>Distal Humerus</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>At Presentation</b>
                </p>
                <p class="text-justify">
                    This 58 year old lady had a fracture of the distal humerus (close to elbow) about 6 years back. She had already been operated twice for the fracture, once with the plate and second time the intra-medullary Ender's nails were introduced supplementing the plate with bone grafting. She had pain at the fracture site and restriction of elbow movements.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures35.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>At Presentation</b>
                </p>
                <p class="text-justify">
                    The x-rays showed the fracture was not united. The screws were coming out and the Ender’s nails were broken (red arrow).
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures36.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>2 days post surgery</b>
                </p>
                <p class="text-justify">
                    The broken and loose implants were removed, the fracture ends were freshened and fixation of both the medial and lateral pillars was done using locked plates. The movements of elbow 2 days after surgery.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures37.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>6 months post surgery</b>
                </p>
                <p class="text-justify">
                    The fracture healed well without any complications or bone grafting.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures38.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>9 months - function</b>
                </p>
                <p class="text-justify">
                    The movements at the elbow and excellent functional recovery.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures39.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>1 year - function</b>
                </p>
                <p class="text-justify">
                    The function continues to improve at 1 year.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures40.webp" alt="" class="w-80 img-c">
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();