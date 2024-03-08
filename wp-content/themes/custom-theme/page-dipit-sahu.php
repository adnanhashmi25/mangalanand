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
                <h2 class="font-weight-bold">Dr. Dipit Sahu</h2>
                <p>
                    MS - Orthopedics, Fellowship in Shoulder Surgery <br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Shoulder Surgery</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td>On Appointment</td>
                    </tr>
                </table>
                <p class="mt-3">
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://www.linkedin.com/in/dipit-sahu-52067547/">linkedin.com/in/dipit-sahu-52067547/</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Dipit Sahu</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
        <p class="text-justify">
            Dr. Dipit Sahu has been associated with Managal Anand Hospital from the last 10 years treating shoulder problems and performing Arthroscopic shoulder surgeries.
        </p>
            <!-- <p class="text-justify">Dr. Dipit Sahu is a Consultant Shoulder Surgeon at Mangal Anand Hospital. He has more than 11 years of rich experience in his field. He is the first Indian to be trained in France with the world’s pioneer in Shoulder Surgery - Laurent Lafosse and Giles Walch. Dr. Sahu practices exclusive Shoulder Orthopaedics along with being an expert in surgeries and treatment related to rotator cuff tear, recurrent dislocations, shoulder fractures, Shoulder Arthroscopy and Shoulder replacement. He also been trained in University Arkansas Hospital and completed a research fellowship at Mayo Clinic. He maintains an active industry interface and has many published articles in reputed journals to his name.</p>
            <p class="text-justify">Dr. Dipit Sahu practices at Mangal Anand Hospital and is available for consultation in Room No. 005 on appointment.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();