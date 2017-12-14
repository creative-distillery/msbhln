<?php get_header(); ?>

<?php
  $date = strtotime( get_field( 'date' ) );
?>

<div class="row info-bar">

  <div class="col-6 col-md-3 d-flex flex-nowrap justify-content-center align-items-center">
    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/cal.svg"/>
    <div>
      <h4>Date</h4>
      <p><?php echo date( 'M. j, Y', $date ); ?></p>
    </div>
  </div>

  <div class="col-6 col-md-3 d-flex flex-nowrap justify-content-center align-items-center">
    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/grey-clock.svg"/>
    <div>
      <h4>Time</h4>
      <p><?php the_field( 'start_time' ); ?></p>
    </div>
  </div>

  <div class="col-6 col-md-3 d-flex flex-nowrap justify-content-center align-items-center">
    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/cards.svg"/>
    <div>
      <h4>Cost</h4>
      <p>$<?php the_field( 'cost' ); ?></p>
    </div>
  </div>

  <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
    <a class="cd-btn-solid" href="<?php the_field( 'registration_link' ); ?>" target="_blank">Register  <i class="fa fa-chevron-right"></i></a>
  </div>

</div>

<div <?php post_class('row'); ?>>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="col-12 col-md-8">

      <?php the_title( '<h1>', '</h1>' ); ?>
      <?php the_content(); ?>

    </div>

    <div class="col-12 col-md-4">

      <?php if ( get_field( 'educational_objectives' ) ) : ?>

        <h4>Educational Objectives</h4>

        <?php the_field( 'educational_objectives' ); ?>

      <?php endif; ?>

      <?php if ( get_field( 'presenter' ) ) : ?>
        <div class="text-center mt-5">

          <h4>Presenter</h4>

          <p><?php the_field( 'presenter' ); ?></p>

        </div>
      <?php endif; ?>

      <?php
        $address = get_field( 'address' );
        $location = get_field( 'location' );
      ?>

      <?php if ( $address || $location ) : ?>

        <div class="location text-center mt-5">

          <h4>Location</h4>

          <?php if ( $location ): ?>
            <p class="location-name mb-0"><?php the_field( 'location' ); ?></p>
          <?php endif; ?>
          <?php if ( $address ): ?>
            <p><?php echo $address; ?></p>
            <a class="cd-btn" href="<?php //echo cd_map_link( $address ); ?>" target="_blank">Get Directions  <i class="fa fa-chevron-right"></i></a>
          <?php endif; ?>
        </div>

      <?php endif; ?>

    </div>

  <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
