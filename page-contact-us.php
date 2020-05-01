<?php

// Template Name: Contact Us Page


get_header();
?>



  <div class="services-area bg-orange bredcum-h">
        <div class="container">
            <div class="row">
                <h1 class="text-center breadcum_head">Contact Us</h1>
            </div>
        </div>
    </div>
   
<!-- Start Our About
    ============================================= -->
    <div class="about-area inc-video default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center">
                        <h2>We Will Contact You Soon </h2>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    
					<?php while( have_posts()) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; ?>
                </div>
                <div class="col-md-2"></div>
            </div>
            
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <ul class="contact-info mob-mt-20">
                        <li><i class="far fa-phone"></i></li>
                        <li><h4 class="contact_t">PHONE</h4><p class="regular-para color-gray mt-2">Phone: 1-888-236-0020 <br> E-mail: Info@encneurosolutions.com</p></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="contact-info mob-mt-20 contact-add">
                        <li><i class="far fa-map-marker-alt"></i></li>
                        <li><h4 class="contact_t">ADDRESS</h4><p class="regular-para color-gray mt-2">
                        ENC Neuro Solutions <br>
                        6215 Ferris Square #140,
                        San Diego, CA 92121</p></li>
                    </ul>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="margin-top: 70px;">
               <div class="col-md-2"></div>
                <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.265793042153!2d-117.18547268533274!3d32.891140185465915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc075b6d6ce08f%3A0xed030137089540a4!2s6215%20Ferris%20Square%20%23140%2C%20San%20Diego%2C%20CA%2092121%2C%20USA!5e0!3m2!1sen!2sbd!4v1579883494112!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="col-md-2"></div>
            </div>
            
        </div>
    </div>
    <!-- End Our About -->






<?php
get_footer();