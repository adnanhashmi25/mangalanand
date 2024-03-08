<?php
/**
 * orthopedic-services file.
 * 
 * @package custom-theme
 */
?>

<?php $page_link = home_url(); ?>

<section class="ortho-serv d-none d-md-block">
    <div class="heading">
        <h2 class="text-center"><span>Orthopedic Services</span></h2>
    </div>
    <div class="mt-40 container mb-40">
        <div class="row pl-3">
            <div class="col-md-6 ofs" id="ofsh">
                <ul class="nav nav-tabs flex-column serv1" id="myTab1" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link clr1" data-toggle="tab" href="#trauma-fracture" role="tab"
                            aria-controls="fracture" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/trauma-fracture.webp" alt=""> &nbsp; &nbsp; Trauma &amp; Fracture<i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link clr2" data-toggle="tab" href="#knee" role="tab"
                            aria-controls="knee" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/Knee.webp" alt=""> &nbsp; &nbsp; Knee<i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr3" data-toggle="tab" href="#spine" role="tab"
                            aria-controls="spine" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/Spine.webp" alt=""> &nbsp; &nbsp; Spine<i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr4" data-toggle="tab" href="#paediatric-orthopedic" role="tab"
                            aria-controls="paediatric-orthopedic" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/pediatric-orthopedic.webp" alt=""> &nbsp; &nbsp; Paediatric Orthopedic<i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr4" data-toggle="tab" href="#sports-medicine" role="tab"
                            aria-controls="spine" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/sports-medicine.webp" alt="">  &nbsp; &nbsp; Sports Medicine<i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr3" data-toggle="tab" href="#hand-wrist" role="tab"
                            aria-controls="hand-wrist" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/hand-wrist.webp" alt=""> &nbsp; &nbsp; Hand &amp; Wrist<i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link clr2" data-toggle="tab" href="#elbow" role="tab" aria-controls="elbow"
                            aria-selected="true"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/Elbow.webp" alt=""> &nbsp; &nbsp; Elbow <i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr1" data-toggle="tab" href="#foot-ankle" role="tab"
                            aria-controls="profile" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/foot-ankle.webp" alt=""> &nbsp; &nbsp; Foot &amp; Ankle<i class="fas fa-arrow-right"></i></a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link clr1" data-toggle="tab" href="#hip" role="tab"
                            aria-controls="hip" aria-selected="false"> <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Hip.webp" alt=""> &nbsp; &nbsp; Hip<i class="fas fa-arrow-right"></i></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link clr2" data-toggle="tab" href="#shoulder" role="tab"
                            aria-controls="shoulder" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/Shoulder.webp" alt=""> &nbsp; &nbsp; Shoulder<i class="fas fa-arrow-right"></i></a>
                    </li>                    
                </ul>
            </div>
            <div class="col-md-6">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade " id="elbow" role="tabpanel" aria-labelledby="elbow-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Elbow-.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Elbow1.webp" alt="">
                                </div>
                                <h2 class="text-center">Elbow</h2>
                                <p class="text-center">
                                    One of the very important parts of the human arm always requires the right attention. Elbows are often pressurised and ignored. We tend to correct it all.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/elbow/' ?>"> Know More</a></button>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="foot-ankle" role="tabpanel" aria-labelledby="foot-ankle-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/foot-ankle-.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/foot-ankle1.webp" alt="">
                                </div>
                                <h2 class="text-center">Foot &amp; Ankle</h2>
                                <p class="text-center">
                                    Players or non-players, many have been suffering sprains and discomfort with these. Allow us to bring you the best way to stay fit. 
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/foot-ankle/' ?>"> Know More</a></button>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hand-wrist" role="tabpanel" aria-labelledby="hand-wrist-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/hand-wrist-.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/hand-wrist1.webp" alt="">
                                </div>
                                <h2 class="text-center">Hand &amp; Wrist</h2>
                                <p class="text-center">
                                    It is impossible to work with out healthy hands and wrists. Our doctors are capable enough to treat every such issue.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/hand-wrist/' ?>"> Know More</a></button>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hip" role="tabpanel" aria-labelledby="hip-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Hip-.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Hip1.webp" alt="">
                                </div>
                                <h2 class="text-center">Hip</h2>
                                <p class="text-center">
                                    Ever imagined a person with hip issues? Treat this traumatic issue with our talented hip joint specialists.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/hip/' ?>"> Know More</a></button>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="knee" role="tabpanel" aria-labelledby="knee-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Knee-.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Knee1.webp" alt="">
                                </div>
                                <h2 class="text-center">Knee</h2>
                                <p class="text-center">
                                    A common health problem these days among the mid-aged and olds calls for attention as quickly as one could do. Get long-term knee health with our facilities.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/knee/' ?>"> Know More</a></button>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="shoulder" role="tabpanel" aria-labelledby="shoulder-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Shoulder-.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Shoulder1.webp" alt="">
                                </div>
                                <h2 class="text-center">Shoulder</h2>
                                <p class="text-center">
                                    Among the youth and old, shoulder pain is ordinary. But ignoring it is not a wise option anymore. Trust us as the best cure.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/shoulder/' ?>"> Know More</a></button>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="spine" role="tabpanel" aria-labelledby="spine-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Spine-.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Spine1.webp" alt="">
                                </div>
                                <h2 class="text-center">Spine</h2>
                                <p class="text-center">
                                    The most important bone in a human body must be upright in all cases. A slight discomfort? Contact us today. 
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/spine/' ?>"> Know More</a></button>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sports-medicine" role="tabpanel" aria-labelledby="sports-medicine-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/sports-medicine-.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/sports-medicine1.webp" alt="">
                                </div>
                                <h2 class="text-center">Sports Medicine</h2>
                                <p class="text-center">
                                    Players are all welcome to build a better player in themselves. Here’s all that you need to treat and aid yourself with.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/sports-medicine/' ?>"> Know More</a></button>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="trauma-fracture" role="tabpanel" aria-labelledby="trauma-fracture-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/trauma-fracture-.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/trauma-fracture1.webp" alt="">
                                </div>
                                <h2 class="text-center">Trauma &amp; Fracture</h2>
                                <p class="text-center">
                                    Decreasing bone density or certain deficiency that causes these must be treated well and sooner.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/trauma-fracture/' ?>"> Know More</a></button>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="paediatric-orthopedic" role="tabpanel" aria-labelledby="paediatric-orthopedic-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/pediatric-orthopedic-.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/pediatric-orthopedic1.webp" alt="">
                                </div>
                                <h2 class="text-center">Paediatric Orthopedic</h2>
                                <p class="text-center">
                                    What comes with nutrition is healthier bones and muscles. Trust us in providing you with better bone health.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/paediatric-orthopedic/' ?>"> Know More</a></button>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ortho-serv d-none d-block d-md-none">
    <div class="heading">
        <h2 class="text-center"><span>Orthopedic Services</span></h2>
    </div>
    <div class="mt-40 container mb-40">
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="elbow1" role="tabpanel" aria-labelledby="elbow-tab">
                        <div class="row">
                            <div class="col-12 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Elbow1.webp" alt="">
                                </div>
                                <h2 class="text-center">Elbow</h2>
                                <p class="text-center">
                                    One of the very important parts of the human arm always requires the right attention. Elbows are often pressurised and ignored. We tend to correct it all.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/elbow/' ?>"> Know More</a></button>
                                </p>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Elbow-.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="foot-ankle1" role="tabpanel" aria-labelledby="foot-ankle-tab">
                        <div class="row">
                            <div class="col-12 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/foot-ankle1.webp" alt="">
                                </div>
                                <h2 class="text-center">Foot &amp; Ankle</h2>
                                <p class="text-center">
                                    Players or non-players, many have been suffering sprains and discomfort with these. Allow us to bring you the best way to stay fit.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/foot-ankle/' ?>"> Know More</a></button>
                                </p>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/foot-ankle-.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hand-wrist1" role="tabpanel" aria-labelledby="hand-wrist-tab">
                        <div class="row">
                            <div class="col-12 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/hand-wrist1.webp" alt="">
                                </div>
                                <h2 class="text-center">Hand &amp; Wrist</h2>
                                <p class="text-center">
                                    It is impossible to work with out healthy hands and wrists. Our doctors are capable enough to treat every such issue. 
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/hand-wrist/' ?>"> Know More</a></button>
                                </p>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/hand-wrist-.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hip1" role="tabpanel" aria-labelledby="hip-tab">
                        <div class="row">
                            <div class="col-12 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Hip1.webp" alt="">
                                </div>
                                <h2 class="text-center">Hip</h2>
                                <p class="text-center">
                                    Ever imagined a person with hip issues? Treat this traumatic issue with our talented hip joint specialists. 
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/hip/' ?>"> Know More</a></button>
                                </p>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Hip-.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="knee1" role="tabpanel" aria-labelledby="knee-tab">
                        <div class="row">
                            <div class="col-12 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Knee1.webp" alt="">
                                </div>
                                <h2 class="text-center">Knee</h2>
                                <p class="text-center">
                                    A common health problem these days among the mid-aged and olds calls for attention as quickly as one could do. Get long-term knee health with our facilities.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/knee/' ?>"> Know More</a></button>
                                </p>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Knee-.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="shoulder1" role="tabpanel" aria-labelledby="shoulder-tab">
                        <div class="row">
                            <div class="col-12 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Shoulder1.webp" alt="">
                                </div>
                                <h2 class="text-center">Shoulder</h2>
                                <p class="text-center">
                                    Among the youth and old, shoulder pain is ordinary. But ignoring it is not a wise option anymore. Trust us as the best cure.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/shoulder/' ?>"> Know More</a></button>
                                </p>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Shoulder-.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="spine1" role="tabpanel" aria-labelledby="spine-tab">
                        <div class="row">
                            <div class="col-12 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Spine1.webp" alt="">
                                </div>
                                <h2 class="text-center">Spine</h2>
                                <p class="text-center">
                                    The most important bone in a human body must be upright in all cases. A slight discomfort? Contact us today. 
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/spine/' ?>"> Know More</a></button>
                                </p>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Spine-.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sports-medicine1" role="tabpanel" aria-labelledby="sports-medicine-tab">
                        <div class="row">
                            <div class="col-12 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/sports-medicine1.webp" alt="">
                                </div>
                                <h2 class="text-center">Sports Medicine</h2>
                                <p class="text-center">
                                    Players are all welcome to build a better player in themselves. Here’s all that you need to treat and aid yourself with.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/sports-medicine/' ?>"> Know More</a></button>
                                </p>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/sports-medicine-.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="trauma-fracture1" role="tabpanel" aria-labelledby="trauma-fracture-tab">
                        <div class="row">
                            <div class="col-12 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/trauma-fracture1.webp" alt="">
                                </div>
                                <h2 class="text-center">Trauma &amp; Fracture</h2>
                                <p class="text-center">
                                    Decreasing bone density or certain deficiency that causes these must be treated well and sooner.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/trauma-fracture/' ?>"> Know More</a></button>
                                </p>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/trauma-fracture-.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pediatric-orthopedic1" role="tabpanel" aria-labelledby="pediatric-orthopedic-tab">
                        <div class="row">
                            <div class="col-12 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/pediatric-orthopedic1.webp" alt="">
                                </div>
                                <h2 class="text-center">Paediatric Orthopaedic </h2>
                                <p class="text-center">
                                    What comes with nutrition is healthier bones and muscles. Trust us in providing you with better bone health.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/orthopedic-services/pediatric-orthopedic/' ?>"> Know More</a></button>
                                </p>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/pediatric-orthopedic-.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-9 ofs" id="ofsh2">
                <ul class="nav nav-tabs flex-column serv1 js-loop" id="myTab2" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link clr1" data-toggle="tab" href="#trauma-fracture1" role="tab"
                            aria-controls="fracture" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/trauma-fracture.webp" alt=""> &nbsp; &nbsp; Trauma &amp; Fracture<i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link clr2" data-toggle="tab" href="#knee1" role="tab"
                            aria-controls="knee" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/Knee.webp" alt=""> &nbsp; &nbsp; Knee<i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr3" data-toggle="tab" href="#spine1" role="tab"
                            aria-controls="spine" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/Spine.webp" alt=""> &nbsp; &nbsp; Spine<i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr4" data-toggle="tab" href="#paediatric-orthopedic1" role="tab"
                            aria-controls="paediatric-orthopedic" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/pediatric-orthopedic.webp" alt=""> &nbsp; &nbsp; Paediatric Orthopedic<i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr4" data-toggle="tab" href="#sports-medicine1" role="tab"
                            aria-controls="spine" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/sports-medicine.webp" alt="">  &nbsp; &nbsp; Sports Medicine<i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr3" data-toggle="tab" href="#hand-wrist1" role="tab"
                            aria-controls="hand-wrist" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/hand-wrist.webp" alt=""> &nbsp; &nbsp; Hand &amp; Wrist<i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link clr2" data-toggle="tab" href="#elbow1" role="tab" aria-controls="elbow"
                            aria-selected="true"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/Elbow.webp" alt=""> &nbsp; &nbsp; Elbow <i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr1" data-toggle="tab" href="#foot-ankle1" role="tab"
                            aria-controls="profile" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/foot-ankle.webp" alt=""> &nbsp; &nbsp; Foot &amp; Ankle<i class="fas fa-arrow-right"></i></a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link clr1" data-toggle="tab" href="#hip1" role="tab"
                            aria-controls="hip" aria-selected="false"> <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Hip.webp" alt=""> &nbsp; &nbsp; Hip<i class="fas fa-arrow-right"></i></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link clr2" data-toggle="tab" href="#shoulder1" role="tab"
                            aria-controls="shoulder" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/Shoulder.webp" alt=""> &nbsp; &nbsp; Shoulder<i class="fas fa-arrow-right"></i></a>
                    </li> 
                </ul>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</section>