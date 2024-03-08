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
        <h2 class="text-center"><span>Sports Medicine</span></h2>
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
                        <p class="text-justify">
                            Sports medicine deals with prevention, diagnosis and treatment of injuries associated with repetitive or strenuous physical activities including sports injuries such as strained or sprained or a torn ligament or any associated bony injuries like avulsions.
                            The most common areas injured are the knee, shoulder, ankle & foot,  elbow, hand and wrist.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="conditions" role="tabpanel" aria-labelledby="conditions-tab">
                        <ul>
                            <li>Ankle sprains and strains</li>
                            <li>Acl tear</li>
                            <li>Meniscal tears</li>
                            <li>Hamstrings injury</li>
                            <li>Shoulder Rotator Cuff injuries </li>
                            <li>Acute and Recurrent dislocations of major joints</li>
                            <li>Groin strains</li>
                            <li>Shin splints </li>
                            <li>Patellofemoral syndrome</li>
                            <li>Tennis elbow/Golfers elbow</li>
                            <li>Fractures </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="procedure" role="tabpanel" aria-labelledby="procedure-tab">
                        <ul>
                            <li>Conservative treatments in the form of slab, plasters or splinting.</li>
                            <li>Shoulder arthroscopic rotator cuff repair</li>
                            <li>Arthroscopic repair for Bankart / Hill Sachs lesions for recurrent dislocations</li>
                            <li>Arthroscopic repair/reconstruction of knee injuries such as ACL/PCL tear, Medial/Lateral Collateral Ligament tears/avulsions, Postero-Lateral Corner Injuries or meniscal tears</li>
                            <li>Ligament and Tendon repairs for ankle and foot trauma</li>
                            <li>Major and minor operative procedures for fractures associated with sports injuries.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/sports-medicine-.webp" alt="">
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