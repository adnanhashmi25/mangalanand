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
    <?php get_template_part('template-parts/banner/orthopedic-services') ?>
    
    <div class="heading mt-40">
        <h2 class="text-center"><span>Paediatric Orthopedics</span></h2>
    </div>
    <div class="container containspacing ">
        <div class="row">
            <div class="col-md-9">
                <div class="heading">
                    <h2><span>Common Pathologies </span></h2>
                </div>
                <ol>
                    <li>
                        <b>Soft tissue injury</b>
                        <ul>
                            <li>Definition – Commonly due to fall while playing or from bed resulting in pain and swelling, with injury to muscles or tendons. X rays would be normal. </li>
                            <li>Diagnosis – X rays and </li>
                            <li>Treatment – Ice application, pain relief medications and immobilization with splints if necessary</li>
                        </ul>
                    </li>
                    <li>
                        <b>Fractures</b>
                        <ul>
                            <li>Definition – common mechanism in children would be fall from bed or from height while playing. X ray would be revealing a fracture line</li>
                            <li>Treatment – In children, many fractures can be managed conservatively by plaster cast. If in case of displaced fractures, reduction of fracture under anaesthesaus and fixation with a k wire or a screw or a plate or nail</li>
                        </ul>
                    </li>
                </ol>
            </div>
            <div class="col-md-3">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/pediatric-orthopedic-.webp" alt="">
            </div>
        </div>
        <div class="row illizarov-deformity">
            <div class="col-md-12">
                <ol>
                <li>
                        <b>CTEV (club foot)</b>
                        <ul>
                            <li>Definition – It’s a congenital condition in which the foot is turned inwards by birth itself. </li>
                            <li>Diagnosis – Its diagnosed clinically at birth or prenatally by USG</li>
                            <li>Treatment – Ponsetti method is the most common and most effective method in which the serial plaster casts are applied weekly from the first week up to 6 weeks followed by a minor surgery (TA tenotomy). The child is advised to wear braces to prevent the recurrence of the deformities </li>
                        </ul>
                    </li>
                    <li>
                        <b>DDH ( Developmental Dysplasia of Hip)</b>
                        <ul>
                            <li>Definition – It’s a congenital condition in which the hip joint is dislocated (out of its place) from birth itself</li>
                            <li>Diagnosis – Its diagnosed clinically at birth or later in life once the child presents with abnormal gait or shortening of lower limb</li>
                            <li>Treatment –The rationale of treatment is reduction and maintaining that reduction with a brace followed by surgery if required </li>
                        </ul>
                    </li>
                    <li>
                        <b>CP (Cerebral Palsy)</b>
                        <ul>
                            <li>Definition – Non progressive neurological condition resulting in weakness of muscles caused to the lack of oxygen supply to the brain before, during or within 1 year of birth</li>
                            <li>Diagnosis – Clinically when the child presents with decreased movements of limb, delayed motor mile stones (sitting or standing), spasticity (tightness of muscles)</li>
                            <li>Treatment – Physical therapy remains the main stay of the treatment. Spasticity can be controlled by oral tablets and if required in some cases surgical release of the contractures. Gait analysis is an effective way to assess the functional status of the child.</li>
                        </ul>
                    </li>
                    <li>
                        <b>Osteomyelitis </b>
                        <ul>
                            <li>Definition – Bone infections in early child hood are a result of uncontrolled infections in blood (sepsis). Mostly commonly it affects the hip joint or the femur (thigh bone). The bone becomes weak and has a tendency to fracture. Infection also results in growth retardation leading to shortening and deformities. </li>
                            <li>Diagnosis – Blood tests and x rays. MRI to detect early bone involvement </li>
                            <li>Treatment – Intra venous IV antibiotics to control the infections followed by prevention of fracture by protected weight bearing in cast or brace. Deformities and shortening can be corrected surgically by external or internal fixation.</li>
                        </ul>
                    </li>
                    <li>
                        <b>PFFD (Proximal Femoral Focal Deficiency)</b>
                        <ul>
                            <li>Definition – Congenital shortening of femur (thigh bone)</li>
                            <li>Diagnosis -  X rays </li>
                            <li>Treatment – Lengthening by internal or external fixation</li>
                        </ul>
                    </li>
                    <li>
                        <b>CPT (Congenital Pseudoarthrosis of Tibia)</b>
                        <ul>
                            <li>Definition – Congenital non union of tibia ( leg bone)</li>
                            <li>Diagnosis – Clinical signs and x rays</li>
                            <li>Treatment – Surgical treatment by excision of Hamartoma, fixation with nailing + plating or ring fixator and bone grafting.</li>
                        </ul>
                    </li>
                    <li><b>Genu Valgum </b></li>
                    <li><b>Genu Varus</b></li>
                </ol>
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/our-doctors') ?>
    <?php get_template_part('template-parts/mission-vision') ?>
    <?php get_template_part('template-parts/life-at-a-glance') ?>
    
</div>


<?php
    get_footer();