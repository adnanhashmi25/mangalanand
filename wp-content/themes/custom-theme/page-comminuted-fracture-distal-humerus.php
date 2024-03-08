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
                                    <td class="cs-hover active"> <a href="<?php echo $page_link . 'comminuted-fracture-distal-humerus/' ?>">Comminuted Fracture Distal Humerus </a></td>
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
        <h2 class="text-center"><span>Comminuted Fracture Distal Humerus</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>At Presentation</b>
                </p>
                <p class="text-justify">
                    A 67 year old gentleman had a fall on the elbow and presented with fracture of distal end of humerus (lower portion forming part of the elbow joint). The fracture was extending into the articular portion of the humerus. This was complicated by the complex nature of the fracture as the bone was broken into many pieces –the larger fragments demarcated by red lines.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures1.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-6">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures2.webp" alt="">
            </div>
            <div class="col-md-6">
                <p>
                    <b>After surgery</b>
                </p>
                <p class="text-justify">
                    In the surgery the fragments were brought back into place and a congruent joint surface was restored. The fracture was fixed using locked plate on both the columns. The Olecranon was osteotomized for getting a better view of the joint, which was later fixed with a tension band.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>2 weeks post surgery</b>
                </p>
                <p class="text-justify">
                    The elbow movements and function 2 weeks after surgery. There is still some restriction of movement, which resolved over time to gain excellent function.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures3.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-4">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures4.webp" alt="">
            </div>
            <div class="col-md-8">
                <p class="text-justify">
                    <b>1 ½ year post surgery</b>
                </p>
                <p class="text-justify">
                    The fracture healed well as seen in the xrays. The implants are still holding well. We do not recommend implant removal routinely unless the implant is causing any trouble.
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