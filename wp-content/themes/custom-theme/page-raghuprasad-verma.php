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
                <h2 class="font-weight-bold">Dr. Raghuprasad Verma</h2>
                <p>
                    MS - Orthopedics, Fellowship in Spine Surgery <br>
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
                        <td>201</td>
                        <td>On Appointment</td>
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
        <h2 class="text-center"><span>About Dr. Raghuprasad Verma</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <p class="text-justify">
                Dr. Raghuprasad Verma has been associated with Managal Anand Hospital from the last 9 years treating spine problems.
            </p> 
            <!-- <p class="text-justify">Dr. Raghuprasad Verma is spine consultant at Mangal Anand Hospital.  Dr. Verma has over a decade experience in his field.  In addition to his educational qualifications Dr. Raghuprasad Verma has also completed spine fellowship at NUH, Singapore for 3 months in 2002. Dr. Raghuprasad verma has treated several patients suffering from spine problems in India and gives every patient the best medical care.  He has published several papers in India and aboard and is a member of prestigious medical associations.</p>
            <p class="text-justify">Dr. Raghuprasad Verma practices at Mangal Anand Hospital and is available for consultation in Room No. 204 on Tuesday and Thursday 7pm - 8pm.  You can book an appointment with Dr. Raghuprasad Verma at Mangal Anand Hospital.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();