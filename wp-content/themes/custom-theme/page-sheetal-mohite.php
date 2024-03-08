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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/Dr-Sheetal-Mohite.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Sheetal Mohite</h2>
                <p>
                    MS - Orthopedics, Fellowship in spine<br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Spine surgeon</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>205</td>
                        <td>Wednesday, Saturday  <br> 5:30pm - 7pm, 10am - 11am</td>
                    </tr>
                </table>
                <p class="mt-3">
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://www.linkedin.com/in/">linkedin.com/in/</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Sheetal Mohite</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <p class="text-justify">
                Dr. Sheetal Mohite has been associated with Mangal Anand Hospital from the last 7 years treating spine related problems.
            </p>
            <!-- <p class="text-justify">Dr. Sheetal Mohite is a Orthopedist in Chembur, Mumbai and has an experience of 23 years in this field. Dr. Sheetal Mohite practices at Mangal Anand Hospital in Chembur, Mumbai and Shushrusha Citizens Co-Operative Hospital in Dadar West, Mumbai. He completed Diploma in Orthopaedics from Rural Medical College, Loni in 1998,DNB - Orthopedics/Orthopedic Surgery from National Board Of Examination in 1999 and MBBS from Bharati Vidyapeeth University, Pune in 1994.</p>
            <p class="text-justify">He is a member of Medical Council of India (MCI). Some of the services provided by the doctor are: Back Pain Treatment,Foot Drop,Knee Pain Treatment,Joint Pain Treatment and Hip Pain Treatment etc</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();