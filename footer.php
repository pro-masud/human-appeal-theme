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
                        <?php dynamic_sidebar('footer-1'); ?>
                    </div>
                    <div class="col-lg-3">
                        <?php dynamic_sidebar('footer-2'); ?>
                    </div>
                    <div class="col-lg-3">
                        <?php dynamic_sidebar('footer-3'); ?>
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
                          <?php dynamic_sidebar('footer-sub-1'); ?>
                    </div>
                    <div class="col-lg-3">
                         <?php dynamic_sidebar('footer-sub-2'); ?>
                    </div>
                    <div class="col-lg-3">
                         <?php dynamic_sidebar('footer-sub-3'); ?>
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
