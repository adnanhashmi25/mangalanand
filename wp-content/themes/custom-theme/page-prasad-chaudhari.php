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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/Dr-Prasad-Chaudhari.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Prasad Chaudhari</h2>
                <p>
                    MS - Orthopaedics, DNB - Orthopedics <br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Orthopedic Surgeon</span><span>Arthroscopy</span><span>Knee replacement</span><span>Trauma and Fracture</span></p>
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
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://in.linkedin.com/in/prasad-chaudhari-408442a9">linkedin.com/in/prasad-chaudhari-408442a9</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Prasad Chaudhari</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
        <p class="text-justify">
            Dr. Prasad Chaudhari has been associated with Mangal Anand Hospital from last one year treating trauma, fracture, arthroscopy, knee replacement.
        </p>
            <!-- <p class="text-justify">Dr. Prasad Chaudhari is a Practicing Orthopaedic Surgeon with a specialized interest in Shoulder and Elbow Surgery, Trauma Surgery, Spinal Surgery, Revision Hip and Knee Arthrosplasty, Hip, Ankle and knee injury. He is completed his advanced fellowship training from Seoul, Korea in Shoulder and Elbow Surgery. He has got vast experience of 14 years in treating various Orthopaedic Disorders.  Dr. Prasad Choudhari is a consultant Orthopedic Surgeon at Mangal Anand Hospital.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();