<?php
/**
 * Header-info1 file.
 * 
 * @package custom-theme
 */
?>
<?php $logo_image = get_header_image() ?>

<div class="container header-info1 d-none d-md-block">
    <div class="row">
        <div class="col-md-3 d-flex">
            <div class="row">
                <div class="col-md-6">
                    <a href="https://www.mangalanandhospital.com/"><img src="<?php bloginfo('template_directory') ?>/assets/images/logo.webp" alt="" class="img-responsive d-none d-md-block"></a>
                </div>
                <div class="col-md-6">
                    <a href="https://www.mangalanandhospital.com/wp-content/uploads/2022/08/Nabh.pdf"><img src="<?php bloginfo('template_directory') ?>/assets/images/NAHB-logo.webp" alt="" class="img-responsive d-none d-md-block"></a>
                </div>
            </div>
        </div>
        <div class="col-md-2 d-flex align-items-center header-info1-inside">
            <div class="row">
                <div class="col-md-3 d-flex align-items-center">
                    <div>
                        <img src="<?php bloginfo('template_directory') ?>/assets/images/icons/24hours.svg" alt="">
                    </div>
                </div>
                <div class="col-md-9 contact-info">
                    <a href="tel:02225260000"><p>
                        Contact Us <br> 
                        022-25260000
                    </p></a>
                </div>
            </div>
        </div>
        <div class="col-md-2 d-flex align-items-center header-info1-inside">
            <div class="row  w-100">
                <div class="col-md-3 d-flex align-items-center">
                    <div>
                        <img src="<?php bloginfo('template_directory') ?>/assets/images/icons/phone.svg" alt="" width="80%" class="w-70">
                    </div>
                </div>
                <div class="col-md-9 contact-info">
                    <a href="tel:7021218182"><p>
                        Emergency Contact No.
                        70212 18182
                    </p></a>
                </div>
            </div>
        </div>
        <div class="col-md-2 d-flex align-items-center header-info1-inside">
            <div class="row">
                <div class="col-md-3 d-flex align-items-center">
                    <div>
                        <img src="<?php bloginfo('template_directory') ?>/assets/images/icons/whatsapp.svg" alt="">
                    </div>
                </div>
                <div class="col-md-9 contact-info">
                    <a href="https://api.whatsapp.com/send?phone=7021218182"><p>
                        Chat on Whatsapp
                        70212 18182
                    </p></a>
                </div>
            </div>
        </div>
        <div class="col-md-2 d-flex align-items-center ml-40">
            <div>
                <button type="button" class="h-btn float-right w-100" data-toggle="modal" data-target="#exampleModal"> Book Appointment</button>
                <!-- <button class="h-btn mt-2 float-right w-100"> CLLR</button> -->
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h2 class="text-center">Make an Appointment</h2>
        <!-- <form name="modalform" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" name="name1">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Phone no." name="phone1">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email id." name="email1">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message1" placeholder="Message" rows="3"></textarea>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary" onclick="return validateModalContactForm();" >Make an Appointment</button>
                </div>
            </form> -->
        <?php echo do_shortcode('[contact-form-7 id="316" title="modal form"]') ?>
      </div>
    </div>
  </div>
</div>