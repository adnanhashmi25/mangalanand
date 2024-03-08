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
        <h2 class="text-center"><span>Foot &amp; Ankle</span></h2>
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
                        <ul>
                            <li>Ankle: Ankle joint is a Hinge Variety of joint which is made up of Tibia (Shin bone) ,Fibula and Talus bone. A prominent part of lower tibia medially and lower fibula laterally are called Medial malleolus and lateral malleolus respectively. Intraarticular part of lower tibia is called Pilon. Medial malleolus, lateral malleolus and pilon are formed a cup in which Talus seats and formed ankle joint. Ankle joint has movement in one plane – Dorsiflexion and Planterflexion </li>
                            <li>Foot:  In Foot, there is 26 small bones including 7 Tarsal bones, 5 Meta-tarsals, 14 phalangeal bones which make 33 joints including Intertarsal, Tarso-Metatarsal, Metatarso-Phalangeal and Interphalangeal joints and formed a single functional unit.</li>
                            <li>Foot is devided into 3 parts: 1.Hindfoot  2.Midfoot  3.Forefoot
                                <ul>
                                    <li>Hindfoot: It is made up of Talus bone and calcaneum/heel bone</li>
                                    <li>Midfoot: It connects hindfoot to forefoot. It consists of one navicular bone, one cuboid bone, three cuneiform bones</li>
                                    <li>Forefoot: it is made up of five metatarsals, and phalanges. All the bones of midfoot connected with five metatarsal bones of forefoot which form the arch of the foot for shock absorption while walking and running. </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="conditions" role="tabpanel" aria-labelledby="conditions-tab">
                        <ul>
                            <li>Ankle Sprain</li>
                            <li>Hallux Valgus</li>
                            <li>Flat Foot</li>
                            <li>Neglected CTEV</li>
                            <li>Equinus Deformity</li>
                            <li>Toe Walking</li>
                            <li>TA Tendinopathy/ Hump bump deformity/ Bony spur</li>
                            <li>Charcot Foot</li>
                            <li>Tibialis Posterior Tendon Dysfunction</li>
                            <li>Ankle Arthritis</li>
                            <li>Ankle instability</li>
                            <li>Foot Drop</li>
                            <li>Claw toe</li>
                            <li>Hammer toe</li>
                            <li>Peroneal tendinopathy</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="procedure" role="tabpanel" aria-labelledby="procedure-tab">
                        <ul>
                            <li><b>Heel pain / Planterfascitis: </b>It is an infamation of planter fascia which is attached over heel. It can be prevented or treated by ankle stretching exercise, Ice pack application and soft foot wear and NSAIDS. If it will not improved, steroid injection can also be given for it. It will recover by over period of around 3-5 months</li>
                            <li><b>Tendoachilis Tendinopathy:</b>Mostly it occurs due to irritation because of bony spur of calcaneum. So It is also treated with ankle stretching exercise and NSAIDS. If not recovered , Surgical procedure in terms of resection of bony bump of calcaneum.</li>
                            <li><b>Hallux Valgus: </b>Mild Hallux valgus can be treated nonoperatively by splint but severe deformity is addressed with surgical procedure in terms of Osteotomy of bone.</li>
                            <li><b>Flat Foot:</b>Non operatively it can be treated with medial arch support initial period of time but if not improved, Osteotomy of calcaneum, osteotomy of metatarsals medially and calcaneo-cuboid joint laterally.</li>
                            <li><b>Neglected CTEV: </b>It is the condition when congenital talipus equino varus deformity which is not corrected at particular time limit, ILIZAROV Ring fixation is the only option for treatment of this.</li>
                            <li><b>Equinus deformity:</b>If fixed Equinus deformity of ankle is present, Surgical correction with Triple Arthrodesis  (fusion) of ankle will improve pateints lifestyle.</li>
                            <li><b>Ankle arthritis: </b>In ankle arthritis, all the articular surfaces of the ankle joint are eroded, so Fusion of the ankle joint by surgery will make the patient Pain free. Surgery can be done in two methods 1. Fusion by Internal fixation 2. Fusion by ILIZAROV ring fixation.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/foot-ankle-.webp" alt="">
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