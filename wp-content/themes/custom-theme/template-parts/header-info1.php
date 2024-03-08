<?php
/**
 * Header-info1 file.
 * 
 * @package custom-theme
 */
?>
<?php $logo_image = get_header_image() ?>

<div class="container header-info1">
    <div class="row">
        <div class="col-md-2">
            <a href="#"><img src="<?php echo $logo_image; ?>"></a>
        </div>
        <div class="col-md-2 d-flex align-items-center">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center">
                    <div>
                        <img src="<?php bloginfo('template_directory') ?>/assets/images/icons/24hours.webp" alt="">
                    </div>
                </div>
                <div class="col-md-8 contact-info">
                    <p>
                        Contact Us 24/7
                        0771 - 4622222
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-flex align-items-center">
            <div class="row">
                <div class="col-md-3 d-flex align-items-center">
                    <div>
                        <img src="<?php bloginfo('template_directory') ?>/assets/images/icons/phone.webp" alt="" width="80%">
                    </div>
                </div>
                <div class="col-md-8 contact-info">
                    <p>
                        Emergency Contact No.
                        72250 24301, 72250 24302
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-2 d-flex align-items-center">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center">
                    <div>
                        <img src="<?php bloginfo('template_directory') ?>/assets/images/icons/whatsapp.webp" alt="">
                    </div>
                </div>
                <div class="col-md-8 contact-info">
                    <p>
                        Chat on Whatsapp
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-flex align-items-center">
            <div>
                <button class="h-btn"> Book Appointment</button>
                <button class="h-btn mt-2"> Ilizarov Technique</button>
            </div>
        </div>
    </div>
</div>