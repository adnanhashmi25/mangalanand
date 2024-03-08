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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/Dr-Abhishekh-Kini.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Abhishekh Kini</h2>
                <p>
                    DNB - Orthopedics, Dip. Sports Medicine from IOC<br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Foot & Ankle Surgeon</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>202</td>
                        <td>Wednesday <br> 7pm - 8pm</td>
                    </tr>
                </table>
                <p class="mt-3">
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://www.linkedin.com/in/abhishek-kini-ab379b27/">linkedin.com/in/abhishek-kini-ab379b27/</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Abhishekh Kini</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <p class="text-justify">
                Dr. Abhishek Kini has been associated with Mangal Anand Hospital from the last 3 years treating foot and ankle ailments.
            </p>
            <!-- <p class="text-justify">Dr. Abhishek Kini is a renowned orthopedic doctor at Mangal Anand Hospital, Mumbai.  For the past 11 Years, Dr. Abhishek Kini has worked as a Orthopedic Doctors and gained proficient skills and knowledge in the segments. Dr. Abhishek Kini pursued degree of MBBS from Krishna Institute of Medical Sciences, Karad, Maharashtra in 2007, MS - Orthopaedics from Shantharam Shetty Institute of Orthopaedics and Traumatology, Mangalore in 2011 and Fellowship - Foot and Ankle Reconstruction from London, UK in 2012.  Dr. Abhishek kini is a well-known member of the National Academy of Medical Sciences.  </p>
            <p class="text-justify">Dr. Abhishek Kini practices at Mangal Anand Hospital and is available for consultation in Room No. 202 on Wednesday From 7 PM to 8 PM. You can book an appointment with Dr. Abhishek Kini at Mangal Anand Hospital.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();