<?php get_header(); ?>

<?php

//TODO: order events by custom post date, not publish date.
  $args = array(
    'post_type' => 'events',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'ASC'
  );
  $query = new WP_Query($args);
?>

<?php if ( $query->have_posts() ) : ?>

  <div class="row events-section">
    <div class="col-12 title">
      <h2>Upcoming Events</h2>
    </div>

    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

      <?php
        $start_date = strtotime( get_field( 'start_date' ) );
        $end_date = strtotime( get_field( 'end_date' ) );
        $start_time = strtotime( get_field( 'start-time' ) );
      ?>

      <div class="col-12 col-md-4">
        <div class="event">

          <p class="month"><?php echo date( 'M', $start_date ); ?></p>
          <p class="date"><?php echo date( 'd', $start_date ); ?></p>
          <div class="date-time">
            <p class="day"><?php echo date( 'l', $start_date ); ?></p>
            <p class="time"><?php the_field( 'start_time' ); ?></p>
          </div>
          <h3><?php the_title(); ?></h4>
          <div class="excerpt">
            <?php the_excerpt(); ?>
          </div>
          <a class="cd-btn" href="<?php the_permalink(); ?>">Register Now  <i class="fa fa-chevron-right"></i></a>
        </div>
      </div>

    <?php endwhile; ?>

  </div>

<?php endif; wp_reset_postdata(); ?>

<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'ASC'
  );
  $query = new WP_Query( $args );
?>
<?php if ( $query->have_posts() ) : ?>
  <div class="news-section">
    <div class="row">
      <div class="title col-12 text-center">
        <h2>News Feed</h2>
      </div>
    </div>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <?php $img = get_field( 'image' ); ?>
      <div class="row my-5">

        <div class="col-12 col-md-3">
          <?php if ( $img ) : ?><img class="img-fluid" src="<?php echo $img['sizes']['medium_large']; ?>" alt="<?php echo $img['alt']; ?>"/><?php endif; ?>
        </div>

        <div class="col-12 col-md-9">
          <div class="content">
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <a class="cd-btn" href="<?php the_permalink(); ?>">Read More  <i class="fa fa-chevron-right"></i></a>
          </div>
        </div>

      </div>
    <?php endwhile; ?>

    <div class="row">
      <div class="read-more col-12 text-center">
        <a class="cd-btn color-accent" href="highlights">Read More Latest Updates  <i class="fa fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
<?php endif; ?>

<hr class="seperator">

<div class="partnership-section">
  <div class="row">
    <div class="col-12 text-center">
      <h3>Partnership</h3>
      <p>The Mississippi Behavioral Health Learning Network (MSBHLN) is coordinated by  the Mississippi Public Health Institute (MSPHI) and funded by the Mississippi Department  of Mental Health Bureau of Alcohol and Drug Services (DMH BADS).MS</p>
    </div>
  </div>

  <div class="row logos">
    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/msphi-color.svg" alt="MSPHI Logo"/>
    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/dmh-color.svg" alt="DMH Logo"/>
  </div>
</div>

<?php get_footer(); ?>
