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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/Dr-Kunal-Makhija.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Kunal Makhija</h2>
                <p>
                    MS - Orthopedics<br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Joint Replacement</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td>Tuesday, Thursday and Saturday <br> 3pm - 4pm</td>
                    </tr>
                </table>
                <p class="mt-3">
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://www.linkedin.com/in/kunal-makhija-690a2712/">linkedin.com/in/kunal-makhija-690a2712/</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Kunal Makhija</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <p class="text-justify">
                Dr. Kunal Makhija has been associated with Mangal Anand Hospital as a joint replacement surgeon treating knee pain and hip pain patients.
            </p>
            <!-- <p class="text-justify">Dr. Kunal Makhija is an orthopaedic surgeon who specialises in joint replacement. He is a practitioner in Mangal Anand Hospital and has worked as a fellow in Germany as well. Owning a personal hospital, he is also a lecturer.</p>
            <p class="text-justify">He has prepared many presentations and has a journal published to his name. He specializes in navigated replacement surgeries, total knee replacement, and spine treatments. He is best known for injecting positivity into his patients.</p>
            <p class="text-justify">Dr. Kunal Makhija practices at Mangal Anand Hospital and is available for consultation in Room No. 005 on Tuesday, Thursday and Saturday 3pm - 4pm. You can book an appointment with Dr. Kunal Makhija at Mangal Anand Hospital.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();