<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package human_appeal
 */
    global $redux_demo;
?>

	  <!-- footer section part start now -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget-item">
                            <div class="footer-img">
                               <a href="#"> <img src="<?php echo $redux_demo['footer_logo']['url']; ?>" alt="flogo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-item">
                            <h4><i class="fa-solid fa-phone"></i> Phone</h4>
                            <div class="footer-info">
                                <p>+880 1727 809264 (whatsapp)</p>
                                <p>+880 1886 809264 </p>
                                <p>+880 1770 198277</p>
                            </div>
                            <div class="footer-social-link">
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-item">
                            <h4><i class="fa-solid fa-envelope"></i> Email</h4>
                            <div class="footer-info">
                                <p>contact@humanappealbd.org</p>
                                <p>humanappealbd2010@gmail.com</p>
                            </div>
                        </div>
                        <div class="footer-btn">
                            <a href="#">Donate Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-item">
                            <h4><i class="fa-solid fa-location-pin"></i> Location</h4>
                            <div class="footer-info">
                                <p>Al Bayan Complex, Link Road, Cox’s Bazar, Bangladesh</p>
                                <p><strong>Liaison Office:</strong>#05, Road#05, Priyanka City, Sector#12, Uttara, Dhaka-1230</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget-item">
                           <div class="pages-link">
                                
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-item">
                           <div class="pages-link">
                                <a href="#">Home</a>
                                <a href="#">About</a>
                                <a href="#">Blog</a>
                                <a href="#">Gellary</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-item">
                           <div class="pages-link">
                                <a href="#">Recent Activities</a>
                                <a href="#">News</a>
                                <a href="#">Career</a>
                                <a href="#">Contact Us</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-item">
                           <div class="pages-link">
                                <a href="#">Terms and Condition</a>
                                <a href="#">About donation</a>
                                <a href="#">Get Involved</a>
                                <a href="#">Become a doner</a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer-copy-right-text">
                            <?php if($redux_demo['footer_copy_right']): ?>
                            <p><?php echo $redux_demo['footer_copy_right']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-right-link">
                            <?php if($redux_demo['footer_faq_link']) : ?>
                            <a href="<?php echo esc_url($redux_demo['footer_faq_link']); ?>">FAQ</a>
                            <?php endif; ?>
                            <?php if($redux_demo['footer_help_link']) : ?>
                            <a href="<?php echo esc_url($redux_demo['footer_help_link']); ?>">HELP DESK</a>
                            <?php endif; ?>
                            <?php if($redux_demo['footer_support_link']) : ?>
                            <a href="<?php echo esc_url($redux_demo['footer_support_link']); ?>">SUPPORT</a>  
                            <?php endif; ?>          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section part end now -->


   

    <?php  wp_footer(); ?>
</body>
</html>
