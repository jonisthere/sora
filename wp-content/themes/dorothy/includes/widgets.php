<?php
// ==================================================================
// Widget - Sidebar
// ==================================================================
function right_widgets_init() {
  register_sidebar( array(
    'name' => 'Right Widget',
    'id' => 'right-widget',
    'description' => 'Right side widget area',
    'before_widget' => '<article class="side-widget">',
    'after_widget' => '</article>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'right_widgets_init' );

// ==================================================================
// Widget - Footer
// ==================================================================
function footer_widgets_init() {
  register_sidebar( array(
    'name' => 'Footer Widget',
    'id' => 'footer-widget',
    'description' => 'Footer widget area.',
    'before_widget' => '<article class="footer-widget">',
    'after_widget' => '</article>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ) );
}
add_action( 'widgets_init', 'footer_widgets_init' );