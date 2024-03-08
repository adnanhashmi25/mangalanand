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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/male.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Vivek Hebbar</h2>
                <p>
                    MBBS, MD - General Medicine <br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>General Medicine</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>204</td>
                        <td>On Appointment</td>
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
        <h2 class="text-center"><span>About Dr. Vivek Hebbar</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <p class="text-justify">Dr. Vivek Hebbar is a General Physician at Mangal Anand Hospital in Chembur, Mumbai and has an experience of 30 years in this field. He completed MBBS from Karnataka University, India in 1987 and MD - General Medicine from Karnataka University, India in 1990.</p>
            <p class="text-justify">He is a member of Medical Council of India (MCI). Some of the services provided by the doctor are: Head and Neck Infection Treatment,Infectious Disease Treatment,Obsessive Compulsive Disorder (OCD) Treatment,Geriatric Healthcare and Cough Treatment etc.</p>
            <p class="text-justify">Dr. Vivek Hebbar practices at Mangal Anand Hospital and is available for consultation in Room No. 204 on Appointment.</p>
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();