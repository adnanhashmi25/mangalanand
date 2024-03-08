<?php
/**
 * Other services file.
 * 
 * @package custom-theme
 */
?>
<?php $page_link = home_url(); ?>
<section class="other-serv d-none d-md-block">
    <div class="heading">
        <h2 class="text-center"><span>Other Services</span></h2>
    </div>
    <div class="mt-40 container mb-40">
        <div class="row pl-3">
            <div class="col-md-6 pl-0">
                <ul class="nav nav-tabs flex-column serv3" id="myTab" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link clr1" data-toggle="tab" href="#radiology" role="tab" aria-controls="radiology"
                            aria-selected="true"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/Radiology.webp" alt=""> &nbsp; &nbsp; Radiology <i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr2" data-toggle="tab" href="#physiotherapy" role="tab"
                            aria-controls="physiotherapy" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/Physiotherapy.webp" alt=""> &nbsp; &nbsp; Physiotherapy <i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr3" data-toggle="tab" href="#gynaecology" role="tab"
                            aria-controls="gynaecology" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/Gynaecology.webp" alt=""> &nbsp; &nbsp; Gynaecology <i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr4" data-toggle="tab" href="#pathology" role="tab"
                            aria-controls="pathology" aria-selected="false"> <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Pathology.webp" alt=""> &nbsp; &nbsp; Pathology <i class="fas fa-arrow-right"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="radiology" role="tabpanel" aria-labelledby="radiology-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Radiology-.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Radiology1.webp" alt="">
                                </div>
                                <h2 class="text-center">Radiology </h2>
                                <p class="text-center">
                                    The radiology services available at Mangal Anand Hospital are X-ray and Ultrasound. The services are accessible to our patients for investigations. 
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/services/radiology/' ?>">Know More</a></button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="physiotherapy" role="tabpanel" aria-labelledby="physiotherapy-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Physiotherapy-.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Physiotherapy1.webp" alt="">
                                </div>
                                <h2 class="text-center">Physiotherapy</h2>
                                <p class="text-center">
                                    Physiotherapy is an exercise program that helps you improve movement, relieve pain, encourage blood flow for faster healing, and restore your physical function and fitness level. 
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/services/physiotherapy/' ?>">Know More</a></button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="gynaecology" role="tabpanel" aria-labelledby="gynaecology-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Gynaecology-.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Gynaecology1.webp" alt="">
                                </div>
                                <h2 class="text-center">Gynaecology</h2>
                                <p class="text-center">
                                    Gynecology is the specialized field of medicine that deals with the medical care of women and the physical care of the female reproductive system.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/services/gynecology/' ?>">Know More</a></button>
                                </p>
                            </div>
                        </div>
                    </div>    
                    <div class="tab-pane fade" id="pathology" role="tabpanel" aria-labelledby="pathology-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Pathology-.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Pathology1.webp" alt="">
                                </div>
                                <h2 class="text-center">Pathology</h2>
                                <p class="text-center">
                                    The Pathology services at Mangal Anand Hospital is equipped  to carry out the latest test on patients sample and assist clinicians in evaluation and diagnosis of diseases.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/services/pathology/' ?>">Know More</a></button>
                                </p>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</section>

<section class="other-serv d-none d-block d-md-none">
    <div class="heading">
        <h2 class="text-center"><span>Other Services</span></h2>
    </div>
    <div class="mt-40 container mb-40">
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="radiology1" role="tabpanel" aria-labelledby="radiology-tab">
                        <div class="row">
                            <div class="col-12 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Radiology1.webp" alt="">
                                </div>
                                <h2 class="text-center">Radiology </h2>
                                <p class="text-center">
                                The radiology services available at Mangal Anand Hospital are X-ray and Ultrasound. The services are accessible to our patients for investigations. 
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/services/radiology/' ?>">Know More</a></button>
                                </p>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Radiology-.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="physiotherapy1" role="tabpanel" aria-labelledby="physiotherapy-tab">
                        <div class="row"> 
                            <div class="col-12 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Physiotherapy1.webp" alt="">
                                </div>
                                <h2 class="text-center">Physiotherapy</h2>
                                <p class="text-center">
                                    Physiotherapy is an exercise program that helps you improve movement, relieve pain, encourage blood flow for faster healing, and restore your physical function and fitness level. 
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/services/physiotherapy/' ?>">Know More</a></button>
                                </p>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Physiotherapy-.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="gynaecology1" role="tabpanel" aria-labelledby="gynaecology-tab">
                        <div class="row">
                            <div class="col-12 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Gynaecology1.webp" alt="">
                                </div>
                                <h2 class="text-center">Gynaecology</h2>
                                <p class="text-center">
                                    Gynecology is the specialized field of medicine that deals with the medical care of women and the physical care of the female reproductive system.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/services/gynecology/' ?>">Know More</a></button>
                                </p>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Gynaecology-.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="tab-pane fade" id="pathology1" role="tabpanel" aria-labelledby="pathology-tab">
                        <div class="row">
                            <div class="col-12 serv-text">
                                <div>
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Pathology1.webp" alt="">
                                </div>
                                <h2 class="text-center">Pathology</h2>
                                <p class="text-center">
                                    The Pathology services at Mangal Anand Hospital is equipped  to carry out the latest test on patients sample and assist clinicians in evaluation and diagnosis of diseases.
                                </p>
                                <p class="text-center">
                                    <button class="h-btn"><a href="<?php echo $page_link . '/services/pathology/' ?>">Know More</a></button>
                                </p>
                                <div class="serv-img">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Pathology-.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-9 pr-0">
                <ul class="nav nav-tabs flex-column serv3" id="myTab" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link clr1" data-toggle="tab" href="#radiology1" role="tab" aria-controls="radiology"
                            aria-selected="true"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/Radiology.webp" alt=""> &nbsp; &nbsp; Radiology <i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr2" data-toggle="tab" href="#physiotherapy1" role="tab"
                            aria-controls="physiotherapy" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/Physiotherapy.webp" alt=""> &nbsp; &nbsp; Physiotherapy <i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr3" data-toggle="tab" href="#gynaecology1" role="tab"
                            aria-controls="gynaecology" aria-selected="false"><img src="<?php bloginfo('template_directory') ?>/assets/images/services/Gynaecology.webp" alt=""> &nbsp; &nbsp; Gynaecology <i class="fas fa-arrow-right"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clr4" data-toggle="tab" href="#pathology1" role="tab"
                            aria-controls="pathology" aria-selected="false"> <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Pathology.webp" alt=""> &nbsp; &nbsp; Pathology <i class="fas fa-arrow-right"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</section>
