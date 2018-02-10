<?php
add_theme_support("title-tag");
add_theme_support("automatic-feed-links");
add_theme_support("post-thumbnails");
add_theme_support("custom-header");
add_theme_support("custom-background");
// meghatarozzuk az Oldalsav Widget poziciot
function theme_widgets_init() {
register_sidebar( array(
 'name' => 'Sidebar',
 'id' => 'sidebar',
 'description' => 'Sidebar',
 'before_widget' => '<div class="widget">',
 'after_widget' => '</div>',
 'before_title' => '<h4>',
 'after_title' => '</h4>',
) );
register_sidebar( array(
 'name' => 'Offer',
 'id' => 'offer',
 'description' => 'offer',
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
) );
register_sidebar( array(
 'name' => 'Testimonial',
 'id' => 'testimonial',
 'description' => 'testimonial',
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
) );
register_sidebar( array(
 'name' => 'Footer',
 'id' => 'footer',
 'description' => 'footer',
 'before_widget' => '<div class="one-third">',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
) );
}
add_action( 'widgets_init', 'theme_widgets_init' );
// navigation. ket menu területet határozunk meg elore
register_nav_menus(array(
 'main-menu' => __('Main Menu', 'basic-theme'),
 'foot-menu' => __('Foot Menu', 'basic-theme'),
));
?>
