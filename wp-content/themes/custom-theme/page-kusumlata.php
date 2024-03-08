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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/dr-kusum.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Kusumlata</h2>
                <p>
                    BPT -Batchelor of Physiotherapy, MPT<br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Physiotherapy</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td>Monday to Saturday<br> 5pm - 9pm</td>
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
        <h2 class="text-center"><span>About Dr. Kusumlata</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <p class="text-justify">
                Dr. Kusumlata has been associated with Mangal Anand Hospital from the last 4 years providing physiotherapy treatment.
            </p>
            <!-- <p class="text-justify">Dr. Kusumlata is a Physiotherapist at Mangal Anand Hospital Chembur, Mumbai and has an experience of 5 years in this field. She completed MPT Sports-Physiotherapy.</p>
            <p class="text-justify">Dr. Kusumlata  practices at Mangal Anand Hospital and is available for consultation in Room No. 004 Monday to Saturday 5pm - 9pm.  You can book an appointment with Dr. Kusumlata  at Mangal Anand Hospital.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();