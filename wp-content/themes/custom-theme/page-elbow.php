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
        <h2 class="text-center"><span>Elbow</span></h2>
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
                        <p>
                            Elbow joint is formed by articulation of three bones -humerus, radius and ulna. The elbow joint is between arm and forearm, arm consist of humerus bone, forearm consist of radius and ulna. Elbow joint is complex hinge joint, Ulno-humeral joint- junction between the ulna and humerus, Radio-humeral joint-junction between the radius and humerus, Proximal radioulnar joint- junction between the radius and ulna.
                            The elbow joint is surrounded by various soft tissues like cartilage, tendons, ligaments, muscles, blood vessels and bursae.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="conditions" role="tabpanel" aria-labelledby="conditions-tab">
                        <ul>
                            <li>
                                <b>Elbow fracture:</b>  Distal humerus fracture, radial head fracture, olecranon fracture
                            </li>
                            <li>
                                <b>Bursitis </b> 
                            </li>
                            <li>
                                <b>Tennis elbow</b>  
                            </li>
                            <li>
                                <b>Golfer’s elbow</b> 
                            </li>
                            <li>
                                <b>Tendonitis </b> 
                            </li>
                            <li>
                                <b>Loose bodies </b>
                            </li>
                            <li>
                                <b>Osteochondritis dissecans </b>
                            </li>
                            <li>
                                <b>Osteoarthritis </b>
                            </li>
                            <li>
                                <b>Rheumatoid arthritis </b>
                            </li>
                            <li>
                                <b>Removal of scar tissue, bone spurs </b>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="procedure" role="tabpanel" aria-labelledby="procedure-tab">
                        <ul>
                            <li>Fracture can be treated conservative or surgically depending up on type of fracture pattern. </li>
                            <li>Simple fractures are well aligned and stable, unstable fractures are misaligned and displaced, open fractures in which bone fractured piece cut through the skin</li>
                            <li>Conservative treatment in form of slab, cast or brace. </li>
                            <li>Surgical procedure includes Arthroscopy, fixation with K-wires or plates. </li>
                            <li>Elbow arthroscopy is minimally invasive surgery, which is performed through small incisions to evaluate and treat elbow conditions such as debridement of loose bodies, osteochondritis dissecans, osteoarthritis, rheumatoid arthritis, removal of scar tissue, removal of bone spurs.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/elbow-.webp" alt="">
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