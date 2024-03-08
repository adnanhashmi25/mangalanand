<?php
/**
 * Template Name: Service
 * 
 * 
 * @package custom-theme
 */

//


 get_header();
?>

<div>
    <?php get_template_part('template-parts/banner/other-services') ?>
    
    <div class="heading mt-40">
        <h2 class="text-center"><span>Physiotherapy</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row">
            <div class="col-md-9">
                <p class="text-justify">
                    Physiotherapy is an exercise program that helps you improve movement, relieve pain, encourage blood flow for faster healing, and restore your physical function and fitness level. The main goal of physical therapy is to make your daily activities such as walking, getting in and out of bed, or climbing stairs easier. It can be prescribed as an individual treatment program or combined with other treatments. Physiotherapy is usually ordered to help you recover after certain surgeries, injuries and long-term health problems such as arthritis. 
                </p>
                <p class="text-justify">
                    A Physiotherapist will examine your symptoms and activity level, and create a treatment plan which primarily focuses on reducing your pain and swelling. The different procedures used by your PT depend on your specific physical complaints.
                </p>
                <div class="heading ">
                    <h2><span>What does Physiotherapy Involve?</span></h2>
                 </div>
                <p class="text-justify">
                    PT incorporates a combination of education, manual therapy, exercise, and technique. Some of the procedures commonly used are:
                </p>
            </div>
            <div class="col-md-3">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Physiotherapy-.webp" alt="">
            </div>
        </div>
        <div class="row illizarov-deformity">
            <div class="col-md-12">
                <ul>
                    <li>
                        <b>Stretching Exercises</b> <br>
                        Surgery, age, and conditions such as arthritis and osteoporosis can cause inflammation and stiffness in your joints and muscles while restricting your movement. Physical therapists guide you step by step to stretch different areas of your body to restore flexibility and enhance the movement of joints and muscles. 
                    </li>
                    <li>
                        <b>Core-strengthening and Stability Exercises</b> <br>
                        Specific exercises are designed to make the core (pelvis and lower back) strong enough to support the whole body. 
                        Ice and heat: Applying heat or cold treatments to muscles can stimulate the blood flow, and reduce pain and swelling. Heat treatment helps to reduce joint pain and spasms in the lower back and neck, and loosen muscles. Cooling works well for sprains and can decrease pain and swelling.
                    </li>
                    <li>
                        <b>Ultrasound</b> <br>
                        An ultrasound sends high-frequency sound waves over your body and stimulates deep body tissues. Vibrations produced by sound waves help to stimulate blood flow and facilitate the healing process. This procedure can also be used to improve metabolism and enhance the adhesiveness of bones after a fracture. 
                    </li>
                    <li>
                        <b>Electrostimulation</b> <br>
                        In this procedure, an electric current is passed through the area which requires treatment. This helps to relieve pain, stimulate muscles and nerves, and expand blood vessels.
                        These treatments may cause mild soreness or swelling. You should talk to your therapist if these symptoms are prolonged.
                    </li>
                </ul>
                <p class="text-center">
                    <button type="submit" class="btn btn-primary ">Make an Appointment</button>
                </p>
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();