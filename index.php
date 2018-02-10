<?php get_header(); ?>
<div class="center-box">
  <div class="row">
    <div class="two-third">
      <main>
        <h1><?php the_title(); ?></h1>
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <?php the_post_thumbnail(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </main>
    </div>
    <div class="one-third">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
