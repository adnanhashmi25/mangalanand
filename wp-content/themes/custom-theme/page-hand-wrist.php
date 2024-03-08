<?php
/**
 * Template Name: Service
 * 
 * 
 * @package custom-theme
 */

//


 get_header();
?>

<div>
    <?php get_template_part('template-parts/banner/orthopedic-services') ?>
    
    <div class="heading mt-40">
        <h2 class="text-center"><span>Hand &amp; Wrist</span></h2>
    </div>
    <div class="container containspacing inside-services">
        <div class="row">
            <div class="col-md-9">
                <ul class="nav nav-tabs nav-fill w-100" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="anatomy-tab" data-toggle="tab" href="#anatomy" role="tab" aria-controls="anatomy" aria-selected="true">Anatomy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="conditions-tab" data-toggle="tab" href="#conditions" role="tab" aria-controls="conditions" aria-selected="false">Conditions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="procedure-tab" data-toggle="tab" href="#procedure" role="tab" aria-controls="procedure" aria-selected="false">Procedure</a>
                    </li>
                </ul>
                <div class="tab-content container" id="myTabContent">
                    <div class="tab-pane fade show active" id="anatomy" role="tabpanel" aria-labelledby="anatomy-tab">
                        <ol>
                            <li>
                                <b>Bones</b> – Wrist joint is formed by the distal end of the fore arm bones (Radius and Ulna) with the Carpal bones of the hand. There are 8 carpal bones of the hand namely Scaphoid, Lunate, Triquetrum, Pisiform, Trapezium, Trapezoid, Capitate and Hamate. The carpal bones forms a joint with the 5 hand bones (metacarpals). Each finger consists of 3 finger bones (phalanges), except thumb which has 2 phalanges
                            </li>
                            <li>
                                <b>Muscles</b> – More than 30 muscles are present in the hand and wrist which makes the complex array of movements possible
                            </li>
                            <li>
                                <b>Tendons</b>  – The endings of the muscles are attached to the bones by tendons which is are visible as thick cords
                            </li>
                            <li>
                                <b>Nerves</b>  – 3 major nerves supplies the hand and wrist ( Median nerve, Ulnar nerve and radial nerve )
                            </li>
                        </ol>
                    </div>
                    <div class="tab-pane fade" id="conditions" role="tabpanel" aria-labelledby="conditions-tab">
                        <ol>
                            <li>
                                <b>Fracture</b>  – Fall on outstretched hand is the most common mechanism by which bones break in the wrist and hand
                            </li>
                            <li>
                                <b>Sprain </b> – Ligament injury secondary to fall or while playing sports is a common reason why patients present with pain and swelling around the wrist with no findings in x ray.
                            </li>
                            <li>
                                <b>Tendinitis</b>  – Inflammation along the tendon sheaths is leading to swelling and pain on movements of thumb is a common condition especially on patients with hypothyroidism or rheumatoid arthritis. 
                            </li>
                            <li>
                                <b>Carpal Tunnel Syndrome</b>  – Compression of the median nerve resulting in numbness and pin pricking sensations along with muscle weakness.
                            </li>
                            <li>
                                <b>Ulnar neuropathy </b>  – Ulnar nerve disorders can be due to infections like leprosy or due to surgeries around the elbow resulting in loss of sensations along the medial aspect of finger and weakness of muscles
                            </li>
                            <li>
                                <b>Trigger Finger </b>  – Condition in which the finger gets stuck in flexed position and opens with a snap.
                            </li>
                        </ol>
                    </div>
                    <div class="tab-pane fade" id="procedure" role="tabpanel" aria-labelledby="procedure-tab">
                        <ol>
                            <li>Fracture fixation</li>
                            <li>Carpal tunnel release</li>
                            <li>Trigger finger release </li>
                            <li>Nerve transfer </li>
                            <li>Tendon transfer</li>
                            <li>Ganglion excision </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/hand-wrist-.webp" alt="">
            </div>
        </div>
        <div class="row illizarov-deformity">
            <div class="col-md-12">
                <p class="text-center">
                    <button type="submit" class="btn btn-primary ">Make an Appointment</button>
                </p>
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();