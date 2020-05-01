<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ENC_NEURO_SOLUTIONS
 */

?>
 <!-- Start Footer 
    ============================================= -->
    <footer class="bg-light">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
               <div class="row">
                    <div class="col-md-12 mob">
                        <h3>Subscribe To Our Newsletter</h3>
                    </div>
               </div>
                <div class="row">
                    <div class="col-md-4 desk">
                        <h3>Subscribe To Our Newsletter</h3>
                    </div>
                    <div class="col-md-8 col-xs-12 form text-right">
                        <form action="#">
                            <div class="input-group stylish-input-group">
                                <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                <span class="input-group-addon">
                                    <button type="submit" style="background: #000D6F;">
                                        Subscribe <i class="fa fa-paper-plane"></i>
                                    </button>  
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2020. All Rights Reserved by MYNDPRO.COM</p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="<?php echo home_url(); ?>/privacy-policy">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url(); ?>/disclaimer">Disclaimer</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url(); ?>/#contact">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->


  

<?php wp_footer(); ?>

</body>
</html>
