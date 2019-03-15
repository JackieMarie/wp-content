<?php
//Adds featured images to posts
add_theme_support('post-thumbnails');

//Add Widget Areas inside {}
function blank_widgets_init(){

//FOOTER WIDGETS
register_sidebar(array(
  'name' => ('Footer Left'),
  'id' => 'footer-left',
  'description' => 'widget for footer left area',
  'before_widget' => '<div class="footer-left">',
  'after_widget' => '</div>',
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));

register_sidebar(array(
  'name' => ('Footer Right'),
  'id' => 'footer-right',
  'description' => 'widget for footer right area',
  'before_widget' => '<div class="footer-right">',
  'after_widget' => '</div>',
  'before_title' => '<h2>',
  'after_title' => '</h2>'
  ));

//HEADER WIDGETS
//Header Image Widget - HOME PAGE
  register_sidebar( array(
    'name'          =>    ('Home Header Image'),
    'id'            =>    'header-image-home',
    'description'   =>    'Header image on Home Page',
    'before_widget' =>    '<div class="header-image-home-widget">',
    'after_widget'  =>    '</div>',
    'before_title'  =>    '<h1 class="widget-title-header">',
    'after_title'   =>    '</h1>',
  ));

//Header Image Widget - ABOUT PAGE
  register_sidebar( array(
    'name'          =>    ('About Header Image'),
    'id'            =>    'header-image-about',
    'description'   =>    'Header image on About Page',
    'before_widget' =>    '<div class="header-image-about-widget">',
    'after_widget'  =>    '</div>',
    'before_title'  =>    '<h1 class="widget-title-header">',
    'after_title'   =>    '</h1>',
  ));

//Header Image Widget - CONTACT PAGE
  register_sidebar( array(
    'name'          =>    ('Contact Header Image'),
    'id'            =>    'header-image-contact',
    'description'   =>    'Header image on Contact Page',
    'before_widget' =>    '<div class="header-image-contact-widget">',
    'after_widget'  =>    '</div>',
    'before_title'  =>    '<h1 class="widget-title-header">',
    'after_title'   =>    '</h1>',
  ));

//Header Image Widget - SERVICES PAGE
  register_sidebar( array(
    'name'          =>    ('Services Header Image'),
    'id'            =>    'header-image-published',
    'description'   =>    'Header image on Services Page',
    'before_widget' =>    '<div class="header-image-published-widget">',
    'after_widget'  =>    '</div>',
    'before_title'  =>    '<h1 class="widget-title-header">',
    'after_title'   =>    '</h1>',
  ));

//Header Image Widget - SAFETY PAGE
  register_sidebar( array(
    'name'          =>    ('Coming Releases Header Image'),
    'id'            =>    'header-image-releases',
    'description'   =>    'Header image on Safety Page',
    'before_widget' =>    '<div class="header-image-releases-widget">',
    'after_widget'  =>    '</div>',
    'before_title'  =>    '<h1 class="widget-title-header">',
    'after_title'   =>    '</h1>',
  ));

//Header Image Widget - CAREERS PAGE
  register_sidebar( array(
    'name'          =>    ('Contact Header Image'),
    'id'            =>    'header-image-careers',
    'description'   =>    'Header image on Careers Page',
    'before_widget' =>    '<div class="header-image-careers-widget">',
    'after_widget'  =>    '</div>',
    'before_title'  =>    '<h1 class="widget-title-header">',
    'after_title'   =>    '</h1>',
  ));



//CALL TO ACTION Widget
register_sidebar( array(
  'name'          =>    ('Call To Action'),
  'id'            =>    'call-to-action',
  'description'   =>    'Widget for Call to Action section on pages',
  'before_widget' =>    '<div class="call-to-action">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2 class="widget-title-cta">',
  'after_title'   =>    '</h2>',
));


}



//END WIDGET AREAS


add_action('widgets_init', 'blank_widgets_init');

//CUSTOM MENUS
function custom_menus(){
  register_nav_menus( array(
    'header-menu'   =>  ('Header Menu'),
    'footer-menu'   =>  ('Footer Menu'),
  ));
}

add_action('init', 'custom_menus');

//Creates a Custom Header
$custom_image_header = array(
  'width'   =>  171,
  'height'  =>  31,
  'uploads' =>  true,
);

add_theme_support('custom-header', $custom_image_header);





  ?>
