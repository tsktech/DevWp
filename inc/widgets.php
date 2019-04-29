<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function depwp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'depwp' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'depwp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'depwp' ),
		'id'            => 'left-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'depwp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'depwp_widgets_init' );
