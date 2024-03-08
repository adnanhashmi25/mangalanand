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
                                    <td class="cs-hover"> <a href="<?php echo $page_link . 'femur1/' ?>"> Femur </a></td>
                                    <td class="cs-hover active"> <a href="<?php echo $page_link . 'proximal-femur/' ?>"> Proximal Femur </a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="heading mt-40">
        <h2 class="text-center"><span>Proximal Femur</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-infection/bone-infection11.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    <b>2006</b>
                </p>
                <p class="text-justify">
                    At the time of presentation to us the Infected bone had weakened and broken (pathological fracture). The disuse osteoporosis of the bone is evident in the lower portion of the femur. The salt and pepper kind of appearance on the x-rays can represent a confusing picture of some kind of bone tumor.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>2006</b>
                </p>
                <p class="text-justify">
                    Unfortunately he developed infection and was re-operated during which an external fixator was applied to clear out the infection.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-infection/bone-infection12.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-4">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-infection/bone-infection13.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-8">
                <p class="text-justify">
                    <b>	2008</b>
                </p>
                <p class="text-justify">
                    He now had an infected stiff nonunion. Discharging sinus, pain and limp.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-7">
                <p class="text-justify">
                    <b>2009</b>
                </p>
                <p class="text-justify">
                    Again operated for the same, this time fixed with locking plate and dynamic hip screw.
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-infection/bone-infection14.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-infection/bone-infection15.webp" alt="" class="w-80 img-c">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    <b>At presentation - 2010</b>
                </p>
                <p class="text-justify">
                    At presentation he still had infection, discharging sinuses with pus draining out (red arrows). Painful limp. Depression. Lack of confidence.
                </p>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    <b>Xrays At Presentation</b>
                </p>
                <p class="text-justify">
                    The x-rays at presentation show loosening of screws, sclerosis at the fracture site, sequestrum (dead necrotic bone) (red arrow).
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-infection/bone-infection15.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    The FDG-PET Scan showed infection right under the plate and in the antero-lateral aspect of the proximal femur.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-infection/bone-infection16.webp" alt="" class="w-80 img-c">
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <p class="text-justify">
                    The arrows show calcium sulfate pellets loaded with antibiotic. These pellets help in the elution of high dose of antibiotic locally to the infected area. This helps in better control of infection and obviates the need to give intravenous antibiotics for a long time (recommended period in osteomyelitis is 4-6 weeks of IV antibiotics). The advantage of using the calcium sulfate pellets is that it gets completely absorbed in around 6 weeks time, thereby preventing the need for another surgery.
                </p>
                <img src="<?php bloginfo('template_directory') ?>/assets/images/bone-infection/bone-infection17.webp" alt="" class="w-80 img-c">
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();