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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/Dr-Divya-Ahuja.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Divya Ahuja</h2>
                <p>
                    DNB Orthopedics<br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Orthopedist</span><span>Deformity Correction</span><span>Limb Lengthening</span><span>Ilizarov</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>203</td>
                        <td>Tuesday and Thursday,Saturday<br>4pm - 7pm ,1pm - 4pm</td>
                    </tr>
                </table>
                <p class="mt-3">
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://www.linkedin.com/in/mangal-parihar-68798995/?originalSubdomain=in">linkedin.com/in/</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Divya Ahuja</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
        <p class="text-justify">
            Dr. Divya Ahuja has been associated with Mangal Anand Hospital from the last more than 15 years as orthopedic surgeon.  
        </p>
            <!-- <p class="text-justify">Dr. Divya Ahuja is an Orthopedic Surgeon in Chembur, Mumbai. Dr. Divya Ahuja practices at Mangal Anand Hospital in Chembur, Mumbai. He completed DNB (Orthopedics) from NBE new Delhi in 2008.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();