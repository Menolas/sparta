<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ts">
 *
 * @package advance-fitness-gym
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <header role="banner">
    <?php if(get_theme_mod('advance_fitness_gym_preloader_option',true) != '' || get_theme_mod('advance_fitness_gym_responsive_preloader',true) != ''){ ?>
      <div id="loader-wrapper" class="w-100 h-100">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>
    <?php }?>
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'advance-fitness-gym' ); ?></a>
    <div id="header"> 
      <?php if( get_theme_mod('advance_fitness_gym_display_topbar') != ''){ ?>
        <div class="top_headbar">
          <div class="container">  
           
              <div class="top-contact">
                <span class="contact p-2">
                  <?php if( get_theme_mod( 'advance_fitness_gym_contact','' ) != '') { ?>
                    <a href="tel:<?php echo esc_attr( get_theme_mod('advance_fitness_gym_contact','' )); ?>"><i class="fa fa-phone mr-2" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('advance_fitness_gym_contact','' )); ?><span class="screen-reader-text"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('advance_fitness_gym_contact','' )); ?></span></a>
                 <?php } ?>
                </span>
                <span class="mail">
                  <?php if( get_theme_mod( 'advance_fitness_gym_email','' ) != '') { ?>
                    <a href="mailto:<?php echo esc_attr( get_theme_mod('advance_fitness_gym_email','') ); ?>"><i class="fa fa-envelope mr-2" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('advance_fitness_gym_email','') ); ?><span class="screen-reader-text"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('advance_fitness_gym_email','') ); ?></span></a>
                  <?php } ?>
                </span>
              </div>
              <div class="socialbox">
                <?php if( get_theme_mod( 'advance_fitness_gym_cont_facebook' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'advance_fitness_gym_cont_facebook','' ) ); ?>"><i class="fab fa-facebook-f p-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','advance-fitness-gym' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'advance_fitness_gym_cont_twitter' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'advance_fitness_gym_cont_twitter','' ) ); ?>"><i class="fab fa-twitter p-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','advance-fitness-gym' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'advance_fitness_gym_instagram') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'advance_fitness_gym_instagram','' ) ); ?>"><i class="fab fa-instagram p-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','advance-fitness-gym' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'advance_fitness_gym_linkedin') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'advance_fitness_gym_linkedin','' ) ); ?>"><i class="fab fa-linkedin-in p-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkdin','advance-fitness-gym' );?></span></a>
                <?php } ?>
              </div>
              <div class="clearfix"></div>  
            
          </div>
        </div>
      <?php } ?>
      <div class="middle-header <?php if( get_theme_mod( 'advance_fitness_gym_sticky_header', false) != '' || get_theme_mod( 'advance_fitness_gym_responsive_sticky_header', false) != '') { ?> sticky-header<?php } else { ?>close-sticky <?php } ?>">
                <div class="container">
                    <div class="logo">
                      <a href="/">
                        <img src="/wp-content/themes/advance-fitness-gym-child/img/svg/logo-sparta.svg">
                      </a>
                    </div>
     
                    <div class="main-menu">
                      <?php 
                        if(has_nav_menu('primary')){ ?>
                        <div class="toggle-menu responsive-menu text-right">
                          <button role="tab" class="mobiletoggle"><i class="fas fa-bars p-2 my-2"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','advance-fitness-gym'); ?></span></button>
                        </div>
                      <?php }?>
                      <div id="menu-sidebar" class="nav sidebar">
                        <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'advance-fitness-gym' ); ?>">
                          <?php 
                            if(has_nav_menu('primary')){
                            wp_nav_menu( array( 
                              'theme_location' => 'primary',
                              'container_class' => 'main-menu-navigation clearfix' ,
                              'menu_class' => 'clearfix',
                                'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav text-lg-left pl-lg-0">%3$s</ul>',
                                'fallback_cb' => 'wp_page_menu',
                              ) );
                            } 
                          ?>
                          <a href="javascript:void(0)" class="closebtn responsive-menu"><i class="far fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','advance-fitness-gym'); ?></span></a>
                        </nav>
                      </div>
                    </div>
                </div>
      </div>
    </div>
  </header>
  