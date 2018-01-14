
<?php

/**
 * Register our sidebars and widgetized areas.
 */
function mdb4wp_widgets_init() {

  register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ) );

}
add_action( 'widgets_init', 'mdb4wp_widgets_init' );
            