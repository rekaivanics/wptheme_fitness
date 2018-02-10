<?php get_header(); ?>
<div class="center-box">
  <main>
    <?php if(!is_front_page()) { ?> <!--ha nem a front page-n vagy-->
      <h1 class="align-center"><?php the_title(); ?></h1>
  <?php } ?>

    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>

        <?php if(($post->post_parent == 41) || ($post->post_parent == 38)){ ?>

          <div class="row">
            <div class="one-third">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="two-third">
              <?php the_content(); ?>
            </div>
          </div>

        <?php  }else{ ?>
          <?php the_post_thumbnail(); ?>
          <?php the_content(); ?>
        <?php } ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </main>
</div>
<?php get_footer(); ?>
