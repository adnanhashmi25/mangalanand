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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/dr-anand-parihar.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Anand Parihar</h2>
                <p>
                    MD - Radiodiagnosis, DMRD, MBBS<br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Radiodiagnosis</span></p>
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
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://in.linkedin.com/in/anand-parihar-453b272">linkedin.com/in/anand-parihar-453b272</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Anand Parihar</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <p class="text-justify">
                 Professor, Dept. of Radiology at  K J Somaiya Medical College, Has been Examiner for Postgraduate Diplomas and degrees, DMRE, DMRD and MD for Mumbai & Saurashtra Universities.  Has been Inspector for granting approval for the DNB course in Radiology of the National Board of Examinations, Delhi.  Have inspected hospitals for approval in New Delhi, Coimbatore, Patna & Kolkatta, Chandigarh.
            </p>
            <!-- <p class="text-justify">
            Dr. Anand Parihar is a renowed Radiologist and also one of the Director of Mangal Anand Hospital.  Dr. Anand Parihar has worked as a Radiation Doctor and gained a proficient skills and knowledge in the segments.  Dr. Anand Parihar pursued degree of MBBS and MD - Radiology.
            </p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();