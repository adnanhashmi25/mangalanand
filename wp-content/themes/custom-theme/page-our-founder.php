<?php
/**
 * Template Name: Our Founder
 * 
 * 
 * @package custom-theme
 */

//


 get_header();
?>

<div>

    <?php get_template_part('template-parts/about-us') ?>
    <div class="heading mt-40">
            <h2 class="text-center"><span>Our Founder</span></h2>
    </div>
    <div class="container containspacing">
        <div class="row ">
            <div class="col-md-5">
            <img src="<?php bloginfo('template_directory') ?>/assets/images/PLP.webp" alt="" class="img-c" >
            </div>
            <div class="col-md-7">
                <h2 class="colb uline">Late Dr. L. M. Parihar</h2>
                <p class="colb">
                    MD, FCPS, FCCP (USA) <br>
                    Retired Prof. Medicine, BYL Nair Medical College & Hospital
                </p>
                <p>
                    Dr. L. M. Parihar founded Mangal Anand Hospital in the year 1980 along with his wife Mrs. Parvati L. Parihar. in Mumbai.  Originally from Jodhpur, Rajasthan Dr. L. M. Parihar came to Bombay for studies and settled in Chembur, Mumbai.  He was MBBC, MD from Grant Medical College, Mumbai.  
                </p>
                <p>
                    Dr. L. M. Parihar had worked to become one of the most respected person in the healthcare sector in the country.  His Qualifications were MD, FCPS, AFACC (USA), FCCP (USA) FICA (USA) Associate Fellow of Industrial Health (AFIH).  
                </p>
                <p>
                    He was the Retired Honorary Physician at Rajawadi Hospital and a Professor and P G teacher for MD at Bombay University.  He was also Ex-Medical Director at Jijamata Group of Hospitals and had opened Jijamata Hospital at Vashi, Alibaug, Oras and Sindhkhedraja.  He was the personal physician to Late Shree Vasantdada Patil, Ex CM Maharashtra, Ex Governor Rajasthan and an Ex Administrator Lions Club of Chembur Diagnostic Centre.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="mt-3">
                    His publications were Special Interest in Cardiology and Diabetes Mellitus and published 39 articles in Indian and Foreign Medical Journals Indexed in " Cumulative Index ''.
                </p>
                <p>
                    Late Dr. L. M. Parihar was a very Happy man surrounded by family and innumerable sincere friends and associates in different walks of life.  He was Happily married to Smt. Parvati Parihar an ardent selfless social worker.  
                </p>
            </div>
        </div>
        <div class="row mt-40">
            
            <div class="col-md-7">
                <h2 class="colb uline">Late Shrimati Parvati Parihar</h2>
                <p>
                Shrimati Parvati Parihar founded Mangal Anand Hospital with Dr. L. M. Parihar.  She was renowned “Social Activist” was elected three times as Municipal Corporator and subsequently served as an MLA. She worked as the Chairperson of ‘Pollution Control Board’. She was the active Governing Council Member of C.T.E.S.
                </p>
                
            </div>
            <div class="col-md-5">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/late_shrimati_parvati_parihar.webp" alt="" class="img-c">
            </div>
        </div>
        
    </div>


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();