<?php

// Register Custom Navigation Walker
require_once(__DIR__ . '/php/contrib/wp_bootstrap_navwalker.php');

// create a new constant that holds the URI to the theme
define('THEME_ROOT', get_template_directory_uri());

// function that sets up basic settings/variables of theme
function setupTheme() {
  // show wordpress adminbar when admin
  if (!current_user_can('edit_posts')) {
    show_admin_bar( false );
  } else {
    show_admin_bar( true );  
  }

  //add theme support for menus
  add_theme_support('menus');
  register_nav_menus(
    array(
      'main_menu' => 'Main Menu',
    )
  );

  // add some post formats (display)
  add_theme_support('post-formats', array( 'aside', 'gallery', 'quote' ));
}
// run setup function
setupTheme();


// function that enqueues all JS scripts our theme uses
function enqueueJavaScripts() {
  $jsFiles = array(
    'bootstrapjs' => array(
      'src' => '/js/libs/bootstrap.min.js', // the file itself
      'deps' => array('jquery-core') // the file dependencies
    ),
    /* keep adding them...
    'funnyScript2' => array(
      'src' => '/js/funnyScript2.js', // the file itself
      'deps' => array('bootstrapjs') // the file dependencies
    ),
    */
  );

  /**
   * Register the required JS scripts for this theme.
   *
   */
  foreach ($jsFiles as $key => $file) {
    /* example:
      wp_enqueue_script('bootstrapjs', 'js/libs/bootstrap.js', array('jquery-core'));
    */
    wp_enqueue_script($key, THEME_ROOT . $file['src'], $file['deps']);
  }
}
// add our function to the wordpress boot cycle
add_action('wp_enqueue_scripts', 'enqueueJavaScripts');

function enqueueStylesheets() {
  $cssFiles = array(
    'stylescss' => array(
      'src' => '/css/all.css', // the file itself
      'deps' => array() // the file dependencies
    ),
    /*
    'funnycss' => array(
      'src' => '/css/funny.css', // the file itself
      'deps' => array('stylescss') // the file dependencies
    ),
    */
  );

  /**
   * Register the required CSS scripts for this theme.
   *
   */
  foreach ($cssFiles as $key => $file) {
    wp_enqueue_style($key, THEME_ROOT . $file['src'], $file['deps']);
  }
}
// add our function to the wordpress boot cycle
add_action('wp_enqueue_scripts', 'enqueueStylesheets');


/**
 * Register our sidebars and widgetized areas.
 *
 */
function wcms_widgets_init() {
  register_sidebar(array(
    'name'          => 'Right sidebar',
    'id'            => 'right_sidebar_1',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="sidebar-title">',
    'after_title'   => '</h2>',
  ));

  register_sidebar(array(
    'name'          => 'Left sidebar',
    'id'            => 'left_sidebar_1',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="sidebar-title">',
    'after_title'   => '</h2>',
  ));
}
// add our function to the wordpress boot cycle
add_action( 'widgets_init', 'wcms_widgets_init' );
