<?php
/**
 * Template Name: Doctor Profile
 * 
 * 
 * @package custom-theme
 */

//


 get_header();
?>

<div class="our-doc-p">
    
    
    <div class="row">
        <div class="col-md-6 pr-0">
            <img src="<?php bloginfo('template_directory') ?>/assets/images/doctor-banner/Dr-Swaroop-Hegde.webp" alt="" >
        </div>
        <div class="col-md-6 info">
            <div class="container mt-3">
                <h2 class="font-weight-bold">Dr. Swaroop Hegde</h2>
                <p>
                    MD - General Medicine and Endocrinology <br>
                    Mangal Anand Hospital, Chembur, Mumbai
                </p>
                <h3>SPECIALITY</h3>
                <p class="mt-2"><span>General Medicine</span><span>Endocrinology</span><span>Critical care medicine</span></p>
                <table class="doc-table">
                    <tr>
                        <td class="colg">Consulting <br> Room</td>
                        <td class="colg">Consultaion <br> Timing</td>
                    </tr>
                    <tr>
                        <td>204</td>
                        <td>On Appointment</td>
                    </tr>
                </table>
                <p class="mt-3">
                    <i class="fa fa-linkedin" aria-hidden="true"></i> &nbsp;<a href="https://www.linkedin.com/in/dr-swaroop-hegde-4921aa66/?originalSubdomain=in">linkedin.com/in/dr-swaroop-hegde-4921aa66/</a>
                </p>
                <p>
                    <button type="button" class="h-btn" data-toggle="modal" data-target="#exampleModal"> Make an Appointment</button>
                </p>
            </div>
            
        </div>
    </div>
    <div class="heading mt-40">
        <h2 class="text-center"><span>About Dr. Swaroop Hegde</span></h2>
    </div>
    <div class="container mt-20">
        <div class="col-md-12">
            <p class="text-justify">
                Dr. Swaroop Hegde has been associated with Mangal Anand Hospital from the last 2 years treating medical ailments like diabetes, hypertension and critical care.
            </p>
            <!-- <p class="text-justify">Dr. Swaroop Satish Hegde is the consultant physician, Endocrinologist and critical care specialist at Mangal Anand Hospital, Chembur, Mumbai. He has an M.D. in Medicine, Diploma in Cardiology, Diploma in Diabetology, diploma in critical care medicine and diploma in Endocrinology.
                                    He has completed his MBBS from RGUHS University, M.D in Medicine from MGUHS University, Diploma in Cardiology and diabetology and critical care medicine from Baltimore.</p>
            <p class="text-justify">Dr. Swaroop has also worked as an Asst. Prof. at MGM Medical college. Dr. Swaroop is one of the leading specialists who specialises in cardiology and endocrinology at Mangal Anand hospital. His research experience includes Research and written papers on prediction of morbidity and mortality. Dr. Swaroop has achieved a lot in the field of medicine, including a citation from the Governor of Maharashtra for his service in Covid-19 Pandemic, having treated over 75,000+ covid cases in India and abroad.</p>
            <p class="text-justify">Dr. Swaroop Satish Hegde practices at Mangal Anand Hospital and is available for consultation in Room No. 204 on Appointment.</p> -->
        </div>
    </div>
    <?php get_template_part('template-parts/our-doctors') ?>
</div>

<?php
    get_footer();