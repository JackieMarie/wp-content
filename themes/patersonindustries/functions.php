<?php
//Adds featured images to posts
add_theme_support('post-thumbnails');

//Add Widget Areas inside {}
function blank_widgets_init(){

//FOOTER WIDGETS
register_sidebar(array(
  'name' => ('Footer Left 1'),
  'id' => 'footer-left1',
  'description' => 'widget for footer left area',
  'before_widget' => '<div class="footer-left">',
  'after_widget' => '</div>',
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));

register_sidebar(array(
  'name' => ('Footer Left 2'),
  'id' => 'footer-left2',
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
    'id'            =>    'header-image-service',
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


//ABOUT PAGE WIDGETS
register_sidebar(array(
  'name'          =>    ('Equipment Image'),
  'id'            =>    'equipment-image',
  'description'   =>    'Image for Equipment and Experitise',
  'before_widget' =>    '<div class="equipment-imgage">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
));

register_sidebar(array(
  'name'          =>    ('Equipment Text'),
  'id'            =>    'equipment-text',
  'description'   =>    'Description of Equipment and Experitise',
  'before_widget' =>    '<div class="equipment-text">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
));

register_sidebar(array(
  'name'          =>    ('Crew Image'),
  'id'            =>    'crew-image',
  'description'   =>    'Crew Photo',
  'before_widget' =>    '<div class="crew">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
));

register_sidebar(array(
  'name'          =>    ('Crew Text'),
  'id'            =>    'crew-text',
  'description'   =>    'Crew Titles',
  'before_widget' =>    '<div class="crew-text">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
));

register_sidebar(array(
  'name'          =>    ('Community Involvement Images'),
  'id'            =>    'community-slider',
  'description'   =>    'Community Involvement Slider',
  'before_widget' =>    '<div class="community-images">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
));


//SERVICE PAGE WIDGETS
register_sidebar(array(
  'name'          =>    ('Services List'),
  'id'            =>    'service-content',
  'description'   =>    'List of Services',
  'before_widget' =>    '<div class="service-content">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
));

register_sidebar(array(
  'name'          =>    ('Past Projects Slider'),
  'id'            =>    'past-projects',
  'description'   =>    'Past Projects Slider',
  'before_widget' =>    '<div class="past-projects">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
));

register_sidebar(array(
  'name'          =>    ('Equipment Text'),
  'id'            =>    'equipment-text',
  'description'   =>    'Description of Equipment and Experitise',
  'before_widget' =>    '<div class="equipment-text">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
));


//SAFETY PAGE WIDGETS
register_sidebar(array(
  'name'          =>    ('Certifications'),
  'id'            =>    'certifications-symbols',
  'description'   =>    'Certifications',
  'before_widget' =>    '<div class="certification">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
));

register_sidebar(array(
  'name'          =>    ('Safety: Our Crew'),
  'id'            =>    'safety-crew',
  'description'   =>    'Safety description when it comes to the crew',
  'before_widget' =>    '<div class="safety-crew">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
));

register_sidebar(array(
  'name'          =>    ('Incident Count'),
  'id'            =>    'incident-count',
  'description'   =>    'Incident Counter',
  'before_widget' =>    '<div class="incident-count">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
));

register_sidebar(array(
  'name'          =>    ('Perfect Safety Record Text'),
  'id'            =>    'safety-record-text',
  'description'   =>    'Description for Safety Record',
  'before_widget' =>    '<div class="safety-content">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
));

register_sidebar(array(
  'name'          =>    ('AIMSIO Image'),
  'id'            =>    'aimsio-image',
  'description'   =>    'AIMSIO Image',
  'before_widget' =>    '<div class="aimsio-image">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
));

register_sidebar(array(
  'name'          =>    ('AIMSIO Text'),
  'id'            =>    'aimsio-text',
  'description'   =>    'AIMSIO Text',
  'before_widget' =>    '<div class="safety-content">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
));


//CAREER PAGE WIDGETS
register_sidebar(array(
  'name'          =>    ('Benefits'),
  'id'            =>    'benefits',
  'description'   =>    'Company benefits',
  'before_widget' =>    '<div class="benefits">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h2>',
  'after_title'   =>    '</h2>',
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
