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
        <h2 class="text-center"><span>Hip</span></h2>
    </div>
    <div class="container containspacing inside-services">
        <div class="row">
            <div class="col-md-9">
            <ul class="nav nav-tabs nav-fill w-100" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="anatomy-tab" data-toggle="tab" href="#anatomy" role="tab" aria-controls="anatomy" aria-selected="true">Anatomy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="conditions-tab" data-toggle="tab" href="#conditions" role="tab" aria-controls="conditions" aria-selected="false">Conditions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="procedure-tab" data-toggle="tab" href="#procedure" role="tab" aria-controls="procedure" aria-selected="false">Procedure</a>
                    </li>
                </ul>
                <div class="tab-content container" id="myTabContent">
                    <div class="tab-pane fade show active" id="anatomy" role="tabpanel" aria-labelledby="anatomy-tab">
                        <p>
                            Hip joint formed between Femur and acetabulum, which is “ball and socket” joint. It is the largest weight bearing joint in the human body. The ball is the head of the femur or thigh bone and socket is cup shaped acetabulum which is part of pelvic bone. It is surrounded by muscles, ligaments and tendons. The acetabulum is a deep, circular socket formed by union of three bones of pelvis: ilium, ischium and pubis. The stability of hip provided by joint capsule of acetabulum, muscles and ligaments. The head of femur rotates and glides within the acetabulum. The femoral head and acetabulum covered with smooth articular cartilage which allows pain free movement in the joint. Articular cartilage is thin, tough, flexible and slippery surface lubricated by synovial fluid that covers the weight bearing of the body. Hip movements includes Flexion, extension, abduction, adduction, circumduction and hip rotation. 
                        </p>
                    </div>
                    <div class="tab-pane fade" id="conditions" role="tabpanel" aria-labelledby="conditions-tab">
                        <ul>
                            <li>Intertrochanteric fracture</li>
                            <li>Femoral neck fracture</li>
                            <li>Acetabulum fracture</li>
                            <li>Femoral head fracture</li>
                            <li>Septic arthritis</li>
                            <li>Avascular necrosis of femoral head</li>
                            <li>Labral tear</li>
                            <li>Loose bodies</li>
                            <li>Iliopsoas impingement and snapping hip</li>
                            <li>Bursitis</li>
                            <li>Hip dislocation</li>
                            <li>Hip dysplasia</li>
                            <li>Rheumatoid arthritis</li>
                            <li>Perthes disease</li>
                            <li>Slipped capital femoral epiphysis</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="procedure" role="tabpanel" aria-labelledby="procedure-tab">
                        <ol>
                            <li>
                                <b>Conservative: </b>Includes casting and traction (Skin and skeletal traction)
                                <ul>
                                    <li><b>Casting:</b> closed reduction is done for dislocation, fracture. Splints and casting made up for fiberglass or plaster of Paris material to immobilization the limb.</li>
                                    <li><b>Tract ion:</b>used for management of fractures and dislocations that cannot be treated by casting. Skin traction involve attachment of traction tapes to skin of lower limb segment below the fracture, Skeletal traction, a pin is inserted through the bone distal to the fracture. Weight applied to this pin and patient is placed in an apparatus.</li>
                                </ul>
                            </li>
                            <li>
                                <b>Surgical treatment: </b>
                                <ul>
                                    <li>Open reduction and internal fixation (ORIF): In which fracture site is exposed and reduction of fracture is done. Internal fixation is done with Kirschner wires, plates & screws and intramedullary nail</li>
                                    <li>
                                        <b>External fixator: </b>In which the fracture stabilization is done at distance from the fracture site. It maintains the bone length and alignment without casting. It is used in following condition
                                        <ol>
                                            <li>Limb lengthening procedure</li>  
                                            <li>fracture with infection or nonunion</li>
                                            <li>Fracture having bony defect</li>
                                            <li>Comminuted and unstable fracture</li>
                                            <li>Open fracture with soft tissue involvement</li>
                                            <li>Pelvic fracture</li>
                                        </ol>
                                    </li>
                                </ul>
                            </li>
                            <li><b>Arthroscopy:</b>Hip arthroscopy is a minimally invasive surgery used to treat conditions like femoroacetabular impingement (FAI), Labral tears, removing pieces of bone or cartilage, Dysplasia, Tendon tears, Tendon releases. Few small incisions are made in the skin surrounding the hip, arthroscope inserted into the joint identify and repair damage tissue.</li>
                            <li><b>Replacement Surgery: </b>In hip replacement, the hip joint replaces with parts constructed of metal, ceramic and very hard plastic. The artificial joint reduces pain and improve function. The hip replacement is partial or total replacement, in partial replacement only the femoral component is replaced, in total replacement both femoral and acetabular component is replaced. The replacement surgery is done for osteoarthritis, Rheumatoid arthritis, Osteonecrosis.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/services/Hip-.webp" alt="">
            </div>
        </div>
        <div class="row illizarov-deformity">
            <div class="col-md-12">                
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