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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/Dr-Pradip-Nemade.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Pradip Nemade</h2>
                <p>
                    MS - Orthopedics, DNB - Orthopedics<br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Orthopedic trauma</span><span>Arthroscopy</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Monday, Wednesday and Friday  <br> 6pm - 7 pm</td>
                    </tr>
                </table>
                <p class="mt-3">
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://www.linkedin.com/in/pradip-nemade-61601740/?originalSubdomain=in">linkedin.com/in/pradip-nemade-61601740/</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Pradip Nemade</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <p class="text-justify">
                Dr. Pradip Nemade has been associated with Mangal Anand Hospital from the last 5 years treating trauma and arthroscopy.
            </p>
            <!-- <p class="text-justify">Dr. Pradip Nemade has a master of surgery in Orthopaedics. Dr. Nemade currently practising at Mangal Anand hospital for 7 years. Dr. Nemade has gained efficiency in medical education with the ISAKOS research fellowship program, USA. Also an asst. professor at Mumbai, he is known for his work in detail. Dr. Pradip has numerous articles, case reports and reviews written to his name. He's a member of the Bombay Orthopaedic Society.</p>
            <p class="text-justify">Dr. Pradip Nemade practices at Mangal Anand Hospital and is available for consultation in Room No. 003 on Monday, Wednesday and Friday 6pm - 7 pm. You can book an appointment with Dr. Pradip Nemade at Mangal Anand Hospital.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();