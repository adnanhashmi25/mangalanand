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
        <h2 class="text-center"><span>Shoulder</span></h2>
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
                        Shoulder joint is a Ball & Socket joint which is made up of Head of humerus (ball) and Glenoid cavity of scapula(socket). Structurally, it is a weak joint because the glenoid cavity is too small and shallow to hold the head of the humerus in place (the head is four times the size of the glenoid cavity). However, this arrangement permits great mobility.
                        Stability of the joint is maintained by: 
                        <ol>
                            <li>The coracoacromial arch or secondary socket for the head of the humerus.</li>
                            <li>Rotator cuff of the shoulder : it is made up by  tendinous part of 4 muscle i. Supraspinatus muscle ii. Infraspinatus muscle iii. Teres minor muscle iv. Subscapularis muscle</li>
                            <li>The glenoidal labrum helps in deepening the glenoid fossa. Stability is also provided by the muscles attaching the humerus to the pectoral girdle</li>
                        </ol>
                    </div>
                    <div class="tab-pane fade" id="conditions" role="tabpanel" aria-labelledby="conditions-tab">
                        <ul>
                            <li>Frozen shoulder</li>
                            <li>Rotator cuff tear</li>
                            <li>Supra spinatus tendinopathy</li>
                            <li>Subacriomial Impingement</li>
                            <li>Subacromial bursitis</li>
                            <li>Recurrent shoulder dislocation / Labral tear</li>
                            <li>Fractures around shoulder</li>
                            <li>Shoulder arthritis</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="procedure" role="tabpanel" aria-labelledby="procedure-tab">
                        <ul>
                            <li><b>Frozen Shoulder: </b>It is occurred due to adherence of capsule of the shoulder with bone. Mainly it recovers with Physiotherapy and NSAIDS. If not improve by non operative method then Arthroscopic surgical release of capsule give good results.</li>
                            <li><b>Rotator cuff Tear: </b>Surgical repair of Rotator cuff  through Arthroscopy / Open surgery.</li>
                            <li><b>Subacriomial Impingement: </b>If impingement is not improved nonoperatively by physiotherapy or medication then surgical procedure like Acromioplasty or Subacromial release is the good option for better lifestyle.</li>
                            <li><b>Recurrent shoulder dislocation / Labral tear/ Benkart lesion: </b>arthroscopic repair of labrum with suture anchor gives excellent result.</li>
                            <li><b>Shoulder Arthritis: </b>Total Shoulder Arthroplasy / Reverse shoulder Arthroplasty can be done depending on condition of rotator cuff.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Shoulder-.webp" alt="">
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