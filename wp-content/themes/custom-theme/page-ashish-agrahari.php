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
                <h2 class="font-weight-bold">Dr. Ashish Agrahari</h2>
                <p>
                    MD Pathology<br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Pathology</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>203</td>
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
        <h2 class="text-center"><span>About Dr. Ashish Agrahari</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <p class="text-justify">
                Dr. Ashish Agrahari has been associated with last 5 years providing pathology services.
            </p>
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();