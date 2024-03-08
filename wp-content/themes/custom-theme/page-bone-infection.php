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
        <h2 class="text-center"><span> Bone Infection</span></h2>
    </div>
    <div class="container containspacing boinf">
        <div class="row">
            <div class="col-md-12">
                <table class="cs-table">
                    <tr>
                        <td>
                            <table>
                                <tr class="cs-bl">
                                    <td> Infection </td>
                                    <td> Infected Nonunion </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr >
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'comminuted-fracture-distal-humerus/' ?>"> Femur </a></td>
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'proximal-tibia/' ?>"> Proximal Femur </a></td>
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