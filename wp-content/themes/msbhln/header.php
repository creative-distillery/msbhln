<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icon path here -->
    <link rel="icon" href="">

    <?php wp_head(); ?>

  </head>

  <body <?php body_class('default-header'); ?>>


      <nav class="navbar navbar-expand-lg">

        <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/MSBHLN-header-logo.png" alt="Mississippi Behavioral Health Learning Center"/>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle Main Menu">
          <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse cd-nav" id="main_nav">

          <?php
            $mainMenu = array(
              'theme_location' => 'header-menu',
              'menu_class'  => 'navbar-nav nav',
              'container'   => 'false'
            );
            $ctaLinks = array(
              'theme_location' => 'cta-links',
              'menu_class'  => 'navbar-nav nav',
              'container'   => 'false'
            );
            wp_nav_menu( $mainMenu );
            wp_nav_menu( $ctaLinks );
          ?>

          <!-- <a href="#">
            <div class="search-circle">
              <i class="fa fa-search m-2"></i>
            </div>
          </a> -->

        </div>
      </nav>

    <div class="container-fluid">
