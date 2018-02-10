<?php get_header(); ?>
<div class="center-box">
  <div class="row">
    <div class="two-third">
      <main>
        <h1>

          <?php
          if (is_category()) {
            single_cat_title();
          }
          if (is_tag()) {
            single_tag_title();
          }
          ?>
        </h1>
        <div class="row">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <article class="one-half">
                <?php the_post_thumbnail(); ?>
                <h4>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h4>
                <?php the_date(); ?>
                <?php the_excerpt(); ?>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </main>
    </div>
    <div class="one-third">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
