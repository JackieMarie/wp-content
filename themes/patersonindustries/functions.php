<?php
//Adds featured images to posts
add_theme_support('post-thumbnails');

//Add Widget Areas inside {}
function blank_widgets_init(){

//FOOTER WIDGET AREAS
//Left Footer Widget
  register_sidebar( array(
    'name'          =>  ('Left Footer'),
    'id'            =>  'footer-left',
    'description'   =>  'Left widget in the footer',
    'before_widget' =>  '<div class="widget-footer widget-left">',
    'after_widget'  =>   '</div>',
    'before_title'  =>  '<h5 class="widget-title">',
    'after_title'   =>  '</h5>',
  ));

//Middle Footer Widget
  register_sidebar( array(
    'name'          =>  ('Middle Footer'),
    'id'            =>  'footer-middle',
    'description'   =>  'Middle widget in the footer',
    'before_widget' =>  '<div class="widget-footer widget-middle">',
    'after_widget'  =>   '</div>',
    'before_title'  =>  '<h5 class="widget-title">',
    'after_title'   =>  '</h5>',
  ));

//Right Footer Widget
  register_sidebar( array(
    'name'          =>  ('Right Footer'),
    'id'            =>  'footer-right',
    'description'   =>  'Right widget in the footer',
    'before_widget' =>  '<div class="widget-footer widget-right">',
    'after_widget'  =>   '</div>',
    'before_title'  =>  '<h5 class="widget-title">',
    'after_title'   =>  '</h5>',
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
    'before_widget' =>    '<div class="header-image-services-widget">',
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
  'description'   =>    'Image for Equipment and Expertise',
  'before_widget' =>    '<div class="equipment-image">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3>',
  'after_title'   =>    '</h3>',
));

register_sidebar(array(
  'name'          =>    ('Equipment Text'),
  'id'            =>    'equipment-text',
  'description'   =>    'Description of Equipment and Expertise',
  'before_widget' =>    '<div class="equipment-text">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3>',
  'after_title'   =>    '</h3>',
));

register_sidebar(array(
  'name'          =>    ('Crew Image'),
  'id'            =>    'crew-image',
  'description'   =>    'Crew Photo',
  'before_widget' =>    '<div class="crew">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3>',
  'after_title'   =>    '</h3>',
));

register_sidebar(array(
  'name'          =>    ('Crew Text'),
  'id'            =>    'crew-text',
  'description'   =>    'Crew Titles',
  'before_widget' =>    '<div class="crew-text">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3>',
  'after_title'   =>    '</h3>',
));

register_sidebar(array(
  'name'          =>    ('Community Involvement Images'),
  'id'            =>    'community-slider',
  'description'   =>    'Community Involvement Slider',
  'before_widget' =>    '<div class="community-images">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3>',
  'after_title'   =>    '</h3>',
));


//SERVICE PAGE WIDGETS
register_sidebar(array(
  'name'          =>    ('Services List'),
  'id'            =>    'service-content',
  'description'   =>    'List of Services',
  'before_widget' =>    '<div class="service-content">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3>',
  'after_title'   =>    '</h3>',
));

register_sidebar(array(
  'name'          =>    ('Past Projects Slider'),
  'id'            =>    'past-projects',
  'description'   =>    'Past Projects Slider',
  'before_widget' =>    '<div class="past-projects">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3>',
  'after_title'   =>    '</h3>',
));

//SAFETY PAGE WIDGETS
register_sidebar(array(
  'name'          =>    ('Certifications'),
  'id'            =>    'certifications-symbols',
  'description'   =>    'Certifications',
  'before_widget' =>    '<div class="certification">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3>',
  'after_title'   =>    '</h3>',
));

register_sidebar(array(
  'name'          =>    ('Safety: Our Crew'),
  'id'            =>    'safety-crew',
  'description'   =>    'Safety description when it comes to the crew',
  'before_widget' =>    '<div class="safety-crew">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3>',
  'after_title'   =>    '</h3>',
));

register_sidebar(array(
  'name'          =>    ('Incident Count'),
  'id'            =>    'incident-count',
  'description'   =>    'Incident Counter',
  'before_widget' =>    '<div class="incident-count">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3>',
  'after_title'   =>    '</h3>',
));

register_sidebar(array(
  'name'          =>    ('Perfect Safety Record Text'),
  'id'            =>    'safety-record-text',
  'description'   =>    'Description for Safety Record',
  'before_widget' =>    '<div class="safety-content">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3>',
  'after_title'   =>    '</h3>',
));

register_sidebar(array(
  'name'          =>    ('AIMSIO Image'),
  'id'            =>    'aimsio-image',
  'description'   =>    'AIMSIO Image',
  'before_widget' =>    '<div class="aimsio-image">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3>',
  'after_title'   =>    '</h3>',
));

register_sidebar(array(
  'name'          =>    ('AIMSIO Text'),
  'id'            =>    'aimsio-text',
  'description'   =>    'AIMSIO Text',
  'before_widget' =>    '<div class="safety-content">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3>',
  'after_title'   =>    '</h3>',
));

//CALL TO ACTION Widget
register_sidebar( array(
  'name'          =>    ('Call To Action'),
  'id'            =>    'call-to-action',
  'description'   =>    'Widget for Call to Action section on pages',
  'before_widget' =>    '<div class="call-to-action">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3 class="widget-title-cta">',
  'after_title'   =>    '</h3>',
));

//HOME PAGE WIDGETS

register_sidebar( array(
  'name'          =>    ('Work Hard'),
  'id'            =>    'work-hard',
  'description'   =>    'Widget for Work Hard section on pages',
  'before_widget' =>    '<div class="work-hard">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3 class="widget-title-hard">',
  'after_title'   =>    '</h3>',
));

register_sidebar( array(
  'name'          =>    ('Stay Safe'),
  'id'            =>    'stay-safe',
  'description'   =>    'Widget for Work Hard section on page',
  'before_widget' =>    '<div class="stay-safe">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3 class="widget-title-hard">',
  'after_title'   =>    '</h3>',
));

register_sidebar( array(
  'name'          =>    ('Be Humble'),
  'id'            =>    'be-humble',
  'description'   =>    'Widget for Work Hard section on page',
  'before_widget' =>    '<div class="be-humble">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3 class="widget-title-hard">',
  'after_title'   =>    '</h3>',
));

register_sidebar( array(
  'name'          =>    ('Testimonials'),
  'id'            =>    'testimonials',
  'description'   =>    'Widget for Testimonials section on page',
  'before_widget' =>    '<div class="testimonials">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3 class="widget-title-testimonials">',
  'after_title'   =>    '</h3>',
));

register_sidebar( array(
  'name'          =>    ('Projects'),
  'id'            =>    'projects',
  'description'   =>    'Widget for Projects section on page',
  'before_widget' =>    '<div class="projects">',
  'after_widget'  =>    '</div>',
  'before_title'  =>    '<h3 class="widget-title-projects">',
  'after_title'   =>    '</h3>',
));

//SIDEBAR WIDGET AREAS - Services and Contact page
//Sidebar widget - SERVICES PAGE (FOR TRIANGLE)
  register_sidebar( array(
    'name'          =>    ('Sidebar'),
    'id'            =>    'sidebar',
    'description'   =>    'Sidebar widget area',
    'before_widget' =>    '<div class="widget-sidebar">',
    'after_widget'  =>    '</div>',
    'before_title'  =>    '<h4 class="widget-title">',
    'after_title'   =>    '</h4>',
  ));

//Sidebar Widget - CONTACT PAGE (FOR TRIANGLE)
  register_sidebar( array(
    'name'          =>    ('Sidebar Contact'),
    'id'            =>    'sidebar-contact',
    'description'   =>    'About Page Sidebar widget area',
    'before_widget' =>    '<div class="widget-sidebar-contact">',
    'after_widget'  =>    '</div>',
    'before_title'  =>    '<h4 class="widget-title">',
    'after_title'   =>    '</h4>',
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
