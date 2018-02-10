<?php get_header(); ?>
<main>
 <h1>
 Keresés: <?php echo get_search_query(); ?>
 </h1>
 <?php if(have_posts()) : ?>
 <?php while(have_posts()) : the_post(); ?>
 <article>
 <?php the_post_thumbnail(); ?>
 <h2>
 <a href="<?php the_permalink(); ?>">
 <?php the_title(); ?>
 </a>
 </h2>
 <?php the_date(); ?>
 <?php the_excerpt(); ?>
 </article>
 <?php endwhile; ?>
 <?php endif; ?>
</main>
<aside>
 <?php get_sidebar(); ?>
</aside>
<?php get_footer(); ?>
