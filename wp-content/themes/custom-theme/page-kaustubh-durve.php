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
                <h2 class="font-weight-bold">Dr. Kaustubh Durve</h2>
                <p>
                    MS - Orthopedics, MRCS (UK) <br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Arthroscopy</span><span>Joint Replacement Surgeon</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td>On Appointment</td>
                    </tr>
                </table>
                <p class="mt-3">
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://in.linkedin.com/in/kaustubh-durve-26a21b56">linkedin.com/in/kaustubh-durve-26a21b56</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Kaustubh Durve</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <p class="text-justify">
                Dr. Kaustubh Durve has been associated with Mangal Anand Hospital from the last 4 years treating sports medicine injuries, arthroscopy procedures and joint replacement surgeries.
            </p>
            <!-- <p class="text-justify">Dr. Kaustubh Ravindra Durve Post Graduate Diploma in Sports Medicine, MRCS (UK), MS - Orthopaedics, MBBS</p>
            <p class="text-justify">Dr. Kaustubh Durve, M.S.(Orth.), M.R.C.S. (England) is a specialist in knee and shoulder arthroscopy, sports injuries and joint replacement surgery. With his years of work in the United Kingdom and India, he has gathered vast experience in performing hundreds of specialized reconstructive knee and shoulder operations such as arthroscopic surgeries, knee joint replacements, shoulder joint replacements.</p>
            <p class="text-justify">He was also awarded a Diploma by the Faculty of Sport & Exercise Medicine (FSEM) of UK. He was Assistant Professor on the faculty of Orthopaedic Surgery at the K. J. Somaiya Medical College in Mumbai and still has a teaching attachment there. He has a number of regional and international research papers to his credit and spreads the message of excellence in knee and shoulder reconstructive surgery.</p>
            <p class="text-justify">Dr. Kaustubh Durve is one of the renowned doctors at Mangal Anand hospital for  Knee Replacement Surgery, Arthroscopic Knee Surgery, Arthroscopic Shoulder Surgery, Shoulder Replacement Surgery, and Sports Injury.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();