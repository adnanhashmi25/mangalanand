<?php
/**
 * Header-info file.
 * 
 * @package custom-theme
 */
?>

<div class="bg-color header-info d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="icons">
                    <a href="https://www.facebook.com/mangalanandhospital"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/mangananandhospital/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.twitter.com/mangal_hospital"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/mangalanandhospital"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/channel/UCkUWO74F3rI834IEBnkp0WA"><i class="fa fa-youtube-play"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=7021218182"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fa fa-rss"></i></a>
                </div>
            </div>
            <div class="col-md-2 direction">
                <a href="https://www.google.com/maps/place/Mangal+Anand+Hospital/@19.05654,72.890381,15z/data=!4m5!3m4!1s0x0:0x8457e8a1fa9e42dd!8m2!3d19.05654!4d72.890381"><p><i class="fas fa-map-marker-alt"></i> &nbsp;&nbsp;&nbsp; Get Directions</p></a>
            </div>
            <div class="col-md-2 fsize-change">
                <button id="decreasetext"><i class="fa fa-font" aria-hidden="true"></i></button>   
                <button id="resettext"><i class="fa fa-font" aria-hidden="true"></i></button>  
                <button id="increasetext"><i class="fa fa-font" aria-hidden="true"></i></button>  
            </div>
            <div class="col-md-2 language">
                <!-- <i class="fas fa-language"></i> -->
                <button class="btn " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo do_shortcode('[gtranslate]'); ?>
                </button>
            </div>
            <div class="col-md-3 pt-1">
                <a href="mailto:mah@parihar.net" class="email-id float-right">
                    <i class="fas fa-envelope"></i> mah@parihar.net
                </a>
            </div>
        </div>
    </div>
</div>


<div class="bg-color header-info d-none d-block d-md-none">
    <div class="row">
        <div class="col-12">
            <div class="icons text-center">
                <a href="https://www.facebook.com/mangalanandhospital"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/mangananandhospital/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.twitter.com/mangal_hospital"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/company/mangalanandhospital"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.youtube.com/channel/UCkUWO74F3rI834IEBnkp0WA"><i class="fa fa-youtube-play"></i></a>
                <a href="https://api.whatsapp.com/send?phone=7021218182"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fa fa-rss"></i></a>
                <a href="#"><i class="fas fa-language"></i></a>
                <a href="https://www.google.com/maps/place/Mangal+Anand+Hospital/@19.05654,72.890381,15z/data=!4m5!3m4!1s0x0:0x8457e8a1fa9e42dd!8m2!3d19.05654!4d72.890381"><i class="fas fa-map-marker-alt"></i></a>
                <a href="#"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </div>
</div>

<div id="mySidenav" class="sidenav d-none d-md-block" onclick="">
  <a href="#exampleModal" data-toggle="modal" data-target="#exampleModal" id="about"><i class="fas fa-calendar"></i>Book Appointment</a>
  <a href="https://api.whatsapp.com/send?phone=7021218182" id="blog"><i class="fab fa-whatsapp"></i>Chat on Whatsapp</a>
  <a href="tel:7021218182" id="projects"><i class="fas fa-phone-volume"></i>Contact us</a>
  <a href="mailto:mah@parihar.net" id="contact"><i class="fas fa-envelope"></i>Mail Us</a>
</div>

<!-- <div class="mobsidenav d-none d-block d-md-none">
    <ul>
        <li id="about1"><a href="#" class="text-center"><i class="fas fa-calendar"></i><br> Appointment</a></li>
        <li id="blog1"><a href="#" class="text-center"><i class="fab fa-whatsapp"></i><br>Whatsapp</a></li>
        <li id="projects1"><a href="#" class="text-center"><i class="fas fa-phone-volume"></i><br>Contact</a></li>
        <li id="contact1"><a href="#" class="text-center"><i class="fas fa-envelope"></i><br>Email</a></li>
    </ul>
</div> -->
<div></div>

<div class="mobsidenav d-none d-block d-md-none row">
    <div class="col-3" id="about1"><a href="#"><i class="fas fa-calendar"></i></a></div>
    <div class="col-3" id="blog1"><a href="https://api.whatsapp.com/send?phone=7021218182"><i class="fab fa-whatsapp"></i></a></div>
    <div class="col-3" id="projects1"><a href="tel:7021218182"><i class="fas fa-phone-volume"></i></a></div>
    <div class="col-3" id="contact1"><a href="mailto:mah@parihar.net"><i class="fas fa-envelope"></i></a></div>
</div>


