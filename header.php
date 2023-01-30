<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package human_appeal
 */


    global $redux_demo;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- NABTOP____BAR  Start-->
    <nav class="top-nav">
        <div class="container">
           <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="top-info">
                        <p>
                            <span><i class="fa-solid fa-envelope"></i> : <?php echo $redux_demo['header_email_number'];?></span>
                        </p>
                        <p>
                            <span><i class="fa-solid fa-phone"></i> : <?php echo $redux_demo['head_phone_number'];?></span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="top-social">
                        <div class="social-link">
                            <?php if( $redux_demo['hfpl']): ?>
                            <a href="<?php echo esc_url($redux_demo['hfpl']);?>"><i class="fa-brands fa-facebook-f"></i></a>
                            <?php endif; ?>
                             <?php if( $redux_demo['htl']): ?>
                            <a href="<?php echo esc_url($redux_demo['htl']);?>"><i class="fa-brands fa-twitter"></i></a>
                             <?php endif; ?>
                             <?php if( $redux_demo['hisp']): ?>
                            <a href="<?php echo esc_url($redux_demo['hisp']);?>"><i class="fa-brands fa-instagram"></i></a>
                             <?php endif; ?>
                             <?php if( $redux_demo['hlndin']): ?>
                            <a href="<?php echo esc_url($redux_demo['hlndin']);?>"><i class="fa-brands fa-linkedin"></i></a>
                             <?php endif; ?>
                             <?php if( $redux_demo['hyou']): ?>
                            <a href="<?php echo esc_url($redux_demo['hyou']);?>"><i class="fa-brands fa-youtube"></i></a>
                             <?php endif; ?>
                        </div>
                        <?php if( $redux_demo['hea_form_hide_show']): ?>
                        <div class="log_in">
                            <form>
                                <button>Login</button>
                                <button>Register</button>
                            </form>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
           </div>
        </div>
    </nav>
    <!-- NABTOP____BAR End-->
    <!-- Main NavBar____BAR Start-->
    <nav  class="navbar navbar-expand-lg sticky-top navbar-light py-3">
       <div class="container">
            <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo $redux_demo['header_logs']['url']; ?>" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse hader_nav" id="navbarNav">

            	<?php wp_nav_menu([
            		'theme_location'	=> 'main-menu',
            		'container_class'	=> 'hader_nav',
            		'menu_class'		=> 'navbar-nav',
            		'menu_id'			=> '',
            		'li_class' 			=> 'nav-item',
                    'a_class' 			=> 'nav-link',
                    'active_class'		=> 'active',
                    'fallback_cb'		=> 'null_menu'
            	]) ?>
                <?php if( $redux_demo['hea_donete'] ): ?>
                <form class="form-inline top-btn  ms-auto">
                    <a href="<?php echo esc_url($redux_demo['hea_donete_links']); ?>">Donete Now</a>
                </form>
                <?php endif; ?>
            </div>
       </div>
    </nav>
