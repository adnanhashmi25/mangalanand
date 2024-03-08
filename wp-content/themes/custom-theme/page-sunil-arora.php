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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/dr-sunil-arora.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Sunil Arora</h2>
                <p>
                    MS - Orthopaedics, MBBS<br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Orthopedic Surgeon</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>205</td>
                        <td>Monday to Saturday  <br> 11am - 1 pm</td>
                    </tr>
                </table>
                <p class="mt-3">
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://in.linkedin.com/in/sunil-arora-67548180">linkedin.com/in/sunil-arora-67548180/</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Sunil Arora</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
        <p class="text-justify">
            Dr. Sunil Arora has been associated with Mangal Anand Hospital from the last 35 years in treating trauma and fracture.
        </p>
        <!-- <p class="text-justify">Dr. Sunil Arora is a Orthopedist in Chembur, Mumbai and has an experience of 34 years in this field. Dr. Sunil Arora practices at Mangal Anand Hospital in Chembur, Mumbai. He completed MBBS from University Of Agra in 1985 and MS - Orthopaedics from SN medical college in 1988.</p>
            <p class="text-justify">He is a member of Medical Council of India (MCI). Some of the services provided by the doctor are: Functional Orthopedics,Stem Cell Therapy For Orthopedic Conditions,Knee Arthroplasty,Neck and Spine Biopsy and Neuromuscular Disorders etc. </p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();