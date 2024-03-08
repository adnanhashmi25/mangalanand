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
                                    <td class="cs-hover active"><a href="<?php echo $page_link . 'tibia/' ?>">Tibia</a></td>
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
        <h2 class="text-center"><span>Tibia</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>At Presentation</b>
                </p>
                <p class="text-justify">
                    15 year old boy, presented with mobile nonunion of upper 1/3rd of tibia of 7 months duration. He had developed a pathological fracture secondary to osteomyelitis which was secondary to a previous surgery for hematoma evacuation. There was no sign of an active infection on presentation.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures28.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>Clinical Appearance at Presentation</b>
                </p>
                <p class="text-justify">
                    The clinical pictures at presentation. The scars are from previous surgery. The bowing of left tibia was at the fracture site. Otherwise had full range of motion prior to surgery.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures29.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures30.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    <b>2 days after surgery</b>
                </p>
                <p class="text-justify">
                During the surgery an Ilizarov ring fixator was applied. The fibula was cut (red arrow) to allow compression at fracture site. Gradual compression was done and he was encouraged to bear full weight.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>2 weeks post surgery</b>
                </p>
                <p class="text-justify">
                    Clinical pictures at the end of 2 weeks showing good range of motion. The scar seen on the left picture is from the fibula was cut.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures31.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>2 months</b>
                </p>
                <p class="text-justify">
                    2 months on, he continues to improve. The x-rays show signs of healing. There is formation of bridging callus.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures32.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>4 months post surgery - before fixator removal</b>
                </p>
                <p class="text-justify">
                    At 4 months the fracture is healed. The callus is well consolidated. The fixator was then removed after gradual disassembly.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures33.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>After fixator removal</b>
                </p>
                <p class="text-justify">
                The x-rays right after fixator removal. The callus is well seen (red arrow) bypassing &bridging the nonunion site.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures34.webp" alt="" class="w-80 img-c">
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();