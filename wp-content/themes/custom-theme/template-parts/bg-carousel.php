<?php
/**
 * Bg-carousel file.
 * 
 * @package custom-theme
 */
?>
<div class="bg-carousel">
    <div class="crel">
        <div class="owl-carousel owl-theme" id="bg-carousel">
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/banner1.webp" alt="">
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/banner2.webp" alt="">
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/banner3.webp" alt="">
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/banner4.webp" alt="">
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/banner5.webp" alt="">
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/banner6.webp" alt="">
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/banner8.webp" alt="">
            </div>
        </div>
        <div class="bluebox d-none d-md-block">
            <h2 class="text-center">Make an Appointment</h2>
            <div class="container">
                <!-- <form name="getappt" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone no.">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email id.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="message" class="form-control" id="message" placeholder="Message">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-primary" onclick="return validateContactForm();" >Make an Appointment</button>
                            </div>
                        </div>
                    </div>
                </form> -->
                <?php echo do_shortcode('[contact-form-7 id="197" title="Contact form 1"]') ?>
            </div>
        </div>
    </div>
</div>
<div class="bluebox d-none d-block d-md-none">
    <div class="container">
        <?php echo do_shortcode('[contact-form-7 id="197" title="Contact form 1"]') ?>
        <!-- <form name="getappt" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone no.">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email id.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="message" class="form-control" id="message" placeholder="Message">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-primary" onclick="return validateContactForm();" >Make an Appointment</button>
                            </div>
                        </div>
                    </div>
                </form> -->
    </div>
</div>