<?php
/**
 * Template Name: Doctor Profile
 * 
 * 
 * @package custom-theme
 */

//


 get_header();
?>

<div class="our-doc-p">
    
    
    <div class="row">
        <div class="col-md-6 pr-0">
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/Dr-Parag-Lad.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Parag Lad</h2>
                <p>
                    Diploma Orthopedics, FCPS - Orthopedics<br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Hand & Microvascualr orthopedic surgeries</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Wednesday <br> 3.30pm to 5pm</td>
                    </tr>
                </table>
                <p class="mt-3">
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://www.linkedin.com/in/parag-lad-24168539/?originalSubdomain=in">linkedin.com/in/parag-lad-24168539/</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Parag Lad</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <p class="text-justify">
            Dr. Parag Lad has been associated with Managal Anand Hospital as hand surgeon and microvascualr surgeon from 5 years.
            </p>
            <!-- <p class="text-justify">An Orthopaedist in Mangal Anand Hospital, Dr Parag Lad has an experience of 12 years in the field of orthopaedics. Having completed his MBBS from Mumbai University, he has fellowships from reputed institutes in India and Singapore. He has handled more than 2000 surgeries under his care. Dr. Lad specializes in Brachial plexopathy, complex wrist disorders and microsurgical reconstruction in traumatic limbs.</p>
            <p class="text-justify">Dr. Parag Lad practices at Mangal Anand Hospital and is available for consultation in Room No. 003 on Wednesday From 3.30 PM to 5 PM. You can book an appointment with Dr. Parag Lad at Mangal Anand Hospital.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();