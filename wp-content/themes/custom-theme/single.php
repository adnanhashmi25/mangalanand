<?php
/**
 * 
 * Template Name: Blog Page
 * 
 * Main template file.
 * 
 * @package custom-theme
 */


 get_header();
?>
<div class="blog-inside">
    <?php get_template_part('template-parts/banner/blog') ?>
    
    <div class="container">
        <div class="row mt-40">
            <div class="col-md-8">
                <div class="heading mt-40">
                    <h2><span><?php the_title() ?></span></h2>
                </div>
                <?php 
                    $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                ?>
                <img src="<?php echo $imagepath[0] ?>" alt="">
                <p><?php the_content(); ?></p>
            </div>
            <div class="col-md-4">
                <h2>Make an Appointment</h2>
                <form name="getappt" method="POST">
                <?php echo do_shortcode('[contact-form-7 id="389" title="Untitled"]') ?>
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone no.">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email id.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="message" class="form-control" id="message" placeholder="Message" row="3">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-primary" >Make an Appointment</button>
                            </div>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</div>



<?php get_template_part('template-parts/our-doctor-noform') ?>
<?php get_template_part('template-parts/mission-vision') ?>
<?php
    get_footer();