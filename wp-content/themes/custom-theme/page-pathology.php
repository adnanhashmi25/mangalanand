<?php
/**
 * Template Name: Service
 * 
 * 
 * @package custom-theme
 */

//


 get_header();
?>

<div>
    <?php get_template_part('template-parts/banner/other-services') ?>
    
    <div class="heading mt-40">
        <h2 class="text-center"><span>Pathology</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row">
            <div class="col-md-9">
                <p class="text-justify">
                    The Pathology services at Mangal Anand Hospital is equipped  to carry out the latest test on patients sample and assist clinicians in evaluation and diagnosis of diseases.
                </p>
                <p class="text-justify">
                    Aided by state of the art fully automated instruments & highly skilled HPC registered biomedical scientists under constant supervision of consultant pathologist with a high quality assurance. Mangal Anand Hospital provides near-perfect pathology services to all patients.
                </p>
                <p class="text-justify">
                    <b>PATHOLOGY SERVICES:</b> <br>
                    <ul>
                        <li>Biochem, Immunoassay & Hormonal assay, Hematology & Clinical Pathology, Molecular & Genetics, Histopathology & Cytology, Microbiology services.</li>
                        <li>Along with all routine tests with highly specialized test like ANA(IF), ANA Blott, NT- Pro BNP, PCT. Factor VIII Assay, six part differential count, etc are performed.</li>
                        <li>Services are available for indoor as well as outdoor patients.</li>
                    </ul>
                </p>
            </div>
            <div class="col-md-3">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Pathology-.webp" alt="">
            </div>
        </div>
        <div class="row illizarov-deformity">
            <div class="col-md-12">
                <p class="text-center">
                    <button type="submit" class="btn btn-primary ">Make an Appointment</button>
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