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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/Dr-Ranjan-Burnwal.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Ranjan Burnwal</h2>
                <p>
                    MS (Orthopedics), Fellowship in Arthroplasty & Joint Replacement <br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Arthroplasty</span><span>Joint Replacement</span><span>Complex Trauma</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>205</td>
                        <td>On Appointment</td>
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
        <h2 class="text-center"><span>Dr. Ranjan Burnwal</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
        <p class="text-justify">
            Dr. Rajan Burnwal has been associated with Mangal Anand Hospital for the last 1 month providing expertise treating joint replacement, arthroplasty and complex trauma
        </p>
            <!-- <p class="text-justify">Dr. Divya Ahuja is an Orthopedic Surgeon in Chembur, Mumbai. Dr. Divya Ahuja practices at Mangal Anand Hospital in Chembur, Mumbai. He completed DNB (Orthopedics) from NBE new Delhi in 2008.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();