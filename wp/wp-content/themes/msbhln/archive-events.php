<?php get_header(); ?>

<div class="row my-5">
  <div class="col-12">
    <h2>Training Schedule</h2>
  </div>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php $date = strtotime( get_field( 'date' ) ); ?>

  <hr class="event-seperator">
  <div class="row event">

    <div class="col-md-9 d-flex align-items-center">

      <div class="text-center month-date">
        <p class="month"><?php echo date( 'M', $date ); ?></p>
        <p class="date"><?php echo date( 'd', $date ); ?></p>
      </div>

      <div class="info">

        <div class="d-flex justify-content-between mr-5">
          <h3><?php the_title(); ?></h3>
          <p class="color-accent font-light mr-5"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/clock.svg"/>  <?php the_field( 'start_time' ); ?></p>
        </div>

        <?php if ( get_field( 'location' ) ) : ?>
          <h5>Location: <?php the_field( 'location' ); ?></h5>
        <?php endif; ?>
        <?php the_excerpt(); ?>

      </div>

    </div>

    <div class="col-md-3 d-flex align-items-center">
      <a class="cd-btn color-font" href="<?php the_permalink(); ?>">Event Details  <i class="fa fa-chevron-right"></i></a>
    </div>

  </div>
<?php endwhile; endif; ?>


<?php get_footer(); ?>
