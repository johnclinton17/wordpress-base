<?php
/*
 * Header For Deserve Theme.
 */
  $deserve_options = get_option( 'deserve_theme_options' );
  
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    
    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>



<header clas="nav-down">    
    <div class="menubar">
      <div class="container-fluid toplevel-menu">   
        <div class="deserve-container clearfix ">
            <div class="col-md-6">
                <div class="contact-info">
                    <ul>
                        
    
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                 <div class="topmenu">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('')); ?>/downloads">Downloads</a></li>
                        <li><a href="<?php echo esc_url(home_url('')); ?>/case-studies">Case Studies</a></li>
                        <li><a href="<?php echo esc_url(home_url('')); ?>/blog">Blog</a></li>
                        <li><a href="http://pellucidlive.com/radlive3/home.mvc/index" target="_blank">User Login</a></li>
                        <li><a href="<?php echo esc_url(home_url('')); ?>/contact-us">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        
        </div><!--container-->
    </div><!--menubar-->
    
    <div class="menubar responsive-menubar">
      
        <div class="deserve-container clearfix">
            <div class="col-md-2">
                <div  class="site-logo">
                                    
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url( get_template_directory_uri() );?>/images/pellucid.jpg" class="img-responsive" /></a>
        
                    <div class="navbar-header res-nav-header toggle-respon">
                        <button type="button" class="navbar-toggle toggle-menu" data-toggle="collapse" data-target=".navbar-collapse">
                           <span class="sr-only"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                   </div>
                </div><!--site logo-->
            </div><!--col 2-->

            <div class="col-md-10">
                <div class="header-menu">             
                   
                    <?php
            $deserve_defaults = array(
                            'theme_location'  => 'primary',
                            'container'       => 'div',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'navbar-collapse nav_coll no-padding collapse',
                            'menu_id'         => 'example-navbar-collapse',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s nav">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        );
            wp_nav_menu($deserve_defaults); ?>
                   
                              
                </div><!--header menu-->
            </div><!--col 10-->
        </div><!--container-->
      </div><!--container fluid-->
    </div><!--menubar-->
    
</header>
<body <?php body_class(); ?>>