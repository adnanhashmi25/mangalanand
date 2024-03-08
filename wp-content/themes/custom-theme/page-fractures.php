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
        <h2 class="text-center"><span>Fractures</span></h2>
    </div>
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


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();