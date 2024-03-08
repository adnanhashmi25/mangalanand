<?php
/**
 * Template Name: Patient Instructions
 * 
 * 
 * @package custom-theme
 */

//


 get_header();
?>

<div>
    <?php get_template_part('template-parts/banner/process') ?>
    
    <div class="heading mt-40">
        <h2 class="text-center"><span>Patient instructions for admission and surgery</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row illizarov-deformity">
            <div class="col-md-12 ">
                <p class="text-justify">
                    A pre-op profile (set of blood investigations, urine test, ECG and chest x-ray) is required to check your overall fitness for surgery. If you have not done one before then get in touch with us, we shall email the list to you.
                </p>
                <p>
                    <b>Instructions</b>
                </p>
                <p>
                    <b>Admission:</b>
                </p>
                <ul>
                    <li>If you haven't done the pre-op profile, you need to come in empty stomach around 8am on the day prior to surgery.</li>
                    <li>If the pre-op profile has been done and you have shown it to us, you may report at 5pm on the day prior to surgery for admission.</li>
                    <li>Bring all your reports and x-rays.</li>
                </ul>
                <p>
                    <b>Payment:</b>
                </p>
                <ul>
                    <li>You must have been given an estimated amount, submit that at the reception at the time of admission.</li>
                </ul>
                <p>
                    <b>Allergies:</b>
                </p>
                <ul>
                    <li>Let the doctor/nurse know if you have any food or drug allergies.</li>
                </ul>
                <p>
                    <b>Admission:</b>
                </p>
                <ul>
                    <li> Let us know if you are taking any drugs for blood pressure, diabetes, heart condition or other disorders like thyroid disorder.</li>
                    <li>Also let us know if you have been on blood thinners like Asprin, Disprin, Ecosprin, Clopivas, Clopidrogel.</li>
                </ul>
                <p>
                    <b>Food:</b>
                </p>
                <ul>
                    <li>You can eat and drink your regular diet till the night before surgery.</li>
                </ul>
                <p>
                    <b>Smoking:</b>
                </p>
                <ul>
                    <li>Do not smoke or drink alcohol.</li>
                </ul>
                <p>
                    <b>Day of surgery:</b>
                </p>
                <ul>
                    <li>Do not eat or drink anything in the morning of surgery.</li>
                    <li>Patients on blood pressure/thyroid/epilepsy medication should take the morning dose with a sip of water (confirm with doctor).</li>
                    <li>Brush your teeth in the morning of surgery.</li>
                    <li>You may take bath.</li>
                </ul>
                <p>
                    <b>What to expect prior to surgery?</b>
                </p>
                <p class="text-justify">
                    The anesthetist will judge, discuss, and inform you about the kind of anesthesia suitable for you and give you some kind of pre-anesthetic medication. You will change into surgical gown and tuck your hair in a head cap. In the operation theatre you will see the doctor and other support staff in theatre clothes, head caps and masks. The operation theatre is air conditioned and the temperatures are deliberately kept at around 18 deg Celsius. These are meant to reduce the risk o infection in the theatre. If the temperature is too cold for you, let the staff know and they would put on additional covers to warm you. The intravenous access is established using a vein flow - this is a plastic cannula which is inserted into the vein. The anesthetist then goes about attaching various monitoring devices like ECG leads on the chest, blood pressure cuff on the arm etc. Depending on the type of anesthesia either regional i.e. only the part to be operated upon is anesthetised or general i.e. the
                    whole body is anesthetised. Once the anesthesia takes its effect then the cleaning and draping is done, so if you are under a regional anesthesia then you would be able to see the initial process of setting up the things.
                </p>
                <p>
                    <b>What to expect post surgery?</b>
                </p>
                <p class="text-justify">
                    The worst fear of surgery any patient has is of pain. We take a lot of care to take away or minimize the pain. The surgery itself is done through small incisions and minimal soft tissue dissection as far as possible. Other measures are supportive in the form of antiinflammatory medication and suppositories, local anesthetic infiltration into the incision site at the end of surgery and continued epidural analgesia using infusion or reservoir pumps. After the surgery, patient is kept in the recovery room for an hour or two before shifting to the room. The limb is supported and elevated on pillows to prevent or reduce any swelling. Once the patient is comfortable and the regional anesthesia wears off, gentle active static exercises are encouraged. One of the team members keeps checking on you from time to
                    time and ensures your well being
                </p>
                <p class="text-justify">
                    After a spinal or epidural anesthesia one is expected to remain lying down for about 24 hours to prevent headache, nausea or giddiness.
                </p>
                <p class="text-justify">
                    The other thing to expect specially after spinal or epidural anesthesia is some difficulty in voiding urine for the first time. This is a perfectly normal response partly because of the bladder being full before the sensations have fully recovered from the effect of anesthesia and partly because of the posture - one is not used to void in the bed using a bed pan. We prefer avoiding an indwelling catheter as far as possible, so we would do a one time catheterization to empty the bladder if patient is unable to void, but if need be then an indwelling catherisation is done. Most of the patients are able to void urine without much difficulty.
                </p>
                <p class="text-justify">
                    A few hours from surgery one may notice blood spots on the dressing. Do not get alarmed. Let the staff know if you notice it. One of the members from surgical team will see you and do the needful.
                </p>
                <p class="text-justify">
                    Post surgery the fasting status continues for about 4-6 hours, following which we start with sips of water, moving on to liquids and soft diet according to the comfort and progress of the patient.
                </p>
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    <div class="heading">
        <h2 class="text-center"><span>Latest News &amp; Blog</span></h2>
    </div>
    <img src="<?php bloginfo('template_directory') ?>/assets/images/blog.webp" alt="" >
</div>


<?php
    get_footer();
