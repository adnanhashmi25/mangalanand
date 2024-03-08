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
                                    <td class="cs-hover active"><a href="<?php echo $page_link . 'compound-fracture-vac/' ?>">Compound Fracture & VAC</a></td>
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
                                    <td class="cs-hover"><a href="<?php echo $page_link . 'distal-humerus/' ?>">Distal Humerus</a></td>
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
        <h2 class="text-center"><span>Compound Fracture & VAC</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures19.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    This 50 year old gentleman had a severe crush injury with full thickness skin loss, bone loss and dislocation at the ankle. He was treated initially elsewhere. A Hoffman type external fixator was applied and debridement was done. After about 2 weeks when the infection became uncontrolled he was advised an amputation.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    When he came to us this was the appearance of the wounds, foul smelling and the distal tibia was necrosed (dead).
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures20.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                The appearance of the wounds after 5 days of VAC dressings. The wound looks cleaner, no foul smell, the edema on the foot is reduced.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures21.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures22.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    The xrays after 1 week of debridement and VAC dressing. The xray on the left side is as seen from the front (AP view) and the one on the right is as seen from the side (Lateral view)
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    2 weeks after we started using the VAC dressings, the wound was healthy and Split-thickness Skin Graft was done.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures23.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>1 month</b>
                </p>
                <p class="text-justify">
                    1 month post surgery the graft is settling down well.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures24.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures25.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    <b>4 months</b>
                </p>
                <p class="text-justify">
                    4 months post surgery. The xrays show progress of healing at the talo-fibular junction. There is formation of bony connection between cut end of tibia and fibula, helping in the transmission of weight from tibia to the fibula.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>6 months</b>
                </p>
                <p class="text-justify">
                    6 months post surgery - x-rays show good healing at the talo-fibular junction and consolidation of extra bone at tibio-fibular junction.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures26.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>6 months</b>
                </p>
                <p class="text-justify">
                Appearance of the leg after 6 months. All wounds have healed, edema of the leg continues to reduce. Patient walking full weight bearing with the help of a brace to protect the union. He is expected to walk without the brace in another 6 months to 1 year once the fibula has hypertrophied.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures27.webp" alt="" class="w-80 img-c">
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();