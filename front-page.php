<?php get_header(); ?>

<section id="services">
  <div class="center-box">

    <?php $servicetop = get_post(38) ?>
    <h2 class="align-center"><?php echo $servicetop -> post_title; ?></h2>
    <p class="align-center"><?php echo $servicetop -> post_content; ?></p>

    <div class="row">
      <?php
      $args = array('child_of' => 38);
      $services = get_pages($args);
      foreach ($services as $service) { ?>
        <div class="one-third">
          <div class="service">
            <?php echo get_the_post_thumbnail($service->ID); ?>
            <a class="button" href="<?php echo $service->post_name; ?>"><?php echo $service->post_title; ?></a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<section id="offer">
  <div class="center-box">
    <div id="offer-text">

      <?php dynamic_sidebar('Offer'); ?>

    </div>
  </div>
</section>

<section id="team">
  <div class="center-box">
    <?php $teamtop = get_post(41) ?>
    <h2 class="align-center"><?php echo $teamtop -> post_title; ?></h2>
    <p class="align-center"><?php echo $teamtop -> post_content; ?></p>
    <div class="row">

      <?php
      $args = array('child_of' => 41);
      $team = get_pages($args);
      foreach ($team as $member) { ?>
        <div class="one-fourth">
          <div class="team-member">
            <?php echo get_the_post_thumbnail($member->ID); ?>
            <div class="team-text">
              <h4><?php echo $member->post_title; ?></h4>
              <?php
              $content = get_post_field( 'post_content', $member->ID );
              // Get content parts
              $content_parts = get_extended( $content );
              // Output part before <!--more--> tag
              echo wpautop ($content_parts['main']); ?>

                <a class="button" href="<?php echo $member->post_name; ?>">Bővebben</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>

    <div id="testimonials">
      <?php dynamic_sidebar('Testimonial'); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
