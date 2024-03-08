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
                                    <td class="cs-hover active"> <a href="<?php echo $page_link . 'proximal-tibia/' ?>">Proximal Tibia </a></td>
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
        <h2 class="text-center"><span>Proximal Tibia</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>Pre Treatment</b>
                </p>
                <p class="text-justify">
                    This 41 year old lay presented to us in 2008 with nonunion of left proximal tibia since 2001. This was a pretty difficult situation for her as she was diagnosed as a case of Multiple Myeloma. She was operated for the tumor in the tibia and thereafter several times for controlling infection and getting the fracture to unite. She was barely able to walk with support and on top of that was very much depressed.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures5.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>During Treatment</b>
                </p>
                <p class="text-justify">
                    We took up the challenge and an Ilizarov ring fixator was applied. Gradual compression at the fracture site was done and patient allowed to ambulate full weight bearing.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures6.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>Post fixator removal</b>
                </p>
                <p class="text-justify">
                    The fracture healed and the fixator was removed but not before 16 months had passed from the surgery. Initially everything went well. Bone grafting was done after 6 months to increase the circumference of healing area. The fracture seemed to be on its way to heal but after about 4 months of bone grafting the proximal wires came loose and had to be reinserted. At the same time the fibula was cut in the middle third to allow collapse at the nonunion site. The fixator was removed after 16 months from the first surgery here. All this while she was walking with the fixator and was largely pain-free apart from occasional discomfort. She is now 8 months post removal and active and freely mobile.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/fractures/fractures7.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        
    </div>


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();