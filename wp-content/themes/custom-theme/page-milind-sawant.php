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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/Dr-Milind-Sawant.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Milind Sawant</h2>
                <p>
                    MS - Orthopedics, FRCS Trauma & Orth<br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Arthroscopy</span><span>Joint replacement surgery</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>203</td>
                        <td>Saturday  <br> 2pm - 3pm</td>
                    </tr>
                </table>
                <p class="mt-3">
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://www.linkedin.com/in/mangal-parihar-68798995/?originalSubdomain=in">linkedin.com/in/mangal-parihar-68798995/</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Milind Sawant</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
        <p class="text-justify">Dr. Milind Sawant has been associated with Mangal Anand Hospital for the last 5 years treating patients for arthroscopy and joint replacement.</p>
            <!-- <p class="text-justify">Dr. Milind Sawant brings to Fortis Hospitals both national and international experience in knee joint replacement. Dr. Sawant is a name carved in the field of knee replacements and has performed hundreds of successful knee replacements under the Fortis Joint replacement program, which also includes his contributions to the society through various awareness programs and media interactions. Dr. Sawant being a strong pillar in taking the Joint Replacement program at Fortis hospitals ahead, has been using his vast experience to service the patients at Fortis Hospitals, Mumbai for the past several years.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();