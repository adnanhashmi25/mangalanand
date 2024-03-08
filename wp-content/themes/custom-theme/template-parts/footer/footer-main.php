<?php
/**
 * Footer Main file.
 * 
 * @package custom-theme
 */
?>
<?php $logo_image = get_header_image() ?>
<?php $page_link = home_url(); ?>

<div class="container containspacing d-none d-md-block">
    <div class="row">
        <div class="col-md-3">
            <a href="https://www.mangalanandhospital.com/"><img src="<?php bloginfo('template_directory') ?>/assets/images/logo.webp" alt="" ></a>
            <a href="https://www.mangalanandhospital.com/wp-content/uploads/2022/08/Nabh.pdf"><img src="<?php bloginfo('template_directory') ?>/assets/images/NAHB-logo.webp" alt="" class="w-70"></a>
            <p class="mt-2"><b>Get In Touch</b></p>
            <div class="f-icons">
                <a href="https://www.facebook.com/mangalanandhospital"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/mangananandhospital/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.twitter.com/mangal_hospital"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/company/mangalanandhospital"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.youtube.com/channel/UCkUWO74F3rI834IEBnkp0WA"><i class="fa fa-youtube-play"></i></a>
                <a href="https://api.whatsapp.com/send?phone=7021218182"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fa fa-rss"></i></a>
            </div>
        </div>
        <div class="col-md-2">
            <ul class="f-list">
                <li><b>About Us</b></li>
                <li><a href="<?php echo $page_link . '/about-us/our-founder/' ?>">Our Founder</a></li>
                <li class="f-16"><a href="<?php echo $page_link . '/about-us/our-management/' ?>">Our Management</a></li>
                <li><a href="<?php echo $page_link . '/about-us/why-cllr/' ?>">Why CLLR</a></li>
                <li><a href="<?php echo $page_link . '/about-us/our-team/' ?>">Our Team</a></li>
            </ul>
            <ul class="f-list">
                <li><b>Other Services</b></li>
                <li><a href="<?php echo $page_link . '/services/gynecology/' ?>">Gynecology</a></li>
                <li><a href="<?php echo $page_link . '/services/radiology/' ?>">Radiology</a></li>
                <li><a href="<?php echo $page_link . '/services/physiotherapy/' ?>">Physiotherapy</a></li>
                <li><a href="<?php echo $page_link . '/services/pathology/' ?>">Pathology</a></li>
                <li><a href="<?php echo $page_link . '/services/dialysis/' ?>">Dialysis</a></li>
                <li><a href="<?php echo $page_link . '/services/pharmacy/' ?>">Pharmacy</a></li>
            </ul>
            
        </div>
        <div class="col-md-3">
            <ul class="f-list">
                <li><b>Orthopaedic Services</b></li>
                <li><a href="#">Trauma & Fracture</a></li>
                <li><a href="<?php echo $page_link . '/orthopedic-services/knee/' ?>">Knee</a></li>
                <li><a href="<?php echo $page_link . '/orthopedic-services/spine/' ?>">Spine</a></li>
                <li><a href="<?php echo $page_link . '/orthopedic-services/paediatric-orthopedics/' ?>">Pediatric Orthopaedic</a></li>
                <li><a href="<?php echo $page_link . '/orthopedic-services/sports-medicine/' ?>">Sports Medicine</a></li>
                <li><a href="<?php echo $page_link . '/orthopedic-services/hand-wrist/' ?>">Hand & Wrist</a></li>
                <li><a href="<?php echo $page_link . '/orthopedic-services/elbow/' ?>">Elbow</a></li>
                <li><a href="<?php echo $page_link . '/orthopedic-services/foot-ankle/' ?>">Foot & Ankle</a></li>
                <li><a href="<?php echo $page_link . '/orthopedic-services/hip/' ?>">Hip</a></li>
                <li><a href="<?php echo $page_link . '/orthopedic-services/shoulder/' ?>">Shoulder</a></li>
            </ul>
        </div>
        <div class="col-md-2">
            <ul class="f-list">
                <li><b>CLLR</b></li>
                <li><a href="<?php echo $page_link . '/cllr/lengthening/' ?>">Limb Lengthening</a></li>
                <li><a href="<?php echo $page_link . '/cllr/deformity/' ?>">Deformity Correction</a></li>
                <li><a href="<?php echo $page_link . '/cllr/knee-preservation/' ?>">Knee Preservation</a></li>
                <li><a href="<?php echo $page_link . '/cllr/ilizarov-technique/' ?>">Illizarov Technique</a></li>
                <li><a href="<?php echo $page_link . '/cllr/bone-joint-infection/' ?>">Bone Joint Infection</a></li>
                <li><a href="<?php echo $page_link . '/cllr/non-union/' ?>">Non-Union</a></li>
            </ul>
        </div>
        <div class="col-md-2">
            <ul class="f-list">
                <li><b>Patient Facilities</b></li>
                <li><a href="#">TPA/Insurance Emplacemnet</a></li>
                <li><a href="#">Claim Reimbursement Help</a></li>
                <li><a href="#">Healthcare Finance</a></li>
            </ul>
            <ul class="f-list">
                <li><a href="<?php echo $page_link . '/contact-us/' ?>"><b>Contact Us</b></a></li>
            </ul>
            <ul class="f-list">
                <li><a href="<?php echo $page_link . '/news-blog/' ?>"><b>News & Blog</b></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container containspacing  d-none d-block d-md-none">
    <div class="row">
        <div class="col-12">
            <p class="text-center">
                <a class="" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    <b>About Us &#x25BE;</b>
                </a>
            </p>
            <div class="collapse" id="collapseExample6">
                <div class="card our-doc">
                    <ul class="f-list">
                        <li><a href="<?php echo $page_link . '/about-us/our-founder/' ?>">Our Founder</a></li>
                        <li><a href="<?php echo $page_link . '/about-us/our-management/' ?>">Our Management</a></li>
                        <li><a href="<?php echo $page_link . '/about-us/why-cllr/' ?>">Why CLLR</a></li>
                        <li><a href="<?php echo $page_link . '/about-us/our-team/' ?>">Our Team</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-center">
                <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    <b>Orthopaedic Services &#x25BE;</b>
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card our-doc">
                    <ul class="f-list">
                        <li><a href="#">Trauma & Fracture</a></li>
                        <li><a href="<?php echo $page_link . '/orthopedic-services/knee/' ?>">Knee</a></li>
                        <li><a href="<?php echo $page_link . '/orthopedic-services/spine/' ?>">Spine</a></li>
                        <li><a href="<?php echo $page_link . '/orthopedic-services/paediatric-orthopedics/' ?>">Pediatric Orthopaedic</a></li>
                        <li><a href="<?php echo $page_link . '/orthopedic-services/sports-medicine/' ?>">Sports Medicine</a></li>
                        <li><a href="<?php echo $page_link . '/orthopedic-services/hand-wrist/' ?>">Hand & Wrist</a></li>
                        <li><a href="<?php echo $page_link . '/orthopedic-services/elbow/' ?>">Elbow</a></li>
                        <li><a href="<?php echo $page_link . '/orthopedic-services/foot-ankle/' ?>">Foot & Ankle</a></li>
                        <li><a href="<?php echo $page_link . '/orthopedic-services/hip/' ?>">Hip</a></li>
                        <li><a href="<?php echo $page_link . '/orthopedic-services/shoulder/' ?>">Shoulder</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-center">
                <a class="" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    <b>Other Services &#x25BE;</b>
                </a>
            </p>
            <div class="collapse" id="collapseExample2">
                <div class="card our-doc">
                    <ul class="f-list">
                        <li><a href="<?php echo $page_link . '/services/gynecology/' ?>">Gynecology</a></li>
                        <li><a href="<?php echo $page_link . '/services/radiology/' ?>">Radiology</a></li>
                        <li><a href="<?php echo $page_link . '/services/physiotherapy/' ?>">Physiotherapy</a></li>
                        <li><a href="<?php echo $page_link . '/services/pathology/' ?>">Pathology</a></li>
                        <li><a href="<?php echo $page_link . '/services/dialysis/' ?>">Dialysis</a></li>
                        <li><a href="<?php echo $page_link . '/services/pharmacy/' ?>">Pharmacy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-center">
                <a class="" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    <b>CLLR &#x25BE;</b>
                </a>
            </p>
            <div class="collapse" id="collapseExample3">
                <div class="card our-doc">
                    <ul class="f-list">
                        <li><a href="<?php echo $page_link . '/cllr/lengthening/' ?>">Limb Lengthening</a></li>
                        <li><a href="<?php echo $page_link . '/cllr/deformity/' ?>">Deformity Correction</a></li>
                        <li><a href="<?php echo $page_link . '/cllr/knee-preservation/' ?>">Knee Preservation</a></li>
                        <li><a href="<?php echo $page_link . '/cllr/ilizarov-technique/' ?>">Illizarov Technique</a></li>
                        <li><a href="<?php echo $page_link . '/cllr/bone-joint-infection/' ?>">Bone Joint Infection</a></li>
                        <li><a href="<?php echo $page_link . '/cllr/non-union/' ?>">Non-Union</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-center">
                <a class="" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    <b>Patient Facilities &#x25BE;</b>
                </a>
            </p>
            <div class="collapse" id="collapseExample4">
                <div class="card our-doc">
                    <ul class="f-list">
                        <li><a href="#">TPA/Insurance Emplacemnet</a></li>
                        <li><a href="#">Claim Reimbursement Help</a></li>
                        <li><a href="#">Healthcare Finance</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-center">
                <a class="" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    <b>Contact Us &#x25BE;</b>
                </a>
            </p>
            <div class="collapse" id="collapseExample1">
                <div class="card our-doc">
                    <ul class="f-list">
                        <li><a href="">Phone Directory</a></li>
                        <li><a href="">Maps and Directions</a></li>
                        <li><a href="">Enquires</a></li>
                        <li><a href="">Media</a></li>
                        <li><a href="">More</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>    
</div>

<div class="row">
    <div class="col-md-12 copyright">
        <p>&copy; 1980-<?php echo date("Y"); ?>. All Rights Reserved. Privacy Policy & Disclaimer</p>
    </div>
</div>