<?php
/**
 * Template Name: Contact Us
 * 
 * 
 * @package custom-theme
 */

//


 get_header();
?>
<?php $page_link = get_page_link(); ?>

<div>
    <?php get_template_part('template-parts/banner/contact-us') ?>
    
    <div class="container containspacing boinf">
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12"><p class="bg-color text-center" style="color:#fff">Mangal Anand Hospital, Chembur, Mumbai</p></div>
                    <div class="col-md-6">
                    <img src="<?php bloginfo('template_directory') ?>/assets/images/aboutus.webp" alt="">
                    </div>
                    <div class="col-md-6">
                        <p>
                        48 Swastik Park,
                        Sion-Trombay Road,
                        Chembur,
                        Mumbai – 400071
                        India
                        </p>
                        <p>
                            Contact number: <br>
                            70212 18182 / 022-2526 0000
                        </p>
                        <p>
                            Email Id: <br>
                            <a href="mailto:#">info@ilizarov.in</a>
                        </p>
                    </div>
                </div>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=mangal%20anand%20hospital&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
            </div>
            <div class="col-md-4">
                <p><b>QUICK ENQUIRY</b></p>
            <form>
                <div class="form-group">
                    <label>Name*</label>
                    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Email*</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label>Contact No.*</label>
                    <input type="contactno" class="form-control" id="exampleInputPassword1" placeholder="Enter Contact">
                </div>
                <div class="form-group">
                    <label>Your Enquiry*</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();