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
        <h2 class="text-center"><span>Spine</span></h2>
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
                            Spinal column consists of 7 cervical, 12 thoracic, 5 lumbar vertebrae and sacrum with coccyx. To maintain its double S shape, provide skeletal support and route the nerves where they need to go it also relies on a number of 
                            supporting structure like spinal discs, facet joints,ligaments and muscles.
                            Low back pain is the most common health problem among older adults that results in pain and disability. Trauma, infections and tumors  constitute the other spectrum of disorders affecting the spine.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="conditions" role="tabpanel" aria-labelledby="conditions-tab">
                    <ul>
                        <li>Low back pain</li>
                        <li>Sciatica </li>
                        <li>Herniated disc</li>
                        <li>Muscle strain</li>
                        <li>Scoliosis </li>
                        <li>Whiplash injury</li>
                        <li>Osteoporosis </li>
                        <li>Spondylosis</li>
                        <li>Compression fracture and other forms of spinal trauma</li>
                        <li>Spinal myelopathy</li>
                        <li>Osteoarthritis </li>
                        <li>Spondylolisthesis</li>
                        <li>Tuberculosis</li>
                        <li>Tumors</li>
                    </ul>
                    </div>
                    <div class="tab-pane fade" id="procedure" role="tabpanel" aria-labelledby="procedure-tab">
                    <ul>
                        <li>Epidural injections</li>
                        <li>Discectomy</li>
                        <li>Laminectomy/laminotomy</li>
                        <li>Pedicular screw fixation and spinal stabilization</li>
                        <li>Spinal decompression and fusion</li>
                        <li>Anterior cervical discectomy and fusion</li>
                        <li>Vertebroplasty and kyphoplasty</li>
                        <li>Minimally invasive spine surgery</li>
                        <li>UST/IFT/Short Wave Diathermy </li>
                        <li>Physiotherapy and other forms of conservative treatment for backpain</li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Spine-.webp" alt="">
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