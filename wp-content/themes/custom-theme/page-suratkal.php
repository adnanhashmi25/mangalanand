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
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/male.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Suratkal</h2>
                <p>
                    MBBS, DNB Nephrology<br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>Nephrologist</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>201</td>
                        <td>Monday, Wednesday and Friday<br> 11am - 1pm</td>
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
        <h2 class="text-center"><span>About Dr. Suratkal</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <!-- <p class="text-justify">Dr. Mangal Parihar is an Orthopedic Surgeon, whose area of specialization includes Deformity Correction, Limb Lengthening using Ilizarov techniques and Orthofix fixators and Joint Replacement.</p>
            <p class="text-justify">Dr. Parihar’s reputation and expertise extends equally to children and adults in the diagnosis and treatment of special orthopedic conditions including congenital limb deformities, post-traumatic limb conditions, bone healing problems, bone defects, skeletal dysplasias, metabolic disorders, foot deformities, peripheral nerve disorders, and other miscellaneous developmental deformities.</p>
            <p class="text-justify">For the past many years, Dr. Parihar has dedicated his career to improving the lives of patients with limb disorders.</p>
            <p class="text-justify">He has performed numerous limb reconstruction surgeries using some of the most advanced surgical methods used for lengthening and deformity correction. He is the leading reconstruction orthopedic surgeon in the country and holds an acclaimed presence amongst his peers. He regularly receives referrals from across the country and overseas, for problems that have not resolved with conventional orthopedic surgery.</p>
            <p class="text-justify">He is constantly updating himself with the latest techniques to bring the best to the patient. Recently, he has been instrumental in bringing Hexapod — the six-axis correction system to India, which has revolutionized the world of deformity correction and limb reconstruction.</p>
            <p class="text-justify">Dr. Parihar's expertise includes performing the whole gamut of orthopedic surgeries; be it soft tissue surgeries, or internal or external fixation for fractures, or internal or external fixation for deformity correction and limb reconstruction, or combined internal and external fixation for limb lengthening and reconstruction, or joint reconstruction using external fixation or joint replacement.</p>
            <p class="text-justify">The surgeries are performed using state-of-the art equipment and techniques, with the utmost care for the soft tissue using minimally invasive techniques especially minimally invasive osteotomies. Dr. Parihar has popularized the Fixator Assisted HTO — a minimally invasive technique for precise correction of alignment in osteoarthritis of the knee, and intra-articular osteotomy for treatment of malunited proximal tibial fractures.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();