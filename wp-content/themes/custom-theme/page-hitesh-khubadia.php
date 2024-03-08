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
                <h2 class="font-weight-bold">Dr. Hitesh Khubadia</h2>
                <p>
                    DNB - Orthopedics <br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Joint replacement</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>On Appointment</td>
                    </tr>
                </table>
                <p class="mt-3">
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://www.linkedin.com/in/hiteshkubadia/">linkedin.com/in/hiteshkubadia/</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Hitesh Khubadia</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <p class="text-justify">
                Dr. Hitesh Kubadia has been associated with Mangal Anand Hospital from the last 2 years performing joint replacements.
            </p>
            <!-- <p class="text-justify">Dr. Hitesh Kubadia is an accomplished Orthopaedic and Joint Replacement Surgeon. He has trained extensively and holds multiple fellowships. He brings rich experience from Austria in the art of getting alignments correct without using computer navigation and the fourth generation computer assisted surgeries from Australia.</p>
            <p class="text-justify">This experience enables him to offer surgeries for Total Knee Replacement using minimally invasive muscle preserving techniques (without violating the quadriceps mechanism) with no compromise on alignment and balance.</p>
            <p class="text-justify">Dr. Hitesh Kubadia is a practicing Orthopaedic and Joint Replacement Surgeon at Mangal Anand Hospital with his special interest being Total Knee Replacements by Minimally Invasive Technique.</p>
            <p class="text-justify">He graduated (MBBS) from Pune in 1998 and went on to finish his post graduation in Orthopaedics (MS (Orth)) in 2002. He topped the MS (Orth) exam that year.
                                    Trained in conventional & navigated Knee replacements, which comprise the latest dimensions in Knee Replacements, he has the ability to offer the suitable choice.</p>
            <p class="text-justify">Also being actively involved in academics, he keeps following the latest trends and advances in his field, so that he can offer the latest and the best available treatment to patients coming to Mangal Anand Hospital for treatment. He also keeps going abroad on short visits to various internationally acclaimed centers with the view of exchanging ideas and keeping abreast. Hence he now offers Total Knee Replacement using ‘Minimally Invasive Muscle Sparing Approach’.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();