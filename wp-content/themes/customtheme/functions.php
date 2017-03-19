<?php
  /**
   * custom theme function file
   */


  /**
   * Enqueue scripts and styles.
   */
  function enqueue_customtheme_styles() {
    wp_enqueue_style("normalize-style", "//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css");
    wp_enqueue_style("bootstrap-style", "//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
    wp_enqueue_style("fonts-style", "//fonts.googleapis.com/css?family=Raleway:300,400,700");
    wp_enqueue_style("customtheme-style", get_stylesheet_uri());
    wp_enqueue_script("bootstrap-js", "//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'));
  }
  add_action("wp_enqueue_scripts", "enqueue_customtheme_styles");

  /**
   * Register nav.
   */
  function customtheme_setup() {

    // register custom primary menu
    register_nav_menus(array(
        "primary" => __("Primary Menu", "customtheme")
    ));

    // add meta title tag support
    add_theme_support("title-tag");
  }
  add_action("after_setup_theme", "customtheme_setup");

  function customtheme_widgets() {
    register_sidebar(array(
      'name'          => __('Sidebar', 'customtheme'),
      'id'            => 'sidebar-1',
      'description '  => __('Add widgets here to appear in the sidebar', 'customtheme'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class "widget-title">',
      'after_title'   => '</h2>'
    ));
  }
  add_action('widgets_init', 'customtheme_widgets');

  function custom_shortcode( $atts, $content = null) {
    return '<div class="col-sm-4">'.$content.'</div>';
  }
  add_shortcode('one_third', 'custom_shortcode');


  //disable automatic paragraph feature
  //remove_filter('the_content', 'wpautop');
?>