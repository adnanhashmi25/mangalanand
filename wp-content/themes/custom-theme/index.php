<?php
/**
 * 
 * Template Name: index
 * 
 * Main template file.
 * 
 * @package custom-theme
 */


 get_header();
?>

<div class="blog">
    <?php get_template_part('template-parts/banner/blog') ?>
    <div class="heading mt-40">
        <h2 class="text-center"><span>Latest News & Blog</span></h2>
    </div>
    <div class="container">
        <div class="row mt-40">
            <div class="col-md-8">
                <?php 
                    while(have_posts()){
                        the_post();
                        $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                ?>
                <div class="blog-tab">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="<?php echo $imagepath[0] ?>" alt="">
                        </div>
                        <div class="col-md-7">
                            <a href="<?php  the_permalink();  ?>"><h2><b><?php the_title() ?></b></h2></a>
                            <p>
                                <?php the_excerpt() ?>
                            </p>
                        </div>
                        <div class="col-md-2">
                            <ul class="blog-icons">
                                <li><a href="#"><i class="fas fa-calendar-alt"></i></a></li>
                                <li><a href="#"><i class="fas fa-thumbs-up"></i></a></li>
                                <li><a href="<?php  the_permalink();  ?>"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="fas fa-location-arrow"></i></a></li>
                                <li><a href="#"><i class="fas fa-comment"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php  echo wp_pagenavi();  ?>
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


<?php get_template_part('template-parts/our-doctors') ?>
<?php get_template_part('template-parts/mission-vision') ?>
<?php
    get_footer();