<?php

  if ( get_field( 'logo_switching', 'option' ) == 'false' ) {
    if ( ! empty( get_field( 'logo', 'option' ) ) ) {
      $logoImg = get_field( 'logo', 'option' );
      $homeLogo = '<img src="' . $logoImg['url'] . '" alt="' . $logoImg['alt'] . '" class="img-fluid"/>';
    } else {

    }
  }

 ?>

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

  <body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-md">

      <a class="navbar-brand w-75 mr-auto" href="<?php bloginfo('url'); ?>">
        <?php if ( !empty($homeLogo)){ echo $homeLogo; } else { bloginfo('name'); } ?>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Toggle Main Menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse cd-nav" id="main_menu">

        <?php

          $args = array(
            'theme_location' => 'header-menu',
            'menu_class'  => 'navbar-nav nav justify-content-end',
            'container'   => 'false'
          );
          wp_nav_menu( $args );

           ?>

      </div>
    </nav>

    <div class="container-fluid">
