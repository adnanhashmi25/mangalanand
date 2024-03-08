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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/Dr-Chasanal-Rathod.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Chasanal Rathod</h2>
                <p>
                    MS - Orthopedics, Fellowship in Pediatric Orthopedics<br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Pediatric Orthopedics</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Mondays  <br> 3pm - 5pm</td>
                    </tr>
                </table>
                <p class="mt-3">
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://www.linkedin.com/in/mangal-parihar-68798995/?originalSubdomain=in">linkedin.com/in/mangal-parihar-68798995/</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Chasanal Rathod</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
        <p class="text-justify">
            Dr. Chasanal Rathod has been associated with Managal Anand Hospital from the last 8 years treating pediatric orthopedic ailments.
        </p>
            <!-- <p class="text-justify">Dr. Chasanal Rathod is a Pediatric Orthopaedic Surgeon in Mumbai. She has an experience of 8 years in this field. Dr. Chasanal Rathod practices at SRCC Children's Hospital, Haji Ali, Mangal Anand Hospital in Chembur, Mumbai, Howard Newborn Centre in Malad West, Mumbai and Cerebral Palsy Clinic in Thane West, Thane. She completed MBBS from Mahatma Gandhi Institute of Medical Sciences, Wardha in 2004, Fellowship in Pediatric Orthopedic from Severance Hospital Yonsei University Seoul in 2012 and MS - Orthopaedics from Mahatma Gandhi Institute of Medical Sciences, Sewagram in 2009.She is a member of Bombay Orthopaedic Society Life member, Maharashtra Orthopaedic Association Life Member, Indian Orthopaedic Association Life member, Paediatric Orthopaedic Society of India Life member and Societe Internationale de Chirurgie Orthopedique et de Traumatologie- Associate Member. Some of the services provided by the doctor are Toe Walking, Musculoskeletal Infections, Limb Deformities, Neuromuscular Disorders and Skeletal Dysplasias etc.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();