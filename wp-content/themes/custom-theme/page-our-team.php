<?php
/**
 * Template Name: Our Team
 * 
 * 
 * @package custom-theme
 */

//


 get_header();
?>
<?php $page_link = home_url(); ?>

<div>

    <?php get_template_part('template-parts/about-us') ?>
    <div class="heading mt-40">
        <h2 class="text-center"><span>Our Team</span></h2>
    </div>
    <div class="container containspacing">
        <p class="text-justify">
            Mangal Anand Hospital has a team of very efficient and trustworthy doctors led by Dr. Mangal Parihar, who not only believe in giving the right treatment but also believe in getting the best possible results according to the patient's needs. We believe in being proactive in terms of surgery but at the same time you will not find us jumping into surgery without proper preparations and planning. We do not offer a solution unless we believe we are going to improve the situation at the very least. The team takes pride in not giving in to patient pressure – we are here to make life easier for you not worse.
        </p>
        <img src="<?php bloginfo('template_directory') ?>/assets/images/Team-OT-1.webp" alt="" >
        <div class="row">
            
        </div>
        <div class="row">
            
        </div>
    </div>



    <?php get_template_part('template-parts/our-doctor-noform') ?>

<section>
    <div class="container">
        <div class="heading">
            <h2 class="text-center"><span> Available on Appointment</span></h2>
        </div>
        <div class="owl-carousel owl-theme mt-40" id="app-doctors">
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/prasad-chaudhari.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Prasad Chaudhari</h4>
                <p class="text-center">MS - Orthopaedics, DNB - Orthopedics</p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/prasad-chaudhari/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/chetan-anchan.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Chetan Anchan</h4>
                <p class="text-center">MS-Orthopedics, Trained in Orthopedic Oncology from Tata Memorial Hospital</p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/chetan-anchan/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/swaroop-hegde.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Swaroop Hegde</h4>
                <p class="text-center">MD - General Medicine and Endocrinology</p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/swaroop-hegde/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/dr-akshay-deshpande.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Akshay Deshpande</h4>
                <p class="text-center">MCH - Plastic & Reconstructive Surgery</p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/akshay-deshpande/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/amit-patil.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Amit Patil</h4>
                <p class="text-center">MCH - Plastic & Reconstructive Surgery</p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/amit-patil/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/devashri-patil.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Devashri Patil</h4>
                <p class="text-center">MS - ENT, Fellowship in Head and Neck Surgical Oncology</p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/devashri-patil/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/tushar-jadhav.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Tushar Jadhav</h4>
                <p class="text-center">DNB - Surgical Oncology</p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/tushar-jadhav/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/ankit-shah.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Ankit Shah</h4>
                <p class="text-center">MDS & Fellowship in Head & Neck Surgical Oncology</p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/ankit-shah/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Sayali</h4>
                <p class="text-center">Diploma in Anesthesiology</p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/sayali/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Sheetal</h4>
                <p class="text-center">MS - Orthopedics, Fellowship in spine</p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/sheetal/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Girish</h4>
                <p class="text-center"></p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/girish/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
            <div class="item">

            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Shilpa Shah</h4>
                <p class="text-center">DNB - Obstetrics & Gynecology</p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/shilpa-shah/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Preeti Jobalia</h4>
                <p class="text-center">DGO - Obstetrics & Gynecology</p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/preeti-jobalia/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Vidula</h4>
                <p class="text-center">MS - Obstetrics & Gynecology</p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/vidula/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/dr-ashish-agrahari.webp" alt="" class="img-c">
                <h4 class="text-center mt-3">Dr. Ashish Agrahari</h4>
                <p class="text-center">MD Pathology</p>
                <p class="text-center">
                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/ashish-agrahari/' ?>">View profile</a></button>
                    <button class="h-btn mt-2" data-toggle="modal" data-target="#exampleModal">Book an Appointment</button>
                </p>
            </div>
        </div>
    </div>
</section>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>

<?php
    get_footer();