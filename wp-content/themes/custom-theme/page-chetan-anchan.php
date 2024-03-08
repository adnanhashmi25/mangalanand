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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/Dr-Chetan-Anchan.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Chetan Anchan</h2>
                <p>
                    MS-Orthopedics, Trained in Orthopedic Oncology from Tata Memorial Hospital <br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Ortho Oncologist</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>201</td>
                        <td>On Appointment</td>
                    </tr>
                </table>
                <p class="mt-3">
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://in.linkedin.com/in/chetan-anchan-1420901a7">linkedin.com/in/chetan-anchan-1420901a7</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Chetan Anchan</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <p class="text-justify">
                Dr. Chetan Anchan has been associated with Mangal Anand Hospital from the last 10 years as Orthopedic Onco surgeon treating bone tumors, orthopedic cancer ailments
            </p>
            <!-- <p class="text-justify">Dr. Chetan Anchan is an Orthopedist and has an experience of 21 years in this field. Dr. Chetan Anchan practices at Mangal Anand Hospital Chembur, Mumbai.  He has completed MS - Orthopaedics from Government Medical College, Mumbai in 2008, Diploma in Orthopaedics from Government Medical College, Mumbai in 2003 and FCPS - Mid. & Gynae from Government Medical College, Mumbai in 2010.</p>
            <p class="text-justify">He is a member of Maharastra Medical Council,Medical Council of India (MCI) and Indian Medical Association (IMA). Some of the services provided by the doctor are: Arthritis and Pain Management, Spinal Disorders, Scoliosis Correction, Soft Tissue Injury Management and Ligament and Tendon Repair etc. He is one of the renowned doctors at Mangal Anand hospital, Mumbai. </p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();