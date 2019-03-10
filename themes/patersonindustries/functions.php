<?php
add_theme_support('post-thumbnails');

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

  ?>
