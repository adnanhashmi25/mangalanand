<?php
/**
 * Our Doctors file.
 * 
 * @package custom-theme
 */
?>
<?php $page_link = home_url(); ?>

<div class="bluebox" style="position:static">
    <h2 class="text-center">Make an Appointment</h2>
    <div class="container">    
        <?php echo do_shortcode('[contact-form-7 id="197" title="Contact form 1"]') ?>
    </div>
</div>

<section class="our-doc d-none d-md-block">
    <div class="heading">
        <h2 class="text-center"><span>Our Doctors</span></h2>
    </div>
    <div class="mt-40 container mb-40">
        <div class="row pl-3">
            <div class="col-md-6">
                <div class="tab-content" id="myDocTabContent">
                    <div class="tab-pane fade" id="mangal-parihar" role="tabpanel" aria-labelledby="mangal-parihar-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Mangal Parihar </h2>
                                <h6 class="text-center"> MS Orthopaedics, MBBS </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopedist, Joint Replacement Surgeon</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>202</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday, Wednesday and Friday <br> 3 pm - 8 pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/mangal-parihar/' ?>">View profile</a></button>
                                    <button class="h-btn" data-toggle="modal" data-target="#exampleModal"> Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/mangal-parihar..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="anand-parihar" role="tabpanel" aria-labelledby="anand-parihar-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Anand Parihar </h2>
                                <h6 class="text-center"> MD - Radiodiagnosis, DMRD, MBBS </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Radiologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/anand-parihar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/dr-anand-parihar..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="maya-parihar" role="tabpanel" aria-labelledby="maya-parihar-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Maya Parihar Malhotra </h2>
                                <h6 class="text-center">MD - Pathology</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Pathologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/maya-parihar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/Dr-Maya..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="divyajyoti-kumar" role="tabpanel" aria-labelledby="divyajyoti-kumar-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Divya Ahuja</h2>
                                <h6 class="text-center">DNB Orthopedics</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopaedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>203</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Tuesday and Thursday,Saturday<br>4pm - 7pm ,1pm - 4pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/divyajyoti-kumar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/divyajyoti-kumar..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="chetan-anchan" role="tabpanel" aria-labelledby="chetan-anchan">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Chetan Anchan</h2>
                                <h6 class="text-center">MS-Orthopedics, Trained in Orthopedic Oncology from Tata Memorial Hospital</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopaedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/chetan-anchan/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/chetan-anchan..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="sunil-arora" role="tabpanel" aria-labelledby="sunil-arora-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Sunil Arora </h2>
                                <h6 class="text-center">MS - Orthopaedics, MBBS</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopaedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>205</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday to Saturday  <br> 11am - 1 pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/sunil-arora/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/dr-sunil-arora..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="prasad-chaudhari" role="tabpanel" aria-labelledby="prasad-chaudhari-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Prasad Chaudhari</h2>
                                <h6 class="text-center">MS - Orthopaedics, DNB - Orthopedics</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopaedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>204</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/prasad-chaudhari/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/prasad-chaudhari..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="kaustubh-durve" role="tabpanel" aria-labelledby="kaustubh-durve-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Kaustubh Durve</h2>
                                <h6 class="text-center">MS -Orthopedics, MRCS (UK)</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopaedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>004</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/kaustubh-durve/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="hitesh-khubadia" role="tabpanel" aria-labelledby="hitesh-khubadia-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Hitesh Kubadia</h2>
                                <h6 class="text-center">DNB - Orthopedics</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopaedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>002</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/hitesh-khubadia/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="abhishekh-kini" role="tabpanel" aria-labelledby="abhishekh-kini-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Abhishek Kini</h2>
                                <h6 class="text-center">DNB Orthopedics/Orthopedic Surgery, MBBS </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Foot & Ankle Surgeon </td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>202</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Wednesday <br> 7pm - 8pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/abhishekh-kini/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/abhishekh-kini..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="tab-pane fade" id="parag-lad" role="tabpanel" aria-labelledby="parag-lad-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Parag Lad</h2>
                                <h6 class="text-center">Diploma Orthopedics, FCPS - Orthopedics </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Hand Surgeon </td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>003</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Wednesday <br> 3.30pm to 5pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/parag-lad/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/parag-lad..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kunal-makhija" role="tabpanel" aria-labelledby="kunal-makhija-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Kunal Makhija</h2>
                                <h6 class="text-center">MS - Orthopedics</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Joint Replacement </td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>005</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Tuesday, Thursday and Saturday <br> 3pm - 4pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/kunal-makhija/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/kunal-makhija..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="tab-pane fade " id="sheetal-mohite" role="tabpanel" aria-labelledby="sheetal-mohite-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Sheetal Mohite </h2>
                                <h6 class="text-center">MS - Orthopedics, Fellowship in spine </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Spine </td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>205</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Wednesday, Saturday  <br> 5:30pm - 7pm, 10am - 11am</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/sheetal-mohite/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/sheetal-mohite..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="pradip-nemade" role="tabpanel" aria-labelledby="pradip-nemade-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Pradip Nemade </h2>
                                <h6 class="text-center">MS - Orthopedics, DNB - Orthopedics</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Arthroscopy & Trauma</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>Ground floor, Room no.3 </td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday, Wednesday and Friday  <br> 6pm - 7 pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/pradip-nemade/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/pradip-nemade..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="chasanal-rathod" role="tabpanel" aria-labelledby="chasanal-rathod-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Chasanal Rathod </h2>
                                <h6 class="text-center">MS - Orthopedics, Fellowship in Pediatric Orthopedics</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Pediatric Orthopedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>Ground floor, room no. 1</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Mondays  <br> 3pm - 5pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/chasanal-rathod/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/chasanal-rathod..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="dipit-sahu" role="tabpanel" aria-labelledby="dipit-sahu-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Dipit Sahu</h2>
                                <h6 class="text-center">MS - Orthopedics, Fellowship in Shoulder Surgery</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>005</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/dipit-sahu/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="milind-sawant" role="tabpanel" aria-labelledby="milind-sawant-tab">
                        <div class="row"> 
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Milind Sawant</h2>
                                <h6 class="text-center">MS - Orthopedics, FRCS Trauma & Orth</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Joint Replacement </td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>203</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Saturday  <br> 2pm - 3pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/milind-sawant/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/milind-sawant..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="amandeep-sing" role="tabpanel" aria-labelledby="amandeep-sing-tab">
                        <div class="row"> 
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Amandeep Singh Gujral</h2>
                                <h6 class="text-center">DNB - Orthopedics, Fellowship in Spine Surgery</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Spine </td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>204</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Tuesday and Thursday <br> 7pm - 8pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/amandeep-sing/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/amandeep-sing..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="raghuprasad-verma" role="tabpanel" aria-labelledby="raghuprasad-verma-tab">
                        <div class="row"> 
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Raghuprasad Verma</h2>
                                <h6 class="text-center">MS - Orthopedics, Fellowship in Spine Surgery</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Spine </td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/raghuprasad-verma/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="vivek-hebbar" role="tabpanel" aria-labelledby="vivek-hebbar-tab">
                        <div class="row"> 
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Vivek Hebbar</h2>
                                <h6 class="text-center">MBBS, MD - General Medicine </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>General Medicine</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>204</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/vivek-hebbar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="tab-pane fade" id="swaroop-hegde" role="tabpanel" aria-labelledby="swaroop-hegde-tab">
                        <div class="row"> 
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Swaroop Hegde</h2>
                                <h6 class="text-center">MD - General Medicine and Endocrinology </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>General Medicine</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>204</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/swaroop-hegde/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/swaroop-hegde..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="antima-jain" role="tabpanel" aria-labelledby="antima-jain-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Antima Jain</h2>
                                <h6 class="text-center">BPT - Bachelor of Physiotherapy</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Physiotherapist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>004</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday to Saturday<br> 8am to 1pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/antima-jain/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/antima-jain.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="tab-pane fade" id="kusum-latha" role="tabpanel" aria-labelledby="kusum-latha-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Kusumlata</h2>
                                <h6 class="text-center">BPT - Bachelor of Physiotherapy, MPT</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Physiotherapist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>004</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday to Saturday<br> 5pm - 9pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/kusumlata/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/dr-kusum..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="tab-pane fade" id="kanchan-suvasia" role="tabpanel" aria-labelledby="kanchan-suvasia-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Kanchan Suvasia</h2>
                                <h6 class="text-center">BPT - Bachelor of Physiotherapy </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Physiotherapist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>004</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday to Saturday<br> 4pm - 7pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/kanchan-suvasia/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/kanchan..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="sauramibika-tiwari" role="tabpanel" aria-labelledby="sauramibika-tiwari-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Sauramibika Tiwari</h2>
                                <h6 class="text-center">BPT - Bachelor of Physiotherapy</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Physiotherapist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>004</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday to Saturday<br> 9am - 2pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/sauramibika-tiwari/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/sourambika-tiwari..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>  -->
                    <div class="tab-pane fade" id="suman-bijlani" role="tabpanel" aria-labelledby="suman-bijlani-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Suman Bijlani</h2>
                                <h6 class="text-center">MBBS, MD - Obstetrics & Gynaecology, DGO, FCPS - Mid. & Gynae</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Gynecologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>203</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/suman-bijlani/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="preeti-jobalia" role="tabpanel" aria-labelledby="preeti-jobalia-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Preeti Jobalia</h2>
                                <h6 class="text-center">DGO - Obstetrics & Gynecology</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Gynecologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>003</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/preeti-jobalia/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="shilpa-shah" role="tabpanel" aria-labelledby="shilpa-shah-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Shilpa Shah</h2>
                                <h6 class="text-center">DNB - Obstetrics & Gynecology</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Gynecologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>001</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/shilpa-shah/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="vidula-daundkar" role="tabpanel" aria-labelledby="vidula-daundkar-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Vidula Daundkar</h2>
                                <h6 class="text-center">MS - Obstetrics & Gynecology</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Gynecologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/vidula-daundkar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ashutosh-kharche" role="tabpanel" aria-labelledby="ashutosh-kharche-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Ashutosh Kharche</h2>
                                <h6 class="text-center">MD - Radiodiagnosis, Fellowship in Vasclular & Interventional Radiology </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Vascular Surgeon</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>203</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Tuesday and Friday<br> 8pm - 9pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/ashutosh-kharche/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/ashutosh-kharche.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="tab-pane fade" id="amit-sahu" role="tabpanel" aria-labelledby="amit-sahu-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Amit Sahu</h2>
                                <h6 class="text-center">MD - Radiodiagnosis, Fellowship in Vasclular & Interventional Radiology</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Interventional Radiology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>205</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/amit-sahu/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/amit-sahu..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="satish-chougale" role="tabpanel" aria-labelledby="satish-chougale-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Satish Chougale</h2>
                                <h6 class="text-center">MD - Anesthesiology </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Anesthesiology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>002</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/satish-chougale/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sayali" role="tabpanel" aria-labelledby="sayali-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Sayali</h2>
                                <h6 class="text-center">Diploma in Anesthesiology </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Anesthesiology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>003</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/sayali/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sheetal" role="tabpanel" aria-labelledby="sheetal-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Sheetal</h2>
                                <h6 class="text-center"></h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Anesthesiology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>005</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/sheetal/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="suratkal" role="tabpanel" aria-labelledby="suratkal-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Suratkal</h2>
                                <h6 class="text-center">MBBS, DNB Nephrology </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Nephrologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday, Wednesday and Friday<br> 11am - 1pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/suratkal/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ashish-agrahari" role="tabpanel" aria-labelledby="ashish-agrahari-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Ashish Agrahari</h2>
                                <h6 class="text-center">MD Pathology</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Pathologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>203</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/ashish-agrahari/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="akshay-deshpande" role="tabpanel" aria-labelledby="akshay-deshpande-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Akshay Deshpande</h2>
                                <h6 class="text-center">MCH - Plastic & Reconstructive Surgery </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Plastic & Reconstructive</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>204</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/akshay-deshpande/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="amit-patil" role="tabpanel" aria-labelledby="amit-patil-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Amit Patil</h2>
                                <h6 class="text-center">MBBS, MCh - Plastic Surgery, MS - General Surgery </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Plastic & Reconstructive Surgery</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>004</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/amit-patil/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tushar-jadhav" role="tabpanel" aria-labelledby="tushar-jadhav-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Tushar Jadhav</h2>
                                <h6 class="text-center">DNB - Surgical Oncology </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Surgical Oncology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>005</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/tushar-jadhav/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/tushar-jadhav..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="devashri-patil" role="tabpanel" aria-labelledby="devashri-patil-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Devashri Patil</h2>
                                <h6 class="text-center">MS - ENT, Fellowship in Head and Neck Surgical Oncology</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Surgical Oncology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>001</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/devashri-patil/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ankit-shah" role="tabpanel" aria-labelledby="ankit-shah-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Ankit Shah</h2>
                                <h6 class="text-center">MDS & Fellowship in Head & Neck Surgical Oncology</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Surgical Oncology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/ankit-shah/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/ankit-shah..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dimple-chudgar" role="tabpanel" aria-labelledby="dimple-chudgar-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Dimple Chudgar</h2>
                                <h6 class="text-center">DNB (Obstetrics & Gynecology), Fellowship in Reproductive Medicine and Endoscopic Surgery</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Obstetrics & Gynecology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>204</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/dimple-chudgar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/dimple-chudgar..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sanjay-singh" role="tabpanel" aria-labelledby="sanjay-singh-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Sanjay Singh</h2>
                                <h6 class="text-center">DNB (Orthopedics), Fellowship in Shoulder & Elbow</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Shoulder & Elbow Surgery</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>203</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/sanjay-singh/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/sanjay-singh..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ajit-bhusagare" role="tabpanel" aria-labelledby="ajit-bhusagare-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Ajit Bhusagare</h2>
                                <h6 class="text-center">MS (Orthopedics), D. Orth</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Joint Replacement</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/ajit-bhusagare/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/ajit-bhusagare..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ranjan-burnwal" role="tabpanel" aria-labelledby="ranjan-burnwal-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Ranjan Burnwal</h2>
                                <h6 class="text-center">DNB (Obstetrics & Gynecology), Fellowship in Reproductive Medicine and Endoscopic Surgery</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Arthroplasty, Joint Replacement</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>205</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/ranjan-burnwal/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/ranjan-burnwal..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="santosh-patil" role="tabpanel" aria-labelledby="santosh-patil-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Santosh Patil</h2>
                                <h6 class="text-center">MS (Orthopedics)</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Arthroplasty, Joint Replacement</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>203</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/santosh-patil/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/santosh-patil..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="salil-patkar" role="tabpanel" aria-labelledby="salil-patkar-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Salil Patkar</h2>
                                <h6 class="text-center">DM (Medical Oncology)</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Medical Oncology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>204</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/salil-patkar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/salil-patkar..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pushpak-chirmade" role="tabpanel" aria-labelledby="pushpak-chirmade-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Pushpak Chirmade</h2>
                                <h6 class="text-center">DM (Medical Oncology)</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Medical Oncology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>202</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/pushpak-chirmade/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/pushpak-chirmade..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="amit-gupta" role="tabpanel" aria-labelledby="amit-gupta-tab">
                        <div class="row">
                            <div class="col-md-8 serv-text">
                                <h2 class="text-center">Dr. Amit Gupta</h2>
                                <h6 class="text-center">M.Ch. (Surgical Oncology)</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Surgical Oncology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/amit-gupta/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/amit-gupta..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-0">
                <p class="text-center p-b-10">
                    <select id="size_select" >
                        <option value="all">All</option>
                        <option value="orthopaedic">Orthopaedic</option>
                        <option value="general-medicine">General Medicine</option>
                        <option value="physiotherapist">Physiotherapy</option>
                        <option value="gynecology">Gynecology</option>
                        <option value="radiology">Interventional Radiology</option>
                        <option value="anesthesiology">Anesthesiology</option>
                        <option value="nephrology">Nephrology</option>
                        <option value="pathologist">Pathologist</option>
                        <option value="plastic-reconstruction">Plastic & Reconstruction</option>
                        <option value="surgical-oncology">Surgical Oncology</option>
                    </select>
                </p>
                <div id="all" class="size_chart">
                    <div class="state-box">
                        <div class="ofs" id="ofsh5">
                            <ul class="nav nav-tabs flex-column serv3a" id="myTab5" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#mangal-parihar" role="tab" aria-controls="mangal-parihar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Mangal Parihar <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#anand-parihar" role="tab" aria-controls="anand-parihar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Anand Parihar <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#maya-parihar" role="tab" aria-controls="maya-parihar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Maya Parihar Malhotra <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#divyajyoti-kumar" role="tab" aria-controls="divyajyoti-kumar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Divya Ahuja <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#chetan-anchan" role="tab" aria-controls="chetan-anchan"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Chetan Anchan <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#sunil-arora" role="tab" aria-controls="sunil-arora"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Sunil Arora <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#prasad-chaudhari" role="tab" aria-controls="prasad-chaudhari"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Prasad Chaudhari <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#kaustubh-durve" role="tab" aria-controls="kaustubh-durve"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Kaustubh Durve <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#hitesh-khubadia" role="tab" aria-controls="hitesh-khubadia"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Hitesh Kubadia <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#abhishekh-kini" role="tab"
                                        aria-controls="abhishekh-kini" aria-selected="false"> &nbsp; &nbsp; Dr. Abhishek Kini <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#parag-lad" role="tab"
                                        aria-controls="parag-lad" aria-selected="false"> &nbsp; &nbsp; Dr. Parag Lad <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#kunal-makhija" role="tab"
                                        aria-controls="kunal-makhija" aria-selected="false"> &nbsp; &nbsp; Dr. Kunal Makhija <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#sheetal-mohite" role="tab" aria-controls="sheetal-mohite"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Sheetal Mohite <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#pradip-nemade" role="tab" aria-controls="pradip-nemade"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Pradip Nemade <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#chasanal-rathod" role="tab" aria-controls="chasanal-rathod"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Chasanal Rathod <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#dipit-sahu" role="tab" aria-controls="dipit-sahu"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Dipit Sahu <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#milind-sawant" role="tab"
                                        aria-controls="milind-sawant" aria-selected="false"> &nbsp; &nbsp; Dr. Milind Sawant<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#amandeep-sing" role="tab"
                                        aria-controls="amandeep-sing" aria-selected="false"> &nbsp; &nbsp; Dr. Amandeep Singh Gujral<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#raghuprasad-verma" role="tab"
                                        aria-controls="raghuprasad-verma" aria-selected="false"> &nbsp; &nbsp; Dr. Raghuprasad Verma<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#vivek-hebbar" role="tab"
                                        aria-controls="vivek-hebbar" aria-selected="false"> &nbsp; &nbsp; Dr. Vivek Hebbar<i class="fas fa-arrow-right"></i></a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#swaroop-hegde" role="tab"
                                        aria-controls="swaroop-hegde" aria-selected="false"> &nbsp; &nbsp; Dr. Swaroop Hegde<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#kusum-latha" role="tab"
                                        aria-controls="kusum-latha" aria-selected="false"> &nbsp; &nbsp; Dr. Kusumlata <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#kanchan-suvasia" role="tab"
                                        aria-controls="kanchan-suvasia" aria-selected="false"> &nbsp; &nbsp; Dr. Kanchan Suvasia <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#suman-bijlani" role="tab"
                                        aria-controls="suman-bijlani" aria-selected="false"> &nbsp; &nbsp; Dr. Suman Bijlani <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#preeti-jobalia" role="tab"
                                        aria-controls="preeti-jobalia" aria-selected="false"> &nbsp; &nbsp; Dr. Preeti Jobalia <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#shilpa-shah" role="tab"
                                        aria-controls="shilpa-shah" aria-selected="false"> &nbsp; &nbsp; Dr. Shilpa Shah <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#vidula-daundkar" role="tab"
                                        aria-controls="vidula-daundkar" aria-selected="false"> &nbsp; &nbsp; Dr. Vidula Daundkar <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#ashutosh-kharche" role="tab"
                                        aria-controls="ashutosh-kharche" aria-selected="false"> &nbsp; &nbsp; Dr. Ashutosh Kharche <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#amit-sahu" role="tab"
                                        aria-controls="amit-sahu" aria-selected="false"> &nbsp; &nbsp; Dr. Amit Sahu <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#neelam-agarawal" role="tab"
                                        aria-controls="neelam-agarawal" aria-selected="false"> &nbsp; &nbsp; Dr. Neelam Agarawal <i class="fas fa-arrow-right"></i></a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#satish-chougale" role="tab"
                                        aria-controls="satish-chougale" aria-selected="false"> &nbsp; &nbsp; Dr. Satish Chougale <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#girish" role="tab"
                                        aria-controls="girish" aria-selected="false"> &nbsp; &nbsp; Dr. Girish <i class="fas fa-arrow-right"></i></a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#sayali" role="tab"
                                        aria-controls="sayali" aria-selected="false"> &nbsp; &nbsp; Dr. Sayali <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#sheetal" role="tab"
                                        aria-controls="sheetal" aria-selected="false"> &nbsp; &nbsp; Dr. Sheetal<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#suratkal" role="tab"
                                        aria-controls="suratkal" aria-selected="false"> &nbsp; &nbsp; Dr. Suratkal <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#ashish-agrahari" role="tab"
                                        aria-controls="ashish-agrahari" aria-selected="false"> &nbsp; &nbsp; Dr. Ashish Agrahari<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#akshay-deshpande" role="tab"
                                        aria-controls="akshay-deshpande" aria-selected="false"> &nbsp; &nbsp; Dr. Akshay Deshpande<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#amit-patil" role="tab"
                                        aria-controls="amit-patil" aria-selected="false"> &nbsp; &nbsp; Dr. Amit Patil<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#tushar-jadhav" role="tab"
                                        aria-controls="tushar-jadhav" aria-selected="false"> &nbsp; &nbsp; Dr. Tushar Jadhav<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#devashri-patil" role="tab"
                                        aria-controls="devashri-patil" aria-selected="false"> &nbsp; &nbsp; Dr. Devashri Patil<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#ankit-shah" role="tab"
                                        aria-controls="ankit-shah" aria-selected="false"> &nbsp; &nbsp; Dr. Ankit Shah<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#dimple-chudgar" role="tab"
                                        aria-controls="dimple-chudgar" aria-selected="false"> &nbsp; &nbsp; Dr. Dimple Chudgar<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#sanjay-singh" role="tab"
                                        aria-controls="sanjay-singh" aria-selected="false"> &nbsp; &nbsp; Dr. Sanjay Singh<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#ranjan-burnwal" role="tab"
                                        aria-controls="ranjan-burnwal" aria-selected="false"> &nbsp; &nbsp; Dr. Ranjan Burnwal<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#ajit-bhusagare" role="tab"
                                        aria-controls="ajit-bhusagare" aria-selected="false"> &nbsp; &nbsp; Dr. Ajit Bhusagare<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#santosh-patil" role="tab"
                                        aria-controls="santosh-patil" aria-selected="false"> &nbsp; &nbsp; Dr. Santosh Patil<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#salil-patkar" role="tab"
                                        aria-controls="salil-patkar" aria-selected="false"> &nbsp; &nbsp; Dr. Salil Patkar<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#pushpak-chirmade" role="tab"
                                        aria-controls="pushpak-chirmade" aria-selected="false"> &nbsp; &nbsp; Dr. Pushpak Chirmade<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#amit-gupta" role="tab"
                                        aria-controls="amit-gupta" aria-selected="false"> &nbsp; &nbsp; Dr. Amit Gupta<i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="orthopaedic" class="size_chart">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3b" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#mangal-parihar" role="tab" aria-controls="mangal-parihar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Mangal Parihar <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#divyajyoti-kumar" role="tab" aria-controls="divyajyoti-kumar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Divya Ahuja <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#chetan-anchan" role="tab" aria-controls="chetan-anchan"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Chetan Anchan <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#sunil-arora" role="tab" aria-controls="sunil-arora"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Sunil Arora <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#prasad-chaudhari" role="tab" aria-controls="prasad-chaudhari"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Prasad Chaudhari <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#kaustubh-durve" role="tab" aria-controls="kaustubh-durve"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Kaustubh Durve <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#hitesh-khubadia" role="tab" aria-controls="hitesh-khubadia"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Hitesh Kubadia <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#abhishekh-kini" role="tab"
                                        aria-controls="abhishekh-kini" aria-selected="false"> &nbsp; &nbsp; Dr. Abhishek Kini <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#parag-lad" role="tab"
                                        aria-controls="parag-lad" aria-selected="false"> &nbsp; &nbsp; Dr. Parag Lad <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#kunal-makhija" role="tab"
                                        aria-controls="kunal-makhija" aria-selected="false"> &nbsp; &nbsp; Dr. Kunal Makhija <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#sheetal-mohite" role="tab" aria-controls="sheetal-mohite"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Sheetal Mohite <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#pradip-nemade" role="tab" aria-controls="pradip-nemade"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Pradip Nemade <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#chasanal-rathod" role="tab" aria-controls="chasanal-rathod"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Chasanal Rathod <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#dipit-sahu" role="tab" aria-controls="dipit-sahu"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Dipit Sahu <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#milind-sawant" role="tab"
                                        aria-controls="milind-sawant" aria-selected="false"> &nbsp; &nbsp; Dr. Milind Sawant<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#amandeep-sing" role="tab"
                                        aria-controls="amandeep-sing" aria-selected="false"> &nbsp; &nbsp; Dr. Amandeep Singh Gujral<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#raghuprasad-verma" role="tab"
                                        aria-controls="raghuprasad-verma" aria-selected="false"> &nbsp; &nbsp; Dr. Raghuprasad Verma<i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="general-medicine" class="size_chart">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3c" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#swaroop-hegde" role="tab"
                                        aria-controls="swaroop-hegde" aria-selected="false"> &nbsp; &nbsp; Dr. Swaroop Hegde<i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="physiotherapist" class="size_chart">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3d" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#kusum-latha" role="tab"
                                        aria-controls="kusum-latha" aria-selected="false"> &nbsp; &nbsp; Dr. Kusumlata <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#kanchan-suvasia" role="tab"
                                        aria-controls="kanchan-suvasia" aria-selected="false"> &nbsp; &nbsp; Dr. Kanchan Suvasia <i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="gynecology" class="size_chart">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3e" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#suman-bijlani" role="tab"
                                        aria-controls="suman-bijlani" aria-selected="false"> &nbsp; &nbsp; Dr. Suman Bijlani <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#preeti-jobalia" role="tab"
                                        aria-controls="preeti-jobalia" aria-selected="false"> &nbsp; &nbsp; Dr. Preeti Jobalia <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#shilpa-shah" role="tab"
                                        aria-controls="shilpa-shah" aria-selected="false"> &nbsp; &nbsp; Dr. Shilpa Shah <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#vidula-daundkar" role="tab"
                                        aria-controls="vidula-daundkar" aria-selected="false"> &nbsp; &nbsp; Dr. Vidula Daundkar <i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="radiology" class="size_chart">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3f" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#anand-parihar" role="tab" aria-controls="anand-parihar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Anand Parihar <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#ashutosh-kharche" role="tab"
                                        aria-controls="ashutosh-kharche" aria-selected="false"> &nbsp; &nbsp; Dr. Ashutosh Kharche <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#amit-sahu" role="tab"
                                        aria-controls="amit-sahu" aria-selected="false"> &nbsp; &nbsp; Dr. Amit Sahu <i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="anesthesiology" class="size_chart">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3g" id="myTab" role="tablist">
                                <!-- <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#neelam-agarawal" role="tab"
                                        aria-controls="neelam-agarawal" aria-selected="false"> &nbsp; &nbsp; Dr. Neelam Agarawal <i class="fas fa-arrow-right"></i></a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#satish-chougale" role="tab"
                                        aria-controls="satish-chougale" aria-selected="false"> &nbsp; &nbsp; Dr. Satish Chougale <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#girish" role="tab"
                                        aria-controls="girish" aria-selected="false"> &nbsp; &nbsp; Dr. Girish <i class="fas fa-arrow-right"></i></a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#sayali" role="tab"
                                        aria-controls="sayali" aria-selected="false"> &nbsp; &nbsp; Dr. Sayali <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#sheetal" role="tab"
                                        aria-controls="sheetal" aria-selected="false"> &nbsp; &nbsp; Dr. Sheetal<i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="nephrology" class="size_chart">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3h" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#suratkal" role="tab"
                                        aria-controls="suratkal" aria-selected="false"> &nbsp; &nbsp; Dr. Suratkal <i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="pathologist" class="size_chart">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3i" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#maya-parihar" role="tab" aria-controls="maya-parihar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Maya Parihar Malhotra <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#ashish-agrahari" role="tab"
                                        aria-controls="ashish-agrahari" aria-selected="false"> &nbsp; &nbsp; Dr. Ashish Agrahari<i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="plastic-reconstruction" class="size_chart">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3j" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#akshay-deshpande" role="tab"
                                        aria-controls="akshay-deshpande" aria-selected="false"> &nbsp; &nbsp; Dr. Akshay Deshpande<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#amit-patil" role="tab"
                                        aria-controls="amit-patil" aria-selected="false"> &nbsp; &nbsp; Dr. Amit Patil<i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="surgical-oncology" class="size_chart">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3k" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#tushar-jadhav" role="tab"
                                        aria-controls="tushar-jadhav" aria-selected="false"> &nbsp; &nbsp; Dr. Tushar Jadhav<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#devashri-patil" role="tab"
                                        aria-controls="devashri-patil" aria-selected="false"> &nbsp; &nbsp; Dr. Devashri Patil<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#ankit-shah" role="tab"
                                        aria-controls="ankit-shah" aria-selected="false"> &nbsp; &nbsp; Dr. Ankit Shah<i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-doc d-none d-block d-md-none">
    <div class="heading">
        <h2 class="text-center"><span>Our Doctors</span></h2>
    </div>
    <div class="mt-40 container mb-40">
        <div class="row pl-3">
            <div class="col-12">
                <div class="tab-content" id="myDocTabContent">
                    <div class="tab-pane fade" id="mangal-parihar1" role="tabpanel" aria-labelledby="mangal-parihar-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Mangal Parihar </h2>
                                <h6 class="text-center"> MS Orthopaedics, MBBS </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopedist, Joint Replacement Surgeon</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>202</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday, Wednesday and Friday <br> 3 pm - 8 pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/mangal-parihar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/mangal-parihar..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="anand-parihar1" role="tabpanel" aria-labelledby="anand-parihar-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Anand Parihar </h2>
                                <h6 class="text-center"> MD - Radiodiagnosis, DMRD, MBBS </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Radiologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/anand-parihar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/dr-anand-parihar..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="maya-parihar1" role="tabpanel" aria-labelledby="maya-parihar-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Maya Parihar Malhotra </h2>
                                <h6 class="text-center">MD - Pathology </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Pathologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/maya-parihar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/Dr-Maya..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="divyajyoti-kumar1" role="tabpanel" aria-labelledby="divyajyoti-kumar-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Divya Ahuja</h2>
                                <h6 class="text-center">DNB Orthopedics</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopaedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>203</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Tuesday and Thursday,Saturday<br>4pm - 7pm ,1pm - 4pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/divyajyoti-kumar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/divyajyoti-kumar..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="chetan-anchan1" role="tabpanel" aria-labelledby="chetan-anchan">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Chetan Anchan</h2>
                                <h6 class="text-center">MS-Orthopedics, Trained in Orthopedic Oncology from Tata Memorial Hospital</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopaedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/chetan-anchan/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/chetan-anchan..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="sunil-arora1" role="tabpanel" aria-labelledby="sunil-arora-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Sunil Arora </h2>
                                <h6 class="text-center">MS - Orthopaedics, MBBS</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopaedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>205</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday to Saturday  <br> 11am - 1 pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/sunil-arora/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/dr-sunil-arora..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="prasad-chaudhari1" role="tabpanel" aria-labelledby="prasad-chaudhari-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Prasad Chaudhari</h2>
                                <h6 class="text-center">MS - Orthopaedics, DNB - Orthopedics</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopaedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>204</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/prasad-chaudhari/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/prasad-chaudhari..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="kaustubh-durve1" role="tabpanel" aria-labelledby="kaustubh-durve-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Kaustubh Durve</h2>
                                <h6 class="text-center">MS -Orthopedics, MRCS (UK)</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopaedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>004</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/kaustubh-durve/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="hitesh-khubadia1" role="tabpanel" aria-labelledby="hitesh-khubadia-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Hitesh Kubadia</h2>
                                <h6 class="text-center">DNB - Orthopedics</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopaedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>002</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/hitesh-khubadia/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="abhishekh-kini1" role="tabpanel" aria-labelledby="abhishekh-kini-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Abhishek Kini</h2>
                                <h6 class="text-center">DNB - Orthopedics, Dip. Sports Medicine from IOC </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Foot & Ankle Surgeon </td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>202</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Wednesday <br> 7pm - 8pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/abhishekh-kini/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/abhishekh-kini..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="tab-pane fade" id="parag-lad1" role="tabpanel" aria-labelledby="parag-lad-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Parag Lad</h2>
                                <h6 class="text-center">Diploma Orthopedics, FCPS - Orthopedics</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Hand Surgeon </td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>003</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Wednesday <br> 3.30pm to 5pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/parag-lad/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/parag-lad..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kunal-makhija1" role="tabpanel" aria-labelledby="kunal-makhija-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Kunal Makhija</h2>
                                <h6 class="text-center">MS - Orthopedics</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Joint Replacement </td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>005</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Tuesday, Thursday and Saturday <br> 3pm - 4pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/kunal-makhija/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/kunal-makhija..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="tab-pane fade " id="sheetal-mohite1" role="tabpanel" aria-labelledby="sheetal-mohite-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Sheetal Mohite </h2>
                                <h6 class="text-center">MS - Orthopedics, Fellowship in spine</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Spine </td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>205</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Wednesday, Saturday  <br> 5:30pm - 7pm, 10am - 11am</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/sheetal-mohite/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/sheetal-mohite..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="pradip-nemade1" role="tabpanel" aria-labelledby="pradip-nemade-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Pradip Nemade </h2>
                                <h6 class="text-center">MS - Orthopedics, DNB - Orthopedics</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Arthroscopy & Trauma</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>Ground floor, Room no.3 </td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday, Wednesday and Friday  <br> 6pm - 7 pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/pradip-nemade/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/pradip-nemade..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="chasanal-rathod1" role="tabpanel" aria-labelledby="chasanal-rathod-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Chasanal Rathod </h2>
                                <h6 class="text-center">MS - Orthopedics, Fellowship in Pediatric Orthopedics</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Pediatric Orthopedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>Ground floor, room no. 1</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Mondays  <br> 3pm - 5pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/chasanal-rathod/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/chasanal-rathod..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="dipit-sahu1" role="tabpanel" aria-labelledby="dipit-sahu-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Dipit Sahu</h2>
                                <h6 class="text-center">MS - Orthopedics, Fellowship in Shoulder Surgery</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Orthopedics</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>005</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/dipit-sahu/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="milind-sawant1" role="tabpanel" aria-labelledby="milind-sawant-tab">
                        <div class="row"> 
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Milind Sawant</h2>
                                <h6 class="text-center">MS - Orthopedics, FRCS Trauma & Orth</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Joint Replacement </td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>203</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Saturday  <br> 2pm - 3pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/milind-sawant/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/milind-sawant..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="amandeep-sing1" role="tabpanel" aria-labelledby="amandeep-sing-tab">
                        <div class="row"> 
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Amandeep Singh Gujral</h2>
                                <h6 class="text-center">DNB - Orthopedics, Fellowship in Spine Surgery </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Spine </td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>204</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Tuesday and Thursday <br> 7pm - 8pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/amandeep-sing/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/amandeep-sing..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="raghuprasad-verma1" role="tabpanel" aria-labelledby="raghuprasad-verma-tab">
                        <div class="row"> 
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Raghuprasad Verma</h2>
                                <h6 class="text-center">MS - Orthopedics, Fellowship in Spine Surgery</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Spine </td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/raghuprasad-verma/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="vivek-hebbar1" role="tabpanel" aria-labelledby="vivek-hebbar-tab">
                        <div class="row"> 
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Vivek Hebbar</h2>
                                <h6 class="text-center">MBBS, MD - General Medicine </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>General Medicine</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>204</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/vivek-hebbar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="tab-pane fade" id="swaroop-hegde1" role="tabpanel" aria-labelledby="swaroop-hegde-tab">
                        <div class="row"> 
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Swaroop Hegde</h2>
                                <h6 class="text-center">MD - General Medicine and Endocrinology </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>General Medicine</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>204</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/swaroop-hegde/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/swaroop-hegde..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="antima-jain1" role="tabpanel" aria-labelledby="antima-jain-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Antima Jain</h2>
                                <h6 class="text-center">BPT - Bachelor of Physiotherapy</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Physiotherapist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>004</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday to Saturday<br> 8am to 1pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/antima-jain/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/antima-jain.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="tab-pane fade" id="kusum-latha1" role="tabpanel" aria-labelledby="kusum-latha-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Kusumlata</h2>
                                <h6 class="text-center">BPT - Bachelor of Physiotherapy, MPT</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Physiotherapist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>004</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday to Saturday<br> 5pm - 9pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/kusumlata/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/dr-kusum..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="tab-pane fade" id="kanchan-suvasia1" role="tabpanel" aria-labelledby="kanchan-suvasia-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Kanchan Suvasia</h2>
                                <h6 class="text-center">BPT - Bachelor of Physiotherapy </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Physiotherapist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>004</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday to Saturday<br> 4pm - 7pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/kanchan-suvasia/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/kanchan..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="sauramibika-tiwari1" role="tabpanel" aria-labelledby="sauramibika-tiwari-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Sauramibika Tiwari</h2>
                                <h6 class="text-center">BPT - Bachelor of Physiotherapy</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Physiotherapist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>004</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday to Saturday<br> 9am - 2pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/sauramibika-tiwari/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/sourambika-tiwari..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>  -->
                    <div class="tab-pane fade" id="suman-bijlani1" role="tabpanel" aria-labelledby="suman-bijlani-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Suman Bijlani</h2>
                                <h6 class="text-center">MBBS, MD - Obstetrics & Gynaecology, DGO, FCPS - Mid. & Gynae</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Gynecologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>203</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/suman-bijlani/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="preeti-jobalia1" role="tabpanel" aria-labelledby="preeti-jobalia-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Preeti Jobalia</h2>
                                <h6 class="text-center">DGO - Obstetrics & Gynecology</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Gynecologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>003</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/preeti-jobalia/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="shilpa-shah1" role="tabpanel" aria-labelledby="shilpa-shah-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Shilpa Shah</h2>
                                <h6 class="text-center">DNB - Obstetrics & Gynecology</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Gynecologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>001</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/shilpa-shah/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="vidula-daundkar1" role="tabpanel" aria-labelledby="vidula-daundkar-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Vidula Daundkar</h2>
                                <h6 class="text-center">MS - Obstetrics & Gynecology</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Gynecologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/vidula-daundkar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ashutosh-kharche1" role="tabpanel" aria-labelledby="ashutosh-kharche-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Ashutosh Kharche</h2>
                                <h6 class="text-center">MD - Radiodiagnosis, Fellowship in Vasclular & Interventional Radiology</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Vascular Surgeon</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>203</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Tuesday and Friday<br> 8pm - 9pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/ashutosh-kharche/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/ashutosh-kharche.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="tab-pane fade" id="amit-sahu1" role="tabpanel" aria-labelledby="amit-sahu-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Amit Sahu</h2>
                                <h6 class="text-center">MD - Radiodiagnosis, Fellowship in Vasclular & Interventional Radiology </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Interventional Radiology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>205</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/amit-sahu/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/amit-sahu..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="satish-chougale1" role="tabpanel" aria-labelledby="satish-chougale-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Satish Chougale</h2>
                                <h6 class="text-center">MD - Anesthesiology </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Anesthesiology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>002</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/satish-chougale/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sayali1" role="tabpanel" aria-labelledby="sayali-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Sayali</h2>
                                <h6 class="text-center">Diploma in Anesthesiology </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Anesthesiology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>003</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/sayali/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sheetal1" role="tabpanel" aria-labelledby="sheetal-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Sheetal</h2>
                                <h6 class="text-center"></h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Anesthesiology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>005</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/sheetal/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-female..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="suratkal1" role="tabpanel" aria-labelledby="suratkal-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Suratkal</h2>
                                <h6 class="text-center">MBBS, DNB Nephrology </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Nephrologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>Monday, Wednesday and Friday<br> 11am - 1pm</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/suratkal/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ashish-agrahari1" role="tabpanel" aria-labelledby="ashish-agrahari-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Ashish Agrahari</h2>
                                <h6 class="text-center">MD Pathology</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Pathologist</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>203</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/ashish-agrahari/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="akshay-deshpande1" role="tabpanel" aria-labelledby="akshay-deshpande-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Akshay Deshpande</h2>
                                <h6 class="text-center">MCH - Plastic & Reconstructive Surgery </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Plastic & Reconstructive</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>204</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/akshay-deshpande/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="amit-patil1" role="tabpanel" aria-labelledby="amit-patil-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Amit Patil</h2>
                                <h6 class="text-center">MCH - Plastic & Reconstructive Surgery </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Plastic & Reconstructive Surgery</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>004</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/amit-patil/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tushar-jadhav1" role="tabpanel" aria-labelledby="tushar-jadhav-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Tushar Jadhav</h2>
                                <h6 class="text-center">DNB - Surgical Oncology </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Surgical Oncology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>005</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/tushar-jadhav/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/tushar-jadhav..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="devashri-patil1" role="tabpanel" aria-labelledby="devashri-patil-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Devashri Patil</h2>
                                <h6 class="text-center">MS - ENT, Fellowship in Head and Neck Surgical Oncology</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Surgical Oncology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>001</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/devashri-patil/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/doctor-male..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ankit-shah1" role="tabpanel" aria-labelledby="ankit-shah-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Ankit Shah</h2>
                                <h6 class="text-center">MDS & Fellowship in Head & Neck Surgical Oncology </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Surgical Oncology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/ankit-shah/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/ankit-shah..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dimple-chudgar1" role="tabpanel" aria-labelledby="dimple-chudgar-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Dimple Chudgar</h2>
                                <h6 class="text-center">DNB (Obstetrics & Gynecology), Fellowship in Reproductive Medicine and Endoscopic Surgery </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Obstetrics & Gynecology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>204</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/dimple-chudgar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/dimple-chudgar..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sanjay-singh1" role="tabpanel" aria-labelledby="sanjay-singh-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Sanjay Singh</h2>
                                <h6 class="text-center">DNB (Orthopedics), Fellowship in Shoulder & Elbow </h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Shoulder & Elbow Surgery</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>203</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/sanjay-singh/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div >
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/sanjay-singh..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ajit-bhusagare1" role="tabpanel" aria-labelledby="ajit-bhusagare-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Ajit Bhusagare</h2>
                                <h6 class="text-center">MS (Orthopedics), D. Orth</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Joint Replacement</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/ajit-bhusagare/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="serv-img">
                                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/ajit-bhusagare..webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ranjan-burnwal1" role="tabpanel" aria-labelledby="ranjan-burnwal-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Ranjan Burnwal</h2>
                                <h6 class="text-center">DNB (Obstetrics & Gynecology), Fellowship in Reproductive Medicine and Endoscopic Surgery</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Arthroplasty, Joint Replacement</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>205</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/ranjan-burnwal/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="serv-img">
                                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/ranjan-burnwal..webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="santosh-patil1" role="tabpanel" aria-labelledby="santosh-patil-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Santosh Patil</h2>
                                <h6 class="text-center">MS (Orthopedics)</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Arthroplasty, Joint Replacement</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>203</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/santosh-patil/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div class="serv-img">
                                <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/santosh-patil..webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="salil-patkar1" role="tabpanel" aria-labelledby="salil-patkar-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Salil Patkar</h2>
                                <h6 class="text-center">DM (Medical Oncology)</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Medical Oncology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>204</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/salil-patkar/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/salil-patkar..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pushpak-chirmade1" role="tabpanel" aria-labelledby="pushpak-chirmade-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Pushpak Chirmade</h2>
                                <h6 class="text-center">DM (Medical Oncology)</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Medical Oncology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>202</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/pushpak-chirmade/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/pushpak-chirmade..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="amit-gupta1" role="tabpanel" aria-labelledby="amit-gupta-tab">
                        <div class="row">
                            <div class="col-md-12 serv-text">
                                <h2 class="text-center">Dr. Amit Gupta</h2>
                                <h6 class="text-center">M.Ch. (Surgical Oncology)</h6>
                                <table class="doc-table">
                                    <tr>
                                        <td>Speciality</td>
                                        <td>Surgical Oncology</td>
                                    </tr>
                                    <tr>
                                        <td>Consulting Room</td>
                                        <td>201</td>
                                    </tr>
                                    <tr>
                                        <td>Consultation <br> Timing</td>
                                        <td>On Appointment</td>
                                    </tr>
                                </table>
                                <p class="text-center">
                                    <button class="h-btn"> <a href="<?php echo $page_link . '/our-doctors/amit-gupta/' ?>">View profile</a></button>
                                    <button class="h-btn">Book an Appointment</button>
                                </p>
                            </div>
                            <div>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/doctors/amit-gupta..webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <div class="row">  
            <div class="col-3"></div>          
            <div class="col-9 pr-0">
            <p class="text-center p-b-10">
                    <select id="size_select1" >
                        <option value="all1">All</option>
                        <option value="orthopaedic1">Orthopaedic</option>
                        <option value="general-medicine1">General Medicine</option>
                        <option value="physiotherapy1">Physiotherapy</option>
                        <option value="gynecology1">Gynecology</option>
                        <option value="radiology1">Interventional Radiology</option>
                        <option value="anesthesiology1">Anesthesiology</option>
                        <option value="nephrology1">Nephrology</option>
                        <option value="pathology1">Pathologist</option>
                        <option value="plastic-reconstruction1">Plastic & Reconstruction</option>
                        <option value="surgical-oncology1">Surgical Oncology</option>
                    </select>
                </p>
                <div id="all1" class="size_chart1">
                    <div class="state-box">
                        <div class="ofs" id="ofsh6">
                            <ul class="nav nav-tabs flex-column serv3a" id="myTab6" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#mangal-parihar1" role="tab" aria-controls="mangal-parihar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Mangal Parihar <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#anand-parihar1" role="tab" aria-controls="anand-parihar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Anand Parihar <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#maya-parihar1" role="tab" aria-controls="maya-parihar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Maya Parihar Malhotra <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#divyajyoti-kumar1" role="tab" aria-controls="divyajyoti-kumar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Divya Ahuja <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#chetan-anchan1" role="tab" aria-controls="chetan-anchan"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Chetan Anchan <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#sunil-arora1" role="tab" aria-controls="sunil-arora"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Sunil Arora <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#prasad-chaudhari1" role="tab" aria-controls="prasad-chaudhari"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Prasad Chaudhari <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#kaustubh-durve1" role="tab" aria-controls="kaustubh-durve"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Kaustubh Durve <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#hitesh-khubadia1" role="tab" aria-controls="hitesh-khubadia"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Hitesh Kubadia <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#abhishekh-kini1" role="tab"
                                        aria-controls="abhishekh-kini" aria-selected="false"> &nbsp; &nbsp; Dr. Abhishek Kini <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#parag-lad1" role="tab"
                                        aria-controls="parag-lad" aria-selected="false"> &nbsp; &nbsp; Dr. Parag Lad <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#kunal-makhija1" role="tab"
                                        aria-controls="kunal-makhija" aria-selected="false"> &nbsp; &nbsp; Dr. Kunal Makhija <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#sheetal-mohite1" role="tab" aria-controls="sheetal-mohite"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Sheetal Mohite <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#pradip-nemade1" role="tab" aria-controls="pradip-nemade"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Pradip Nemade <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#chasanal-rathod1" role="tab" aria-controls="chasanal-rathod"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Chasanal Rathod <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#dipit-sahu1" role="tab" aria-controls="dipit-sahu"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Dipit Sahu <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#milind-sawant1" role="tab"
                                        aria-controls="milind-sawant" aria-selected="false"> &nbsp; &nbsp; Dr. Milind Sawant<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#amandeep-sing1" role="tab"
                                        aria-controls="amandeep-sing" aria-selected="false"> &nbsp; &nbsp; Dr. Amandeep Sing<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#raghuprasad-verma1" role="tab"
                                        aria-controls="raghuprasad-verma" aria-selected="false"> &nbsp; &nbsp; Dr. Raghuprasad Verma<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#vivek-hebbar1" role="tab"
                                        aria-controls="vivek-hebbar" aria-selected="false"> &nbsp; &nbsp; Dr. Vivek Hebbar<i class="fas fa-arrow-right"></i></a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#swaroop-hegde1" role="tab"
                                        aria-controls="swaroop-hegde" aria-selected="false"> &nbsp; &nbsp; Dr. Swaroop Hegde<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#kusum-latha1" role="tab"
                                        aria-controls="kusum-latha" aria-selected="false"> &nbsp; &nbsp; Dr. Kusumlata <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#kanchan-suvasia1" role="tab"
                                        aria-controls="kanchan-suvasia" aria-selected="false"> &nbsp; &nbsp; Dr. Kanchan Suvasia <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#suman-bijlani1" role="tab"
                                        aria-controls="suman-bijlani" aria-selected="false"> &nbsp; &nbsp; Dr. Suman Bijlani <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#preeti-jobalia1" role="tab"
                                        aria-controls="preeti-jobalia" aria-selected="false"> &nbsp; &nbsp; Dr. Preeti Jobalia <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#shilpa-shah1" role="tab"
                                        aria-controls="shilpa-shah" aria-selected="false"> &nbsp; &nbsp; Dr. Shilpa Shah <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#vidula-daundkar1" role="tab"
                                        aria-controls="vidula-daundkar" aria-selected="false"> &nbsp; &nbsp; Dr. Vidula Daundkar <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#ashutosh-kharche1" role="tab"
                                        aria-controls="ashutosh-kharche" aria-selected="false"> &nbsp; &nbsp; Dr. Ashutosh Kharche <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#amit-sahu1" role="tab"
                                        aria-controls="amit-sahu" aria-selected="false"> &nbsp; &nbsp; Dr. Amit Sahu <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#neelam-agarawal1" role="tab"
                                        aria-controls="neelam-agarawal" aria-selected="false"> &nbsp; &nbsp; Dr. Neelam Agarawal <i class="fas fa-arrow-right"></i></a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#satish-chougale1" role="tab"
                                        aria-controls="satish-chougale" aria-selected="false"> &nbsp; &nbsp; Dr. Satish Chougale <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#girish1" role="tab"
                                        aria-controls="girish" aria-selected="false"> &nbsp; &nbsp; Dr. Girish <i class="fas fa-arrow-right"></i></a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#sayali1" role="tab"
                                        aria-controls="sayali" aria-selected="false"> &nbsp; &nbsp; Dr. Sayali <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#sheetal1" role="tab"
                                        aria-controls="sheetal" aria-selected="false"> &nbsp; &nbsp; Dr. Sheetal<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#suratkal1" role="tab"
                                        aria-controls="suratkal" aria-selected="false"> &nbsp; &nbsp; Dr. Suratkal <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#ashish-agrahari1" role="tab"
                                        aria-controls="ashish-agrahari" aria-selected="false"> &nbsp; &nbsp; Dr. Ashish Agrahari<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#akshay-deshpande1" role="tab"
                                        aria-controls="akshay-deshpande" aria-selected="false"> &nbsp; &nbsp; Dr. Akshay Deshpande<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#amit-patil1" role="tab"
                                        aria-controls="amit-patil" aria-selected="false"> &nbsp; &nbsp; Dr. Amit Patil<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#tushar-jadhav1" role="tab"
                                        aria-controls="tushar-jadhav" aria-selected="false"> &nbsp; &nbsp; Dr. Tushar Jadhav<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#devashri-patil1" role="tab"
                                        aria-controls="devashri-patil" aria-selected="false"> &nbsp; &nbsp; Dr. Devashri Patil<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#ankit-shah1" role="tab"
                                        aria-controls="ankit-shah" aria-selected="false"> &nbsp; &nbsp; Dr. Ankit Shah<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#dimple-chudgar1" role="tab"
                                        aria-controls="dimple-chudgar" aria-selected="false"> &nbsp; &nbsp; Dr. Dimple Chudgar<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#sanjay-singh1" role="tab"
                                        aria-controls="sanjay-singh" aria-selected="false"> &nbsp; &nbsp; Dr.Sanjay Singh<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#ranjan-burnwal1" role="tab"
                                        aria-controls="ranjan-burnwal" aria-selected="false"> &nbsp; &nbsp; Dr. Ranjan Burnwal<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#ajit-bhusagare1" role="tab"
                                        aria-controls="ajit-bhusagare" aria-selected="false"> &nbsp; &nbsp; Dr. Ajit Bhusagare<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#santosh-patil1" role="tab"
                                        aria-controls="santosh-patil" aria-selected="false"> &nbsp; &nbsp; Dr. Santosh Patil<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#salil-patkar1" role="tab"
                                        aria-controls="salil-patkar" aria-selected="false"> &nbsp; &nbsp; Dr. Salil Patkar<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#pushpak-chirmade1" role="tab"
                                        aria-controls="pushpak-chirmade" aria-selected="false"> &nbsp; &nbsp; Dr. Pushpak Chirmade<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#amit-gupta1" role="tab"
                                        aria-controls="amit-gupta" aria-selected="false"> &nbsp; &nbsp; Dr. Amit Gupta<i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="orthopaedic1" class="size_chart1">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3b" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#mangal-parihar1" role="tab" aria-controls="mangal-parihar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Mangal Parihar <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#divyajyoti-kumar1" role="tab" aria-controls="divyajyoti-kumar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Divya Ahuja <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#chetan-anchan1" role="tab" aria-controls="chetan-anchan"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Chetan Anchan <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#sunil-arora1" role="tab" aria-controls="sunil-arora"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Sunil Arora <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#prasad-chaudhari1" role="tab" aria-controls="prasad-chaudhari"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Prasad Chaudhari <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#kaustubh-durve1" role="tab" aria-controls="kaustubh-durve"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Kaustubh Durve <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#hitesh-khubadia1" role="tab" aria-controls="hitesh-khubadia"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Hitesh Kubadia <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#abhishekh-kini1" role="tab"
                                        aria-controls="abhishekh-kini" aria-selected="false"> &nbsp; &nbsp; Dr. Abhishek Kini <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#parag-lad1" role="tab"
                                        aria-controls="parag-lad" aria-selected="false"> &nbsp; &nbsp; Dr. Parag Lad <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#kunal-makhija1" role="tab"
                                        aria-controls="kunal-makhija" aria-selected="false"> &nbsp; &nbsp; Dr. Kunal Makhija <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#sheetal-mohite1" role="tab" aria-controls="sheetal-mohite"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Sheetal Mohite <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#pradip-nemade1" role="tab" aria-controls="pradip-nemade"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Pradip Nemade <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#chasanal-rathod1" role="tab" aria-controls="chasanal-rathod"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Chasanal Rathod <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#dipit-sahu1" role="tab" aria-controls="dipit-sahu"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Dipit Sahu <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#milind-sawant1" role="tab"
                                        aria-controls="milind-sawant" aria-selected="false"> &nbsp; &nbsp; Dr. Milind Sawant<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#amandeep-sing1" role="tab"
                                        aria-controls="amandeep-sing" aria-selected="false"> &nbsp; &nbsp; Dr. Amandeep Sing<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr1" data-toggle="tab" href="#raghuprasad-verma1" role="tab"
                                        aria-controls="raghuprasad-verma" aria-selected="false"> &nbsp; &nbsp; Dr. Raghuprasad Verma<i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="general-medicine1" class="size_chart1">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3c" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#swaroop-hegde1" role="tab"
                                        aria-controls="swaroop-hegde" aria-selected="false"> &nbsp; &nbsp; Dr. Swaroop Hegde<i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="physiotherapy1" class="size_chart1">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3d" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#kusum-latha1" role="tab"
                                        aria-controls="kusum-latha" aria-selected="false"> &nbsp; &nbsp; Dr. Kusumlata <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#kanchan-suvasia1" role="tab"
                                        aria-controls="kanchan-suvasia" aria-selected="false"> &nbsp; &nbsp; Dr. Kanchan Suvasia <i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="gynecology1" class="size_chart1">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3e" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#suman-bijlani1" role="tab"
                                        aria-controls="suman-bijlani" aria-selected="false"> &nbsp; &nbsp; Dr. Suman Bijlani <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#preeti-jobalia1" role="tab"
                                        aria-controls="preeti-jobalia" aria-selected="false"> &nbsp; &nbsp; Dr. Preeti Jobalia <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#shilpa-shah1" role="tab"
                                        aria-controls="shilpa-shah" aria-selected="false"> &nbsp; &nbsp; Dr. Shilpa Shah <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#vidula-daundkar1" role="tab"
                                        aria-controls="vidula-daundkar" aria-selected="false"> &nbsp; &nbsp; Dr. Vidula Daundkar <i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="radiology1" class="size_chart1">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3f" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#anand-parihar1" role="tab" aria-controls="anand-parihar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Anand Parihar <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#ashutosh-kharche1" role="tab"
                                        aria-controls="ashutosh-kharche" aria-selected="false"> &nbsp; &nbsp; Dr. Ashutosh Kharche <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#amit-sahu1" role="tab"
                                        aria-controls="amit-sahu" aria-selected="false"> &nbsp; &nbsp; Dr. Amit Sahu <i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="anesthesiology1" class="size_chart1">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3g" id="myTab" role="tablist">
                                <!-- <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#neelam-agarawal1" role="tab"
                                        aria-controls="neelam-agarawal" aria-selected="false"> &nbsp; &nbsp; Dr. Neelam Agarawal <i class="fas fa-arrow-right"></i></a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#satish-chougale1" role="tab"
                                        aria-controls="satish-chougale" aria-selected="false"> &nbsp; &nbsp; Dr. Satish Chougale <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#girish1" role="tab"
                                        aria-controls="girish" aria-selected="false"> &nbsp; &nbsp; Dr. Girish <i class="fas fa-arrow-right"></i></a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#sayali1" role="tab"
                                        aria-controls="sayali" aria-selected="false"> &nbsp; &nbsp; Dr. Sayali <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr4" data-toggle="tab" href="#sheetal1" role="tab"
                                        aria-controls="sheetal" aria-selected="false"> &nbsp; &nbsp; Dr. Sheetal<i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="nephrology1" class="size_chart1">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3h" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#suratkal1" role="tab"
                                        aria-controls="suratkal" aria-selected="false"> &nbsp; &nbsp; Dr. Suratkal <i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="pathology1" class="size_chart1">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3i" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#maya-parihar1" role="tab" aria-controls="maya-parihar"
                                        aria-selected="true"> &nbsp; &nbsp; Dr. Maya Parihar Malhotra <i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#ashish-agrahari1" role="tab"
                                        aria-controls="ashish-agrahari" aria-selected="false"> &nbsp; &nbsp; Dr. Ashish Agrahari<i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="plastic-reconstruction1" class="size_chart1">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3j" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#akshay-deshpande1" role="tab"
                                        aria-controls="akshay-deshpande" aria-selected="false"> &nbsp; &nbsp; Dr. Akshay Deshpande<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#amit-patil1" role="tab"
                                        aria-controls="amit-patil" aria-selected="false"> &nbsp; &nbsp; Dr. Amit Patil<i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div id="surgical-oncology1" class="size_chart1">
                    <div class="state-box">
                        <div class="ofs">
                            <ul class="nav nav-tabs flex-column serv3k" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link clr1" data-toggle="tab" href="#tushar-jadhav1" role="tab"
                                        aria-controls="tushar-jadhav" aria-selected="false"> &nbsp; &nbsp; Dr. Tushar Jadhav<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr2" data-toggle="tab" href="#devashri-patil1" role="tab"
                                        aria-controls="devashri-patil" aria-selected="false"> &nbsp; &nbsp; Dr. Devashri Patil<i class="fas fa-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link clr3" data-toggle="tab" href="#ankit-shah1" role="tab"
                                        aria-controls="ankit-shah" aria-selected="false"> &nbsp; &nbsp; Dr. Ankit Shah<i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

