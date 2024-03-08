<?php
/**
 * Header Nav file.
 * 
 * @package custom-theme
 */


    $menu_class = \custom_theme\Inc\Menus::get_instance();
    $header_menu_id = $menu_class -> get_menu_id('custom-theme-header-menu');

    $header_menus = wp_get_nav_menu_items($header_menu_id);

?>

<?php $logo_image = get_header_image() ?>
<?php $page_link = home_url(); ?>

<div class="container header-nav">
        <div>
            <a href="https://www.mangalanandhospital.com/"><img src="<?php bloginfo('template_directory') ?>/assets/images/mob-logo.webp" alt="" class="w-80 d-none d-block d-md-none " id="image"></a>
            <a href="https://www.mangalanandhospital.com/wp-content/uploads/2022/08/Nabh.pdf"><img src="<?php bloginfo('template_directory') ?>/assets/images/NAHB-logo.webp" alt="" class="d-none d-block d-md-none mt-2" id="image1"></a>
        </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
                if ( ! empty( $header_menus ) && is_array( $header_menus ) ){
                ?>
                    <ul class="navbar-nav mx-auto nav-fill w-100">
                        <?php 
                            foreach( $header_menus as $menu_item ){
                                if( ! $menu_item->menu_item_parent ){

                                    $child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
                                    $has_children = !empty( $child_menu_items ) && is_array( $child_menu_items );

                                    if ( ! $has_children) {
                                        if( $menu_item->title == 'Services'){
                        ?>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url );?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <?php echo esc_html( $menu_item->title ); ?>
                                                </a>
                                                <div class="dropdown-menu mega-menu1" aria-labelledby="navbarDropdown">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <a class="dropdown-item colb">Orthopedic Services</a>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <a class="dropdown-item" href="<?php echo $page_link . '/orthopedic-services/trauma-fracture/' ?>">Trauma &amp; Fracture</a>
                                                                    <a class="dropdown-item" href="<?php echo $page_link . '/orthopedic-services/knee/' ?>">Knee</a>
                                                                    <a class="dropdown-item" href="<?php echo $page_link . '/orthopedic-services/spine/' ?>">Spine</a>
                                                                    <a class="dropdown-item" href="<?php echo $page_link . '/orthopedic-services/paediatric-orthopedics/' ?>">Paediatric <br> Orthopedic</a>                                                                    
                                                                    <a class="dropdown-item" href="<?php echo $page_link . '/orthopedic-services/sports-medicine/' ?>">Sports Medicine</a>                                                                    
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a class="dropdown-item" href="<?php echo $page_link . '/orthopedic-services/hand-wrist/' ?>">Hand &amp; Wrist</a>
                                                                    <a class="dropdown-item" href="<?php echo $page_link . '/orthopedic-services/elbow/' ?>">Elbow</a>
                                                                    <a class="dropdown-item" href="<?php echo $page_link . '/orthopedic-services/foot-ankle/' ?>">Foot &amp; Ankle</a>
                                                                    <a class="dropdown-item" href="<?php echo $page_link . '/orthopedic-services/hip/' ?>">Hip</a>  
                                                                    <a class="dropdown-item" href="<?php echo $page_link . '/orthopedic-services/shoulder/' ?>">Shoulder</a>                                                                                                                                      
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <a class="dropdown-item colb disabled-link">Other Services</a>
                                                            <a class="dropdown-item" href="<?php echo $page_link . '/services/gynecology/' ?>">Gynecology</a>
                                                            <a class="dropdown-item" href="<?php echo $page_link . '/services/radiology/' ?>">Radiology</a>
                                                            <a class="dropdown-item" href="<?php echo $page_link . '/services/physiotherapy/' ?>">Physiotherapy</a>
                                                            <a class="dropdown-item" href="<?php echo $page_link . '/services/pathology/' ?>">Pathology</a>
                                                            <a class="dropdown-item" href="<?php echo $page_link . '/services/dialysis/' ?>">Dialysis</a>
                                                            <a class="dropdown-item" href="<?php echo $page_link . '/services/pharmacy/' ?>">Pharmacy</a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </li>
                        <?php
                                        } else if( $menu_item->title == 'Patient Facilities' ){                  
                        ?>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url );?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <?php echo esc_html( $menu_item->title ); ?>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item " href="#">TPA/Insurance Empanelment </a>
                                                <a class="dropdown-item dropdown dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Claim Reimbursement Help</a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="#">Easy Aspatal</a>
                                                        <a class="dropdown-item" href="#">Gpay</a>
                                                    </div>
                                                <a class="dropdown-item dropdown dropdown-toggle " href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Healthcare Finance</a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown1">
                                                        <a class="dropdown-item" href="#">Bajaj Finance</a>
                                                        <a class="dropdown-item" href="#">Gmoney</a>
                                                        <a class="dropdown-item" href="#">Easy Aspatal</a>
                                                    </div>
                                            </div>
                                        </li>
                        <?php                    
                                        }
                                        else if( $menu_item->title == 'Case Studies' ){
                        ?>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url );?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <?php echo esc_html( $menu_item->title ); ?>
                                                </a>
                                                <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <a class="dropdown-item colb" href="<?php echo $page_link . '/case-studies/fractures/' ?>">Fractures</a>
                                                                <a class="dropdown-item disabled-link" href="#"><b> Acute Fracture</b></a>
                                                                <ul>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/fractures/comminuted-fracture-distal-humerus/' ?>">Comminuted Fracture Distal<br> Humerus</a></li>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/fractures/compound-fracture-vac/' ?>">Compound Fracture &amp; VAC</a></li>
                                                                </ul>
                                                                <a class="dropdown-item disabled-link" href="#"><b>Nonunion</b></a>
                                                                <ul>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/fractures/proximal-tibia/' ?>">Proximal Tibia</a></li>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/fractures/tibia/' ?>">Tibia</a></li>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/fractures/distal-humerus/' ?>">Distal Humerus</a></li>
                                                                </ul>
                                                                <a class="dropdown-item disabled-link" href="#"><b>Malunion</b></a>
                                                                <ul>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/fractures/femur/' ?>">Femur</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a class="dropdown-item colb" href="<?php echo $page_link . '/case-studies/bone-deformity/' ?>"> Bone Deformity</a>
                                                                <a class="dropdown-item disabled-link" href="#"><b>Acute Correction</b></a>
                                                                <ul>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/bone-deformity/lrs-bilateral-tibia/' ?>">LRS - Bilateral Tibia</a></li>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/bone-deformity/lrs-rotational-deformity-femur/' ?>">LRS - Rotational Deformity <br> Femur (with Shortening)</a></li>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/bone-deformity/lrs-oblique-plane-deformity-femur/' ?>">LRS - Oblique Plane <br> Deformity Femur</a></li>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/bone-deformity/nailing/' ?>">Nailing</a></li>
                                                                </ul>
                                                                <a class="dropdown-item disabled-link" href="#"><b>Ilizarov Correction</b></a>
                                                                <ul>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/bone-deformity/proximal-tibia1/' ?>">Proximal Tibia</a></li>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/bone-deformity/distal-femur/' ?>">Distal Femur</a></li>
                                                                </ul>
                                                                <a class="dropdown-item disabled-link" href="#"><b>Hexapod Correction</b></a>
                                                                <ul>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/bone-deformity/metaphyseal-dysplasia/' ?>">Metaphyseal Dysplasia</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a class="dropdown-item colb" href="<?php echo $page_link . '/case-studies/bone-infection/' ?>">Bone Infection</a>
                                                                <a class="dropdown-item disabled-link" href="#"><b>Infection</b></a>
                                                                <ul>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/bone-infection/femur1/' ?>">Femur</a></li>
                                                                </ul>
                                                                <a class="dropdown-item disabled-link" href="#"><b>Infected Nonunion</b></a>
                                                                <ul>
                                                                    <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/bone-infection/proximal-femur/' ?>">Proximal Femur</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                            <a class="dropdown-item colb" href="<?php echo $page_link . '/case-studies/joint-problems/' ?>"> Joint Problems (Arthritis)</a>
                                                            <ul>
                                                                <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/joint-problems/hip-replacement/' ?>">Hip Replacement</a></li>
                                                                <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/joint-problems/knee-replacement/' ?>">Knee Replacement</a></li>
                                                                <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/joint-problems/intra-articular-osteotomy/' ?>">Intra Articular Osteotomy</a></li>
                                                                <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/joint-problems/high-tibial-osteotomy/' ?>">High Tibial Osteotomy (HTO)</a></li>
                                                                <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/joint-problems/arthrolysis-elbow/' ?>">Arthrolysis - Elbow</a></li>
                                                                <li><a class="dropdown-item" href="<?php echo $page_link . '/case-studies/joint-problems/illizarov-hip-reconstruction/' ?>">Ilizarov Hip Reconstruction</a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                        <?php
                                        }
                                        else {
                        ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo esc_url( $menu_item->url );?>">
                                                <?php echo esc_html( $menu_item->title ); ?>
                                            </a>
                                        </li>
                        <?php
                                   } } else {
                        ?>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url );?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <?php echo esc_html( $menu_item->title ); ?>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <?php
                                                    foreach ( $child_menu_items as $child_menu_item){
                                                ?>
                                                        <a class="dropdown-item" href="<?php echo esc_url( $child_menu_item->url );?>">
                                                            <?php echo esc_html( $child_menu_item->title ); ?>
                                                        </a>
                                                <?php        
                                                    }
                                                ?>
                                            </div>
                                        </li>
                        <?php
                                    }
                        ?>
                                    
                        <?php
                                }
                            }
                        ?>
                    </ul>
                <?php
                }
            ?>
        </div>
    </nav>
</div>
