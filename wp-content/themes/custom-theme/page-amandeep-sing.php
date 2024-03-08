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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/Dr-Amandeep-Sing.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Amandeep Singh Gujral </h2>
                <p>
                    DNB - Orthopedics, Fellowship in Spine Surgery<br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Endoscopic spine surgeries</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>204</td>
                        <td>Tuesday and Thursday <br> 7pm - 8pm</td>
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
        <h2 class="text-center"><span>About Dr. Amandeep Sing</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
        <p class="text-justify">
            Dr. Amandeep Singh has been associated with Managal Anand Hospital for the last 2 years treating spine patients treating spine problems.
        </p> 
            <!-- <p class="text-justify">Dr. Amandeep Gujaral is a spine surgeon at Mangal Anand Hospital with an experience of 4 years. He has completed his MBBS from Pune and has a diploma in orthopaedics from DU. He is a member of the IMA college of general practitioners. Dr. Gujaral specializes in Herniated Disc, Neck and Spine Biopsy, Disk slip, Spinal diseases and spinal deformity correction etc. He is popular for his sharp diagnosis and addressing the patients with ease and patience.</p>
            <p class="text-justify">Dr. Amandeep Sing practices at Mangal Anand Hospital and is available for consultation in Room No. 204 on Tuesday and Thursday 7pm - 8pm.  You can book an appointment with Dr. Amandeep Sing at Mangal Anand Hospital.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();