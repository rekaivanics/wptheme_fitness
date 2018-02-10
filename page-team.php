
<?php /* Template name: Team */ ?>
<?php get_header(); ?>

<div class="center-box">
  <main>
      <h1 class="align-center">
        <?php the_title(); ?>
      </h1>

    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
          <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>

        <?php $currentpage = $post->ID;
        $args = array('child_of' => $currentpage);
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








      <?php endwhile; ?>
    <?php endif; ?>
  </main>
</div>
<?php get_footer(); ?>
